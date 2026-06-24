<?php
// Define page variables before calling the header
$pageTitle = "Richy Rooter | Trusted Residential & Commercial Plumbing in El Paso";
$pageDesc = "Dependable residential and commercial plumbing services in El Paso. With over 20 years of experience, our licensed plumbers deliver honest and reliable solutions.";
include('includes/header.php');
?>

<header class="hero-premium">
    <div class="hero-text-content">
        <span class="hero-label reveal-up">
            <i class="fas fa-building"></i>
            Trusted El Paso Plumbers
        </span>
        <h1 class="hero-title reveal-up" style="transition-delay: 0.1s;">
            Residential & Commercial
            <br>
            <span>Plumbing Experts</span>
        </h1>
        <p class="hero-desc reveal-up" style="transition-delay: 0.2s;">
            At Richy Rooter, we proudly provide dependable residential and commercial plumbing services throughout El Paso and the surrounding areas. With over 20 years of experience, we are committed to quality workmanship, honest service, and reliable solutions.
        </p>
        <div class="hero-actions reveal-up" style="transition-delay: 0.3s;">
            <div class="magnetic-wrap">
                <a href="tel:9158737000" class="btn-primary btn-magnetic">
                    <span>Emergency Dispatch</span>
                </a>
            </div>
            <div class="magnetic-wrap">
                <a href="/services/" class="btn-outline btn-magnetic">
                    <span>View Capabilities</span>
                </a>
            </div>
        </div>
    </div>
    <div class="hero-image-curve">
        <img src="https://images.unsplash.com/photo-1585704032915-c3400ca199e7?q=80&w=2000&auto=format&fit=crop" class="hero-bg" alt="Commercial plumbing installation" itemprop="image">
    </div>
</header>

<section id="dispatch" class="featured-offers">
    <div class="container offers-grid">
        <div class="offer-visual-container reveal-up">
            <div class="offer-img-mask">
                <img src="/images/plumber.jpg" class="seo-parallax-img" alt="Plumber inspecting pipes">
            </div>
            <div class="offer-badge">
                <h4>24/7</h4>
                <p>Response</p>
            </div>
        </div>
        <div class="offer-content reveal-up" style="transition-delay: 0.2s;">
            <span class="hero-label" style="color: var(--rr-red);">
                <i class="fas fa-truck-fast"></i>
                EMERGENCY SERVICES
            </span>
            <h2>Ready for Any Plumbing Emergency.</h2>
            <p class="offer-desc-premium">Whether you’re dealing with a clogged drain, a leaking water heater, a slab leak, or a catastrophic plumbing emergency, our experienced team has the skills and equipment to get the job done right.</p>
            <ul class="offer-list">
                <li><i class="fas fa-check-circle"></i> Rapid Dispatch Protocols</li>
                <li><i class="fas fa-check-circle"></i> Slab & Gas Leak Specialists</li>
                <li><i class="fas fa-check-circle"></i> Sewer Camera Inspections</li>
                <li><i class="fas fa-check-circle"></i> <strong>TEXAS LICENSE M-42702</strong></li>
            </ul>
            <div class="magnetic-wrap">
                <a href="tel:9158737000" class="btn-primary btn-magnetic">
                    <span>Call Now: (915) 873-7000</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="trust-banner-section" style="background: var(--bg-main); padding-bottom: 80px;">
    <div class="container">
        <div class="section-header reveal-up" style="margin-bottom: 40px;">
            <h2>Why Choose Richy Rooter?</h2>
            <p>We take pride in providing professional plumbing solutions with integrity, attention to detail, and exceptional customer service.</p>
        </div>
        <div class="trust-banner reveal-up">
            <div class="trust-grid">
                <div class="trust-item">
                    <i class="fas fa-medal"></i>
                    <h4>20+ Years Experience</h4>
                    <p>Decades of proven, high-quality plumbing service.</p>
                </div>
                <div class="trust-item">
                    <i class="fas fa-file-signature"></i>
                    <h4>Licensed & Experienced</h4>
                    <p>Operating securely under Texas License M-42702.</p>
                </div>
                <div class="trust-item">
                    <i class="fas fa-hand-holding-usd"></i>
                    <h4>Honest Pricing</h4>
                    <p>Competitive rates with no hidden fees or surprises.</p>
                </div>
                <div class="trust-item">
                    <i class="fas fa-users"></i>
                    <h4>Customer Focused</h4>
                    <p>Your satisfaction is our ultimate priority.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="services-section curved-top">
    <div class="container">
        <div class="section-header reveal-up">
            <span>OUR EXPERTISE</span>
            <h2>Our Plumbing Services</h2>
            <p>We offer a full range of residential and commercial plumbing solutions tailored to the El Paso community.</p>
        </div>
        <div class="services-grid">
            <div class="service-card reveal-up">
                <div class="service-icon"><i class="fas fa-water"></i></div>
                <h3>Drain & Sewer</h3>
                <ul class="service-list">
                    <li><i class="fas fa-check-circle"></i> Drain Cleaning & Stoppage</li>
                    <li><i class="fas fa-check-circle"></i> Hydro Jetting Services</li>
                    <li><i class="fas fa-check-circle"></i> Sewer Camera Inspections</li>
                </ul>
                <a href="/services/" class="service-link">View All Services <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <div class="service-card reveal-up" style="transition-delay: 0.15s;">
                <div class="service-icon"><i class="fas fa-fire-flame-simple"></i></div>
                <h3>Water Heaters & Leaks</h3>
                <ul class="service-list">
                    <li><i class="fas fa-check-circle"></i> Heater Repair & Replacement</li>
                    <li><i class="fas fa-check-circle"></i> Slab Leak Repairs</li>
                    <li><i class="fas fa-check-circle"></i> Water & Gas Line Repair</li>
                </ul>
                <a href="/services/" class="service-link">View All Services <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <div class="service-card reveal-up" style="transition-delay: 0.3s;">
                <div class="service-icon"><i class="fas fa-hammer"></i></div>
                <h3>Fixtures & Commercial</h3>
                <ul class="service-list">
                    <li><i class="fas fa-check-circle"></i> Faucet, Shower & Toilet Installs</li>
                    <li><i class="fas fa-check-circle"></i> PRV Installation</li>
                    <li><i class="fas fa-check-circle"></i> Commercial Plumbing Services</li>
                </ul>
                <a href="/services/" class="service-link">View All Services <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>