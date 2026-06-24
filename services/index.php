<?php
// Define SEO variables for the Services page
$pageTitle = "Our Plumbing Services | Richy Rooter El Paso";
$pageDesc = "Comprehensive residential and commercial plumbing services in El Paso, TX. From hydro jetting and slab leaks to water heater repair and fixture installations.";
include('../includes/header.php');
?>

<header class="hero-premium" style="min-height: 50vh; align-items: flex-end; padding-bottom: 50px;">
    <div class="hero-text-content" style="padding: 5% 10%;">
        <span class="hero-label reveal-up">
            <i class="fas fa-tools"></i>
            El Paso's Trusted Plumbers
        </span>
        <h1 class="hero-title reveal-up" style="transition-delay: 0.1s; font-size: clamp(2.8rem, 5vw, 4.5rem);">
            Expert
            <br>
            <span>Plumbing Services</span>
        </h1>
        <p class="hero-desc reveal-up" style="transition-delay: 0.2s;">
            We offer a full range of residential and commercial plumbing services. With over 20 years of experience, our
            licensed and knowledgeable plumbers are equipped to handle any challenge in El Paso and surrounding
            communities.
        </p>
    </div>
    <div class="hero-image-curve" style="box-shadow: none;">
        <img src="https://images.unsplash.com/photo-1505798577917-a65157d3320a?q=80&w=2000&auto=format&fit=crop"
            class="hero-bg" alt="Plumbing tools and blueprints" style="filter: grayscale(40%) brightness(0.8);">
    </div>
</header>

<section class="services-section curved-top" style="margin-top: -40px;">
    <div class="container">
        <div class="section-header reveal-up">
            <span>FULL COVERAGE</span>
            <h2>Everything You Need, Done Right.</h2>
            <p>From a simple leaking faucet to complex commercial sewer inspections, we have the specialized equipment
                and expertise to provide reliable solutions.</p>
        </div>

        <div class="services-grid">
            <div class="service-card reveal-up">
                <div class="service-icon"><i class="fas fa-water"></i></div>
                <h3>Drain & Sewer</h3>
                <ul class="service-list">
                    <li><i class="fas fa-check-circle"></i> Drain Cleaning & Stoppage Removal</li>
                    <li><i class="fas fa-check-circle"></i> Hydro Jetting Services</li>
                    <li><i class="fas fa-check-circle"></i> Sewer Camera Inspections</li>
                    <li><i class="fas fa-check-circle"></i> Sewer & Drain Services</li>
                </ul>
            </div>

            <div class="service-card reveal-up" style="transition-delay: 0.1s;">
                <div class="service-icon"><i class="fas fa-fire"></i></div>
                <h3>Water Heaters & Gas</h3>
                <ul class="service-list">
                    <li><i class="fas fa-check-circle"></i> Water Heater Repair & Replacement</li>
                    <li><i class="fas fa-check-circle"></i> Gas Line Repair & Installation</li>
                    <li><i class="fas fa-check-circle"></i> Pressure Reducing Valve (PRV) Installation & Replacement
                    </li>
                </ul>
            </div>

            <div class="service-card reveal-up" style="transition-delay: 0.2s;">
                <div class="service-icon"><i class="fas fa-search-location"></i></div>
                <h3>Leak Detection & Repair</h3>
                <ul class="service-list">
                    <li><i class="fas fa-check-circle"></i> Slab Leak Repair</li>
                    <li><i class="fas fa-check-circle"></i> Water Leak Repair</li>
                    <li><i class="fas fa-check-circle"></i> Hose Bibb Repair & Replacement</li>
                </ul>
            </div>

            <div class="service-card reveal-up">
                <div class="service-icon"><i class="fas fa-sink"></i></div>
                <h3>Kitchen & Bath Fixtures</h3>
                <ul class="service-list">
                    <li><i class="fas fa-check-circle"></i> Faucet Repair & Replacement</li>
                    <li><i class="fas fa-check-circle"></i> Shower Valve Repair & Replacement</li>
                    <li><i class="fas fa-check-circle"></i> Toilet Installation & Replacement</li>
                    <li><i class="fas fa-check-circle"></i> Garbage Disposal Repair & Replacement</li>
                </ul>
            </div>

            <div class="service-card reveal-up" style="transition-delay: 0.1s; grid-column: span auto;">
                <div class="service-icon"><i class="fas fa-building"></i></div>
                <h3>Property Coverage</h3>
                <ul class="service-list">
                    <li><i class="fas fa-check-circle"></i> Residential Plumbing Services</li>
                    <li><i class="fas fa-check-circle"></i> Commercial Plumbing Services</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="service-areas-section" style="padding: 80px 0; background: var(--bg-main);">
    <div class="container" style="text-align: center;">
        <div class="section-header reveal-up" style="margin-bottom: 40px;">
            <span>COMMUNITIES WE SERVE</span>
            <h2 style="font-size: clamp(2rem, 4vw, 3rem);">Proudly Serving the El Paso Community</h2>
            <p style="max-width: 600px; margin: 0 auto; color: var(--text-muted);">No matter where you are located in
                the region, our fleet is ready to deploy fast, reliable plumbing solutions to your doorstep.</p>
        </div>

        <div class="areas-grid reveal-up"
            style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; max-width: 900px; margin: 0 auto;">
            <span
                style="background: var(--bg-section); padding: 12px 24px; border-radius: 50px; font-weight: 700; color: var(--rr-black); border: 1px solid var(--border-soft);"><i
                    class="fas fa-map-pin" style="color: var(--rr-red); margin-right: 8px;"></i> El Paso, Texas</span>
            <span
                style="background: var(--bg-section); padding: 12px 24px; border-radius: 50px; font-weight: 700; color: var(--rr-black); border: 1px solid var(--border-soft);"><i
                    class="fas fa-map-pin" style="color: var(--rr-red); margin-right: 8px;"></i> Horizon City</span>
            <span
                style="background: var(--bg-section); padding: 12px 24px; border-radius: 50px; font-weight: 700; color: var(--rr-black); border: 1px solid var(--border-soft);"><i
                    class="fas fa-map-pin" style="color: var(--rr-red); margin-right: 8px;"></i> Socorro</span>
            <span
                style="background: var(--bg-section); padding: 12px 24px; border-radius: 50px; font-weight: 700; color: var(--rr-black); border: 1px solid var(--border-soft);"><i
                    class="fas fa-map-pin" style="color: var(--rr-red); margin-right: 8px;"></i> Clint</span>
            <span
                style="background: var(--bg-section); padding: 12px 24px; border-radius: 50px; font-weight: 700; color: var(--rr-black); border: 1px solid var(--border-soft);"><i
                    class="fas fa-map-pin" style="color: var(--rr-red); margin-right: 8px;"></i> Fabens</span>
            <span
                style="background: var(--bg-section); padding: 12px 24px; border-radius: 50px; font-weight: 700; color: var(--rr-black); border: 1px solid var(--border-soft);"><i
                    class="fas fa-map-pin" style="color: var(--rr-red); margin-right: 8px;"></i> Canutillo</span>
            <span
                style="background: var(--bg-section); padding: 12px 24px; border-radius: 50px; font-weight: 700; color: var(--rr-black); border: 1px solid var(--border-soft);"><i
                    class="fas fa-map-pin" style="color: var(--rr-red); margin-right: 8px;"></i> San Elizario</span>
            <span
                style="background: var(--bg-section); padding: 12px 24px; border-radius: 50px; font-weight: 700; color: var(--rr-black); border: 1px solid var(--border-soft);"><i
                    class="fas fa-map-pin" style="color: var(--rr-red); margin-right: 8px;"></i> Eastlake Area</span>
            <span
                style="background: var(--rr-red); padding: 12px 24px; border-radius: 50px; font-weight: 700; color: white; border: 1px solid var(--rr-red);"><i
                    class="fas fa-plus" style="margin-right: 8px;"></i> And Surrounding Communities</span>
        </div>
    </div>
</section>

<section class="cta-section" style="background: var(--bg-main); padding-top: 20px;">
    <div class="container">
        <div
            style="background: var(--rr-black); padding: 80px 40px; border-radius: var(--radius-large); color: white; box-shadow: var(--shadow-card);">
            <h2 class="reveal-up" style="color: white; font-size: clamp(2.5rem, 5vw, 3.5rem);">Don't see your specific
                problem listed?</h2>
            <p class="reveal-up" style="transition-delay: 0.1s; color: #94a3b8; max-width: 600px; margin-inline: auto;">
                Chances are, we can fix it. Reach out to our dispatch team to discuss your exact plumbing needs and get
                an honest, competitive quote.</p>
            <div class="magnetic-wrap reveal-up" style="transition-delay: 0.2s;">
                <a href="tel:9158737000" class="btn-primary btn-magnetic"
                    style="padding: 16px 50px; font-size: 1rem; margin-top: 20px;">
                    <i class="fas fa-phone-alt"></i> Speak to a Plumber
                </a>
            </div>
        </div>
    </div>
</section>

<?php include('../includes/footer.php'); ?>