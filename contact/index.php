<?php
// Define SEO variables for the Contact page
$pageTitle = "Contact Us | Richy Rooter El Paso";
$pageDesc = "When you need a trusted plumber, count on Richy Rooter for fast, dependable service in El Paso, TX. Contact us today for emergencies or estimates.";
include('../includes/header.php');
?>

<header class="hero-premium" style="min-height: 40vh; align-items: flex-end; padding-bottom: 50px; grid-template-columns: 1fr;">
    <div class="hero-text-content" style="padding: 5% 10%; max-width: 1000px; text-align: center; margin: 0 auto;">
        <span class="hero-label reveal-up" style="margin: 0 auto 20px;">
            <i class="fas fa-headset"></i>
            We're Here to Help
        </span>
        <h1 class="hero-title reveal-up" style="transition-delay: 0.1s; font-size: clamp(2.8rem, 5vw, 4.5rem);">
            Get In Touch With
            <br>
            <span>Richy Rooter</span>
        </h1>
    </div>
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
        <img src="https://images.unsplash.com/photo-1585704032915-c3400ca199e7?q=80&w=2000&auto=format&fit=crop" style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(80%) brightness(0.9); opacity: 0.15;" alt="Contact Background">
    </div>
</header>

<section class="contact-page-section" style="padding: 100px 0; background: var(--bg-section); border-top-left-radius: var(--radius-large); border-top-right-radius: var(--radius-large); margin-top: -40px; position: relative; z-index: 5;">
    <div class="container" style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 80px;">
        
        <div class="contact-info-column reveal-up">
            <h2 style="font-size: 2.5rem; margin-bottom: 20px; font-weight: 900; letter-spacing: -1px;">Contact Richy Rooter Today.</h2>
            <p style="color: var(--text-muted); font-size: 1.1rem; margin-bottom: 40px;">
                When you need a trusted plumber, count on Richy Rooter for fast, dependable service. From water heaters and clogged drains to slab leaks and commercial plumbing repairs, our experienced team is ready to help keep your plumbing system running smoothly.
            </p>

            <div class="info-block" style="background: var(--bg-card); padding: 30px; border-radius: var(--radius-medium); box-shadow: var(--shadow-card); margin-bottom: 30px; border-left: 4px solid var(--rr-red);">
                <h4 style="font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-phone-alt" style="color: var(--rr-red); margin-right: 10px;"></i> Dispatch & Support</h4>
                <a href="tel:9158737000" style="font-size: 1.5rem; font-weight: 800; color: var(--text-main); display: block; margin-bottom: 10px; transition: var(--transition);">
                    (915) 873-7000
                </a>
                <!-- <a href="mailto:info@richyrooterllc.com" style="color: var(--text-muted); font-weight: 500; transition: var(--transition);">
                    info@richyrooterllc.com
                </a> -->
            </div>

            <div class="info-block" style="background: var(--bg-card); padding: 30px; border-radius: var(--radius-medium); box-shadow: var(--shadow-card); border-left: 4px solid var(--rr-red);">
                <h4 style="font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-clock" style="color: var(--rr-red); margin-right: 10px;"></i> Business Hours</h4>
                <ul style="list-style: none; color: var(--text-muted); font-weight: 500;">
                    <li style="margin-bottom: 10px; display: flex; justify-content: space-between;"><span>Monday – Friday:</span> <span>7:30 AM – 12:00 AM</span></li>
                    <li style="margin-bottom: 10px; display: flex; justify-content: space-between;"><span>Saturday:</span> <span>7:00 AM – 12:00 AM</span></li>
                    <li style="display: flex; justify-content: space-between;"><span style="color: var(--rr-red); font-weight: 700;">Sunday:</span> <span style="color: var(--rr-red); font-weight: 700;">Closed (Emergency Only)</span></li>
                </ul>
            </div>
        </div>

        <div class="contact-form-column reveal-up" style="transition-delay: 0.2s;">
            <?php include('../includes/contact-form.php'); ?>
        </div>

    </div>
</section>

<style>
    @media (max-width: 992px) {
        .contact-page-section .container {
            grid-template-columns: 1fr !important;
            gap: 50px;
        }
    }
</style>

<?php include('../includes/footer.php'); ?>