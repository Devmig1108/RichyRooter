<?php
// process-quote.php

// 1. HONEYPOT CHECK (Anti-spam)
// Requires a hidden field in the HTML: <input type="text" name="company_website" style="display:none;">
if (!empty($_POST['company_website'])) {
    // Bot detected. Silently terminate and redirect to trick the bot.
    header("Location: /thank-you.php");
    exit;
}

// 2. Set ZeptoMail Credentials
$zeptoMailToken = "Zoho-enczapikey wSsVR60g/EakBqwpz2f7du87kQgEBgz1FU1/3Vrz7CL4SPnLpcdqxEKYDASuTfhNEGVsQWBEo+ggyUhS0TRdiN8vyF1SDSiF9mqRe1U4J3x17qnvhDzOXG1ckhWMKIkJwgxvmmJmEsEi+g==";
$verifiedSenderEmail = "info@richyrooterllc.com"; // UPDATE THIS to your verified sending domain
$clientRecipientEmail = "granadosr90@yahoo.com"; // UPDATE THIS to the client's inbox

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 3. Sanitize inputs (Mapped to Richy Rooter's HTML form 'name' attributes)
    $name = htmlspecialchars(strip_tags(trim($_POST["fullName"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(strip_tags(trim($_POST["phone"])));

    $service = htmlspecialchars(strip_tags(trim($_POST["serviceNeeded"])));
    $message = isset($_POST["message"]) && !empty(trim($_POST["message"]))
        ? htmlspecialchars(strip_tags(trim($_POST["message"])))
        : "No additional details provided.";

    // Basic validation
    if (empty($name) || empty($email) || empty($phone) || empty($service)) {
        die("Please fill out all required fields.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // 4. Construct the HTML Email Body tailored for Richy Rooter
    // 4. Construct the HTML Email Body tailored for Richy Rooter
    $htmlBody = "
    <div style='font-family: Arial, sans-serif; background-color: #f4f7f6; padding: 40px 20px; color: #333;'>
        <div style='max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1); border: 1px solid #e2e8f0;'>
            
            <div style='background-color: #121a2c; padding: 25px; text-align: center;'>
                <h2 style='margin: 0; font-size: 24px; font-weight: 900; color: #ffffff; text-transform: uppercase; letter-spacing: 1px;'>New Dispatch Request</h2>
            </div>
            
            <div style='padding: 30px;'>
                <p style='font-size: 16px; line-height: 1.6; color: #555; margin-top: 0; margin-bottom: 25px;'>
                    A new lead has requested service from the Richy Rooter website. Here are the details of the plumbing issue:
                </p>
                
                <table style='width: 100%; border-collapse: collapse; font-size: 15px;'>
                    <tr>
                        <td style='padding: 14px 0; border-bottom: 1px solid #eeeeee; width: 35%; font-weight: bold; color: #0f172a;'>Full Name:</td>
                        <td style='padding: 14px 0; border-bottom: 1px solid #eeeeee; color: #333;'>{$name}</td>
                    </tr>
                    <tr>
                        <td style='padding: 14px 0; border-bottom: 1px solid #eeeeee; font-weight: bold; color: #0f172a;'>Email Address:</td>
                        <td style='padding: 14px 0; border-bottom: 1px solid #eeeeee;'>
                            <a href='mailto:{$email}' style='color: #121a2c; text-decoration: none; font-weight: bold;'>{$email}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 14px 0; border-bottom: 1px solid #eeeeee; font-weight: bold; color: #0f172a;'>Phone Number:</td>
                        <td style='padding: 14px 0; border-bottom: 1px solid #eeeeee; color: #333;'>{$phone}</td>
                    </tr>
                    <tr>
                        <td style='padding: 14px 0; border-bottom: 1px solid #eeeeee; font-weight: bold; color: #0f172a;'>Service Needed:</td>
                        <td style='padding: 14px 0; border-bottom: 1px solid #eeeeee; color: #333;'>
                            <span style='background-color: #f8fafc; padding: 4px 8px; border-radius: 4px; border: 1px solid #e2e8f0;'>{$service}</span>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 14px 0; font-weight: bold; color: #0f172a; vertical-align: top;'>Message Details:</td>
                        <td style='padding: 14px 0; color: #333; line-height: 1.6;'>{$message}</td>
                    </tr>
                </table>
            </div>
            
            <div style='background-color: #f8fafc; padding: 20px; text-align: center; border-top: 1px solid #e2e8f0;'>
                <p style='margin: 0; font-size: 13px; color: #94a3b8; line-height: 1.5;'>
                    <em>To reply to this lead, click the red email address above or copy and paste it into a new message.</em><br><br>
                    <strong>Richy Rooter Automated Dispatch</strong>
                </p>
            </div>
            
        </div>
    </div>
    ";

    // 5. Prepare ZeptoMail JSON Payload
    $postData = [
        "from" => [
            "address" => $verifiedSenderEmail,
            "name" => "Richy Rooter Website"
        ],
        "to" => [
            [
                "email_address" => [
                    "address" => $clientRecipientEmail,
                    "name" => "Richy Rooter Dispatch"
                ]
            ]
        ],
        "subject" => "New Lead: " . $name . " - " . $service,
        "htmlbody" => $htmlBody,
        "textbody" => "New Website Inquiry from {$name}. Phone: {$phone}. Email: {$email}. Service: {$service}. Message: {$message}"
    ];

    // 6. Execute cURL Request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.zeptomail.com/v1.1/email");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

    $headers = [
        "Accept: application/json",
        "Content-Type: application/json",
        "Authorization: " . $zeptoMailToken
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // 7. Handle Response (Production)
    if ($httpCode == 200 || $httpCode == 201) {
        header("Location: /thank-you.php");
        exit;
    } else {
        error_log("ZeptoMail Error: " . $response);
        echo "There was an error submitting your request. Please try calling us directly.";
    }

} else {
    header("Location: /");
    exit;
}
?>