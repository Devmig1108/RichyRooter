<?php
declare(strict_types=1);

// process-quote.php

/*
|--------------------------------------------------------------------------
| Configuration
|--------------------------------------------------------------------------
*/

$turnstileSecret = '0x4AAAAAAEqhrQamco6n4HO8Bv5O_T1duWs';
$zeptoMailToken  = 'Zoho-enczapikey wSsVR60g/EakBqwpz2f7du87kQgEBgz1FU1/3Vrz7CL4SPnLpcdqxEKYDASuTfhNEGVsQWBEo+ggyUhS0TRdiN8vyF1SDSiF9mqRe1U4J3x17qnvhDzOXG1ckhWMKIkJwgxvmmJmEsEi+g==';

$verifiedSenderEmail  = 'info@richyrooterllc.com';
$clientRecipientEmail = 'granadosr90@yahoo.com';

$allowedTurnstileHostnames = [
    'richyrooterllc.com',
    'www.richyrooterllc.com',
];

/*
|--------------------------------------------------------------------------
| Helper functions
|--------------------------------------------------------------------------
*/

function stopRequest(string $message, int $statusCode = 422): void
{
    http_response_code($statusCode);
    header('Content-Type: text/plain; charset=UTF-8');
    exit($message);
}

function getPostValue(string $field, int $maxLength = 500): string
{
    if (!isset($_POST[$field]) || !is_string($_POST[$field])) {
        return '';
    }

    $value = trim($_POST[$field]);
    $value = str_replace("\0", '', $value);

    if (strlen($value) > $maxLength) {
        $value = substr($value, 0, $maxLength);
    }

    return $value;
}

function escapeHtml(string $value): string
{
    return htmlspecialchars(
        $value,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}

/*
|--------------------------------------------------------------------------
| Require POST
|--------------------------------------------------------------------------
*/

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /');
    exit;
}

/*
|--------------------------------------------------------------------------
| Honeypot check
|--------------------------------------------------------------------------
*/

if (getPostValue('company_website', 255) !== '') {
    header('Location: /thank-you.php');
    exit;
}

/*
|--------------------------------------------------------------------------
| Cloudflare Turnstile verification
|--------------------------------------------------------------------------
*/

$turnstileToken = getPostValue('cf-turnstile-response', 2048);

if ($turnstileToken === '') {
    stopRequest(
        'Please complete the security verification and try again.'
    );
}

$turnstilePostData = [
    'secret'   => $turnstileSecret,
    'response' => $turnstileToken,
];

if (!empty($_SERVER['REMOTE_ADDR'])) {
    $turnstilePostData['remoteip'] = $_SERVER['REMOTE_ADDR'];
}

$turnstileCurl = curl_init(
    'https://challenges.cloudflare.com/turnstile/v0/siteverify'
);

if ($turnstileCurl === false) {
    error_log('Unable to initialize the Turnstile request.');

    stopRequest(
        'Security verification is temporarily unavailable. Please try again.',
        503
    );
}

curl_setopt_array($turnstileCurl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => http_build_query($turnstilePostData),
    CURLOPT_HTTPHEADER     => [
        'Accept: application/json',
        'Content-Type: application/x-www-form-urlencoded',
    ],
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT        => 10,
]);

$turnstileResponse  = curl_exec($turnstileCurl);
$turnstileHttpCode  = (int) curl_getinfo(
    $turnstileCurl,
    CURLINFO_HTTP_CODE
);
$turnstileCurlError = curl_error($turnstileCurl);

curl_close($turnstileCurl);

if ($turnstileResponse === false || $turnstileHttpCode !== 200) {
    error_log(
        'Turnstile connection error: ' .
        ($turnstileCurlError !== ''
            ? $turnstileCurlError
            : 'HTTP status ' . $turnstileHttpCode)
    );

    stopRequest(
        'Security verification is temporarily unavailable. Please try again.',
        503
    );
}

$turnstileResult = json_decode($turnstileResponse, true);

if (!is_array($turnstileResult)) {
    error_log('Turnstile returned invalid JSON.');

    stopRequest(
        'Security verification is temporarily unavailable. Please try again.',
        503
    );
}

$turnstileSuccess  = ($turnstileResult['success'] ?? false) === true;
$turnstileAction   = (string) ($turnstileResult['action'] ?? '');
$turnstileHostname = strtolower(
    (string) ($turnstileResult['hostname'] ?? '')
);

$turnstilePassed =
    $turnstileSuccess &&
    $turnstileAction === 'plumbing_quote' &&
    in_array(
        $turnstileHostname,
        $allowedTurnstileHostnames,
        true
    );

if (!$turnstilePassed) {
    $turnstileErrors = $turnstileResult['error-codes'] ?? [];

    if (!is_array($turnstileErrors)) {
        $turnstileErrors = ['unknown'];
    }

    error_log(
        'Turnstile verification failed. Hostname: ' .
        $turnstileHostname .
        '; action: ' .
        $turnstileAction .
        '; errors: ' .
        implode(', ', $turnstileErrors)
    );

    stopRequest(
        'Security verification failed. Please refresh the page and try again.'
    );
}

/*
|--------------------------------------------------------------------------
| Capture form inputs
|--------------------------------------------------------------------------
*/

$name         = getPostValue('fullName', 100);
$email        = getPostValue('email', 254);
$phone        = getPostValue('phone', 40);
$serviceValue = getPostValue('serviceNeeded', 100);
$message      = getPostValue('message', 3000);

if ($message === '') {
    $message = 'No additional details provided.';
}

if (
    $name === '' ||
    $email === '' ||
    $phone === '' ||
    $serviceValue === ''
) {
    stopRequest('Please fill out all required fields.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    stopRequest('Please enter a valid email address.');
}

/*
|--------------------------------------------------------------------------
| Validate and label the requested service
|--------------------------------------------------------------------------
*/

$allowedServices = [
    'emergency'    => 'Emergency Plumbing',
    'water-heater' => 'Water Heater Repair/Install',
    'drain'        => 'Drain Cleaning & Stoppage',
    'slab-leak'    => 'Slab Leak Repair',
    'commercial'   => 'Commercial Services',
    'other'        => 'Other Plumbing Issue',
];

if (!array_key_exists($serviceValue, $allowedServices)) {
    stopRequest('Please select a valid plumbing service.');
}

$service = $allowedServices[$serviceValue];

/*
|--------------------------------------------------------------------------
| Escape values for the HTML email
|--------------------------------------------------------------------------
*/

$safeName    = escapeHtml($name);
$safeEmail   = escapeHtml($email);
$safePhone   = escapeHtml($phone);
$safeService = escapeHtml($service);
$safeMessage = nl2br(escapeHtml($message));

/*
|--------------------------------------------------------------------------
| Construct HTML email
|--------------------------------------------------------------------------
*/

$htmlBody = <<<HTML
<div style="font-family:Arial,sans-serif; background-color:#f4f7f6; padding:40px 20px; color:#333;">
    <div style="max-width:600px; margin:0 auto; background-color:#fff; border-radius:8px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,0.1); border:1px solid #e2e8f0;">

        <div style="background-color:#121a2c; padding:25px; text-align:center;">
            <h2 style="margin:0; font-size:24px; font-weight:900; color:#fff; text-transform:uppercase; letter-spacing:1px;">
                New Dispatch Request
            </h2>
        </div>

        <div style="padding:30px;">
            <p style="font-size:16px; line-height:1.6; color:#555; margin:0 0 25px;">
                A new lead has requested service from the Richy Rooter
                website. Here are the details of the plumbing issue:
            </p>

            <table style="width:100%; border-collapse:collapse; font-size:15px;">
                <tr>
                    <td style="padding:14px 0; border-bottom:1px solid #eee; width:35%; font-weight:bold; color:#0f172a;">
                        Full Name:
                    </td>
                    <td style="padding:14px 0; border-bottom:1px solid #eee; color:#333;">
                        {$safeName}
                    </td>
                </tr>

                <tr>
                    <td style="padding:14px 0; border-bottom:1px solid #eee; font-weight:bold; color:#0f172a;">
                        Email Address:
                    </td>
                    <td style="padding:14px 0; border-bottom:1px solid #eee;">
                        <a href="mailto:{$safeEmail}" style="color:#121a2c; text-decoration:none; font-weight:bold;">
                            {$safeEmail}
                        </a>
                    </td>
                </tr>

                <tr>
                    <td style="padding:14px 0; border-bottom:1px solid #eee; font-weight:bold; color:#0f172a;">
                        Phone Number:
                    </td>
                    <td style="padding:14px 0; border-bottom:1px solid #eee; color:#333;">
                        {$safePhone}
                    </td>
                </tr>

                <tr>
                    <td style="padding:14px 0; border-bottom:1px solid #eee; font-weight:bold; color:#0f172a;">
                        Service Needed:
                    </td>
                    <td style="padding:14px 0; border-bottom:1px solid #eee; color:#333;">
                        <span style="background-color:#f8fafc; padding:4px 8px; border-radius:4px; border:1px solid #e2e8f0;">
                            {$safeService}
                        </span>
                    </td>
                </tr>

                <tr>
                    <td style="padding:14px 0; font-weight:bold; color:#0f172a; vertical-align:top;">
                        Message Details:
                    </td>
                    <td style="padding:14px 0; color:#333; line-height:1.6;">
                        {$safeMessage}
                    </td>
                </tr>
            </table>
        </div>

        <div style="background-color:#f8fafc; padding:20px; text-align:center; border-top:1px solid #e2e8f0;">
            <p style="margin:0; font-size:13px; color:#94a3b8; line-height:1.5;">
                <em>
                    To respond to this lead, use the email address or
                    phone number provided above.
                </em>
                <br><br>
                <strong>Richy Rooter Automated Dispatch</strong>
            </p>
        </div>
    </div>
</div>
HTML;

$textBody =
    "New Richy Rooter Dispatch Request\n" .
    "Name: {$name}\n" .
    "Phone: {$phone}\n" .
    "Email: {$email}\n" .
    "Service: {$service}\n" .
    "Message: {$message}";

/*
|--------------------------------------------------------------------------
| Prepare ZeptoMail request
|--------------------------------------------------------------------------
*/

$postData = [
    'from' => [
        'address' => $verifiedSenderEmail,
        'name'    => 'Richy Rooter Website',
    ],
    'to' => [
        [
            'email_address' => [
                'address' => $clientRecipientEmail,
                'name'    => 'Richy Rooter Dispatch',
            ],
        ],
    ],
    'subject'  => "New Lead: {$name} - {$service}",
    'htmlbody' => $htmlBody,
    'textbody' => $textBody,
];

$encodedPostData = json_encode(
    $postData,
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
);

if ($encodedPostData === false) {
    error_log('Unable to encode the ZeptoMail request.');

    stopRequest(
        'There was an error submitting your request. Please call us directly.',
        500
    );
}

/*
|--------------------------------------------------------------------------
| Send through ZeptoMail
|--------------------------------------------------------------------------
*/

$zeptoCurl = curl_init('https://api.zeptomail.com/v1.1/email');

if ($zeptoCurl === false) {
    error_log('Unable to initialize the ZeptoMail request.');

    stopRequest(
        'There was an error submitting your request. Please call us directly.',
        500
    );
}

curl_setopt_array($zeptoCurl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $encodedPostData,
    CURLOPT_HTTPHEADER     => [
        'Accept: application/json',
        'Content-Type: application/json',
        'Authorization: ' . $zeptoMailToken,
    ],
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT        => 20,
]);

$zeptoResponse  = curl_exec($zeptoCurl);
$zeptoHttpCode  = (int) curl_getinfo(
    $zeptoCurl,
    CURLINFO_HTTP_CODE
);
$zeptoCurlError = curl_error($zeptoCurl);

curl_close($zeptoCurl);

/*
|--------------------------------------------------------------------------
| Handle response
|--------------------------------------------------------------------------
*/

if (
    $zeptoResponse !== false &&
    ($zeptoHttpCode === 200 || $zeptoHttpCode === 201)
) {
    header('Location: /thank-you.php');
    exit;
}

error_log(
    'ZeptoMail submission failed. HTTP status: ' .
    $zeptoHttpCode .
    '; cURL error: ' .
    ($zeptoCurlError !== '' ? $zeptoCurlError : 'none') .
    '; response: ' .
    ($zeptoResponse !== false ? $zeptoResponse : 'no response')
);

stopRequest(
    'There was an error submitting your request. Please try again or call us directly.',
    500
);