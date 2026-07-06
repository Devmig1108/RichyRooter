<?php
// Define SEO variables for the About page
$pageTitle = "About Us | Richy Rooter Plumbing El Paso";
$pageDesc = "At Richy Rooter, we proudly provide dependable residential and commercial plumbing services throughout El Paso. 20+ years of experience, licensed, and honest pricing.";
include('../includes/header.php');
?>

<!-- <header class="hero-premium" style="min-height: 50vh; align-items: flex-end; padding-bottom: 50px;">
    <div class="hero-text-content" style="padding: 5% 10%;">
        <span class="hero-label reveal-up">
            <i class="fas fa-info-circle"></i>
            Our Story
        </span>
        <h1 class="hero-title reveal-up" style="transition-delay: 0.1s; font-size: clamp(2.8rem, 5vw, 4.5rem);">
            Trusted Plumbing Services in
            <br>
            <span>El Paso, Texas.</span>
        </h1>
    </div>
    <div class="hero-image-curve" style="box-shadow: none;">
        <img src="../images/richy.png"
            class="hero-bg" alt="Plumbing tools and blueprints" style="filter: grayscale(40%) brightness(0.8);">
    </div>
</header> -->

<section class="about-editorial" style="padding: 100px 0; background: var(--bg-main);">
    <div class="section-header reveal-up" style="text-align: center; margin-bottom: 60px;">
        <span
            style="color: var(--rr-red); text-transform: uppercase; letter-spacing: 2px; font-weight: 800; font-size: 0.8rem; display: block; margin-bottom: 10px;">Project
            Showcase</span>
        <h2 style="font-size: clamp(2.5rem, 5vw, 3rem);">Trusted Plumbing Services in
            El Paso, Texas.</h2>
    </div>
    <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center;">
        <div class="about-image reveal-up">
            <div
                style="position: relative; border-radius: var(--radius-large); overflow: hidden; box-shadow: var(--shadow-card);">
                <img src="/images/van.jpeg" alt="Professional Plumber in El Paso" style="width: 100%; display: block;">
                <div
                    style="position: absolute; bottom: -20px; right: -20px; background: var(--rr-black); color: white; padding: 40px; border-radius: 50%; box-shadow: var(--shadow-accent); text-align: center; border: 6px solid var(--bg-main);">
                    <span
                        style="display: block; font-family: 'Nunito', sans-serif; font-size: 2.5rem; font-weight: 900; line-height: 1; color: var(--rr-red);">20+</span>
                    <span
                        style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 700;">Years</span>
                </div>
            </div>
        </div>

        <div class="about-content reveal-up" style="transition-delay: 0.2s;">
            <h2
                style="font-size: clamp(2.2rem, 4vw, 3rem); margin-bottom: 25px; font-weight: 900; letter-spacing: -1px; line-height: 1.1;">
                Delivering Quality Workmanship & Honest Service.</h2>
            <p style="font-size: 1.15rem; color: var(--text-muted); margin-bottom: 20px; line-height: 1.8;">
                At Richy Rooter, we proudly provide dependable residential and commercial plumbing services throughout
                El Paso and the surrounding areas. With over 20 years of plumbing experience, our licensed and
                knowledgeable plumbers are committed to delivering quality workmanship, honest service, and reliable
                solutions for all your plumbing needs.
            </p>
            <p style="font-size: 1.15rem; color: var(--text-muted); margin-bottom: 30px; line-height: 1.8;">
                Whether you’re dealing with a clogged drain, a leaking water heater, a slab leak, or a plumbing
                emergency, our experienced team has the skills and equipment to get the job done right.
            </p>
            <div class="magnetic-wrap">
                <a href="tel:9158737000" class="btn-primary btn-magnetic">
                    <i class="fas fa-phone-alt"></i> Call Us Today
                </a>
            </div>
        </div>
    </div>
</section>

<section class="why-choose-us"
    style="padding: 120px 0; background: var(--bg-section); border-top-left-radius: var(--radius-large); border-top-right-radius: var(--radius-large);">
    <div class="container">
        <div class="section-header reveal-up" style="text-align: center; margin-bottom: 70px;">
            <span
                style="color: var(--rr-red); font-size: 0.9rem; letter-spacing: 4px; font-weight: 800; display: block; margin-bottom: 15px; text-transform: uppercase;">THE
                RICHY ROOTER DIFFERENCE</span>
            <h2
                style="font-size: clamp(2.8rem, 5vw, 3.5rem); margin-bottom: 20px; font-weight: 900; letter-spacing: -1.5px;">
                Why Choose Richy Rooter?</h2>
            <p style="color: var(--text-muted); max-width: 700px; margin: 0 auto; font-size: 1.2rem;">
                We take pride in providing professional plumbing solutions with integrity, attention to detail, and
                exceptional customer service.
            </p>
        </div>

        <div class="reasons-grid"
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">

            <div class="reason-card reveal-up"
                style="background: var(--bg-card); padding: 40px 30px; border-radius: var(--radius-medium); box-shadow: var(--shadow-card); border: 1px solid var(--border-soft); transition: var(--transition); text-align: center;">
                <i class="fas fa-history" style="font-size: 2.5rem; color: var(--rr-red); margin-bottom: 20px;"></i>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-weight: 800;">Over 20 Years Experience</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;">Decades of hands-on expertise solving complex
                    plumbing issues across El Paso.</p>
            </div>

            <div class="reason-card reveal-up"
                style="transition-delay: 0.1s; background: var(--bg-card); padding: 40px 30px; border-radius: var(--radius-medium); box-shadow: var(--shadow-card); border: 1px solid var(--border-soft); transition: var(--transition); text-align: center;">
                <i class="fas fa-id-card" style="font-size: 2.5rem; color: var(--rr-red); margin-bottom: 20px;"></i>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-weight: 800;">Licensed & Experienced</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;">Our plumbers are fully licensed, highly
                    trained, and rigorously vetted professionals.</p>
            </div>

            <div class="reason-card reveal-up"
                style="transition-delay: 0.2s; background: var(--bg-card); padding: 40px 30px; border-radius: var(--radius-medium); box-shadow: var(--shadow-card); border: 1px solid var(--border-soft); transition: var(--transition); text-align: center;">
                <i class="fas fa-city" style="font-size: 2.5rem; color: var(--rr-red); margin-bottom: 20px;"></i>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-weight: 800;">Residential & Commercial</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;">Equipped to handle everything from cozy family
                    homes to large commercial facilities.</p>
            </div>

            <div class="reason-card reveal-up"
                style="transition-delay: 0.3s; background: var(--bg-card); padding: 40px 30px; border-radius: var(--radius-medium); box-shadow: var(--shadow-card); border: 1px solid var(--border-soft); transition: var(--transition); text-align: center;">
                <i class="fas fa-hand-holding-usd"
                    style="font-size: 2.5rem; color: var(--rr-red); margin-bottom: 20px;"></i>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-weight: 800;">Honest Pricing</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;">Competitive, upfront rates with absolutely no
                    hidden fees or surprise charges.</p>
            </div>

            <div class="reason-card reveal-up"
                style="background: var(--bg-card); padding: 40px 30px; border-radius: var(--radius-medium); box-shadow: var(--shadow-card); border: 1px solid var(--border-soft); transition: var(--transition); text-align: center;">
                <i class="fas fa-truck-fast" style="font-size: 2.5rem; color: var(--rr-red); margin-bottom: 20px;"></i>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-weight: 800;">Fast, Reliable Service</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;">Rapid dispatch protocols ensure we arrive on
                    time and resolve issues quickly.</p>
            </div>

            <div class="reason-card reveal-up"
                style="transition-delay: 0.1s; background: var(--bg-card); padding: 40px 30px; border-radius: var(--radius-medium); box-shadow: var(--shadow-card); border: 1px solid var(--border-soft); transition: var(--transition); text-align: center;">
                <i class="fas fa-hammer" style="font-size: 2.5rem; color: var(--rr-red); margin-bottom: 20px;"></i>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-weight: 800;">Quality Workmanship</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;">We don't cut corners. We use premium materials
                    for durable, lasting repairs.</p>
            </div>

            <div class="reason-card reveal-up"
                style="transition-delay: 0.2s; background: var(--bg-card); padding: 40px 30px; border-radius: var(--radius-medium); box-shadow: var(--shadow-card); border: 1px solid var(--border-soft); transition: var(--transition); text-align: center;">
                <i class="fas fa-smile" style="font-size: 2.5rem; color: var(--rr-red); margin-bottom: 20px;"></i>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-weight: 800;">Customer Focused</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;">Your complete satisfaction is our goal. We
                    treat your property with absolute respect.</p>
            </div>

            <div class="reason-card reveal-up"
                style="transition-delay: 0.3s; background: var(--bg-card); padding: 40px 30px; border-radius: var(--radius-medium); box-shadow: var(--shadow-card); border: 1px solid var(--border-soft); transition: var(--transition); text-align: center;">
                <i class="fas fa-map-marked-alt"
                    style="font-size: 2.5rem; color: var(--rr-red); margin-bottom: 20px;"></i>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-weight: 800;">Serving El Paso</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;">Locally owned and operated, proudly supporting
                    our community for decades.</p>
            </div>

        </div>
    </div>
</section>

<section class="cta-section" style="background: var(--bg-main); padding-top: 50px;">
    <div class="container">
        <div
            style="background: var(--rr-black); padding: 80px 40px; border-radius: var(--radius-large); color: white; text-align: center;">
            <h2 class="reveal-up" style="color: white; font-size: clamp(2.5rem, 5vw, 3.5rem);">Experience the Richy
                Rooter Difference.</h2>
            <p class="reveal-up" style="transition-delay: 0.1s; color: #94a3b8; max-width: 600px; margin-inline: auto;">
                Contact us today to schedule your service. Our experienced team is ready to help keep your plumbing
                system running smoothly.</p>
            <div class="magnetic-wrap reveal-up" style="transition-delay: 0.2s;">
                <a href="/contact/" class="btn-primary btn-magnetic"
                    style="padding: 16px 50px; font-size: 1rem; margin-top: 20px;">
                    <i class="fas fa-envelope"></i> Contact Us Today
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    .reason-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-accent) !important;
        border-color: var(--border-glow) !important;
    }

    @media (max-width: 900px) {
        .about-editorial .container {
            grid-template-columns: 1fr !important;
        }

        .about-image {
            order: -1;
        }
    }
</style>

<?php include('../includes/footer.php'); ?>