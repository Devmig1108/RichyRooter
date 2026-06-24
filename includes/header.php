<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo isset($pageTitle) ? $pageTitle : 'Richy Rooter | Premium Commercial & Residential Plumbing in El Paso'; ?>
    </title>
    <meta name="description"
        content="<?php echo isset($pageDesc) ? $pageDesc : 'Expert plumbing and repairs in El Paso, TX. Over 20 years of specialized experience in commercial build-outs, hydro jetting, and slab leaks.'; ?>">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Nunito:ital,wght@0,500;0,700;0,800;0,900;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>

    <style>
        /* =========================================
           0. DYNAMIC THEME VARIABLES (LIGHT DEFAULT)
           ========================================= */
        /* =========================================
           0. DYNAMIC THEME VARIABLES (LIGHT DEFAULT)
           ========================================= */
        :root {
            /* Brand Colors: Exact Logo Match */
            --rr-red: #A6192E;
            --rr-red-hover: #801323;
            --rr-black: #0f172a;
            /* Slate Black */
            --rr-slate: #f8fafc;
            /* Crisp Slate secondary background */

            /* LIGHT MODE (Default - Architectural Luxury) */
            --bg-main: #FFFFFF;
            --bg-card: #FFFFFF;
            --bg-section: var(--rr-slate);
            --bg-nav: rgba(255, 255, 255, 0.98);

            --text-main: var(--rr-black);
            --text-muted: #64748b;

            --border-soft: rgba(15, 23, 42, 0.08);
            --border-glow: rgba(166, 25, 46, 0.3);
            --icon-bg: rgba(166, 25, 46, 0.08);

            --logo-bg: transparent;
            --logo-title: var(--rr-black);

            --shadow-accent: 0 10px 30px rgba(166, 25, 46, 0.2);
            --shadow-card: 0 15px 35px rgba(15, 23, 42, 0.06);

            --transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            --transition-fast: all 0.3s ease;

            /* Organic Curvature Variables */
            --radius-large: 60px;
            --radius-medium: 30px;
            --radius-small: 12px;
        }

        /* DARK MODE VARIABLES (Midnight Industrial Luxury) */
        body.dark-theme {
            --bg-main: #09090b;
            --bg-card: #18181b;
            --bg-section: #111113;
            --bg-nav: rgba(9, 9, 11, 0.98);

            --text-main: #f8fafc;
            --text-muted: #a1a1aa;

            --border-soft: rgba(248, 250, 252, 0.08);
            --border-glow: rgba(166, 25, 46, 0.3);
            --icon-bg: rgba(166, 25, 46, 0.15);

            --logo-bg: #FFFFFF;
            --logo-title: var(--rr-black);

            --shadow-accent: 0 10px 30px rgba(166, 25, 46, 0.15);
            --shadow-card: 0 15px 35px rgba(0, 0, 0, 0.4);
        }

        /* =========================================
           1. RESET & BASE
           ========================================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: auto;
            /* Lenis handles scroll */
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-main);
            color: var(--text-main);
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
            transition: background-color 0.4s ease, color 0.4s ease;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Nunito', sans-serif;
            color: var(--text-main);
            transition: color 0.4s ease;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
        }

        /* --- CINEMATIC GRAIN OVERLAY --- */
        .noise-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.04;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }

        [data-theme="dark"] .noise-overlay {
            opacity: 0.06;
        }

        /* --- MAGNETIC WRAPPER --- */
        .magnetic-wrap {
            display: inline-block;
        }

        /* =========================================
           2. UTILITY STRIP & NAVIGATION
           ========================================= */
        .utility-strip {
            background-color: var(--rr-black);
            color: #FFFFFF;
            padding: 10px 0;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .utility-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
        }

        .utility-info span {
            margin-right: 25px;
        }

        .utility-info span i {
            margin-right: 8px;
            color: var(--rr-red);
        }

        .utility-contact span i {
            margin-right: 8px;
            color: var(--rr-red);
        }

        .nav-header {
            background-color: var(--bg-nav);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
            border-bottom: 1px solid transparent;
        }

        .nav-header.scrolled {
            backdrop-filter: blur(15px);
            padding: 10px 0;
            border-bottom: 1px solid var(--border-soft);
            box-shadow: var(--shadow-card);
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand-logo {
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 15px;
            background-color: var(--logo-bg);
            padding: 5px 20px;
            border-radius: 50px;
            transition: var(--transition);
        }

        .brand-logo img {
            height: 50px;
            width: auto;
            object-fit: contain;
        }

        .logo-text {
            display: flex;
            flex-direction: row;
            gap: 6px;
            align-items: center;
        }

        .logo-text .title {
            font-family: 'Nunito', sans-serif;
            font-size: 2rem;
            font-weight: 900;
            color: var(--logo-title);
            line-height: 1;
            letter-spacing: -1px;
        }

        .nav-controls {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-links {
            display: flex;
            gap: 35px;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-main);
            text-decoration: none;
            font-size: 0.9rem;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            letter-spacing: 0.5px;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--rr-red);
        }

        .theme-toggle {
            background: transparent;
            border: none;
            color: var(--text-main);
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--transition);
            diplay: none;
        }

        .theme-toggle:hover {
            color: var(--rr-red);
        }

        .btn-primary {
            background: var(--rr-red);
            color: #FFFFFF !important;
            padding: 14px 40px;
            border-radius: 50px;
            font-family: 'Nunito', sans-serif;
            font-size: 0.9rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: var(--transition-fast);
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .btn-primary:hover {
            background: var(--rr-red-hover);
            box-shadow: var(--shadow-accent);
            transform: translateY(-3px);
        }

        #menu-toggle {
            display: none;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            flex-direction: column;
            gap: 6px;
            z-index: 1001;
        }

        .hamburger span {
            display: block;
            width: 30px;
            height: 3px;
            background-color: var(--text-main);
            transition: var(--transition);
            border-radius: 2px;
        }

        /* =========================================
           3. ASYMMETRICAL SPLIT HERO
           ========================================= */
        .hero-premium {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            min-height: 85vh;
            background-color: var(--bg-main);
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        .hero-premium::before {
            content: '';
            position: absolute;
            top: 10%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: var(--rr-slate);
            border-radius: 50%;
            opacity: 0.6;
            z-index: 0;
            transition: background 0.4s ease;
        }

        .hero-text-content {
            padding: 10%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            z-index: 1;
        }

        .hero-image-curve {
            height: 100%;
            width: 100%;
            position: relative;
            overflow: hidden;
            border-top-left-radius: 120px;
            border-bottom-left-radius: 120px;
            box-shadow: -15px 0 45px rgba(0, 0, 0, 0.08);
        }

        .hero-bg {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(20%);
        }

        .hero-label {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--rr-red);
            font-size: 0.9rem;
            font-family: 'Inter', sans-serif;
            font-weight: 800;
            letter-spacing: 3px;
            margin-bottom: 25px;
            text-transform: uppercase;
        }

        .hero-title {
            font-size: clamp(3.2rem, 6vw, 6rem);
            line-height: 1.05;
            margin-bottom: 30px;
            font-weight: 900;
            letter-spacing: -2px;
        }

        .hero-title span {
            color: var(--rr-red);
        }

        .hero-desc {
            font-size: 1.25rem;
            color: var(--text-muted);
            margin-bottom: 50px;
            max-width: 650px;
            font-weight: 500;
            line-height: 1.8;
        }

        .hero-actions {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .btn-outline {
            background: transparent;
            color: var(--text-main);
            padding: 13px 40px;
            border: 2px solid var(--text-main);
            border-radius: 50px;
            font-size: 0.95rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            text-decoration: none;
            transition: var(--transition-fast);
            font-weight: 800;
            font-family: 'Nunito', sans-serif;
        }

        .btn-outline:hover {
            background: var(--text-main);
            color: var(--bg-main);
        }

        /* =========================================
           4. VISUAL PROMO SHOWCASE (Emergency)
           ========================================= */
        .featured-offers {
            padding: 100px 0 80px;
            background: var(--bg-main);
            transition: background-color 0.4s ease;
            position: relative;
            z-index: 6;
        }

        .offers-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .offer-visual-container {
            position: relative;
        }

        .offer-img-mask {
            border-radius: var(--radius-large);
            overflow: hidden;
            box-shadow: var(--shadow-card);
            position: relative;
            z-index: 1;
        }

        .offer-img-mask img {
            width: 100%;
            display: block;
            transform: scale(1.1);
        }

        .offer-badge {
            position: absolute;
            top: -30px;
            right: -30px;
            z-index: 2;
            background: var(--rr-black);
            color: #FFFFFF;
            padding: 40px 30px;
            border-radius: 50%;
            text-align: center;
            box-shadow: var(--shadow-accent);
            transform: rotate(10deg);
            transition: transform 0.4s ease;
            border: 4px solid var(--bg-main);
        }

        .offer-badge h4 {
            font-family: 'Nunito', sans-serif;
            font-size: 2.2rem;
            font-weight: 900;
            color: #FFFFFF;
            line-height: 1;
            margin: 0 0 5px 0;
        }

        .offer-badge p {
            font-size: 1rem;
            color: var(--rr-red);
            margin: 0;
            text-transform: uppercase;
            font-weight: 800;
        }

        .offer-content h2 {
            font-size: clamp(2.8rem, 5vw, 3.5rem);
            margin-bottom: 25px;
            font-weight: 900;
            letter-spacing: -1px;
            line-height: 1.1;
        }

        .offer-desc-premium {
            font-size: 1.25rem;
            color: var(--text-main);
            margin-bottom: 30px;
            font-weight: 600;
            line-height: 1.8;
        }

        .offer-list {
            list-style: none;
            margin-bottom: 40px;
        }

        .offer-list li {
            margin-bottom: 15px;
            font-size: 1.1rem;
            color: var(--text-muted);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .offer-list li i {
            color: var(--rr-red);
            font-size: 1.2rem;
        }

        .offer-list li strong {
            color: var(--text-main);
            font-weight: 800;
            background: var(--rr-slate);
            padding: 4px 10px;
            border-radius: 10px;
        }

        /* =========================================
           5. WHY CHOOSE US (4 Pillars)
           ========================================= */
        .trust-banner {
            background: var(--rr-black);
            padding: 60px 0;
            color: #FFFFFF;
            margin-top: 40px;
            border-radius: var(--radius-large);
            box-shadow: var(--shadow-card);
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .trust-item {
            padding: 20px;
        }

        .trust-item i {
            font-size: 2.5rem;
            color: var(--rr-red);
            margin-bottom: 20px;
        }

        .trust-item h4 {
            font-size: 1.2rem;
            color: #FFFFFF;
            font-weight: 800;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
        }

        .trust-item p {
            font-size: 0.95rem;
            color: #94a3b8;
            line-height: 1.6;
        }

        /* =========================================
           6. ORGANIC SERVICES GRID 
           ========================================= */
        .curved-top {
            border-top-left-radius: var(--radius-large);
            border-top-right-radius: var(--radius-large);
            margin-top: -60px;
            position: relative;
            z-index: 5;
        }

        .services-section {
            padding: 150px 0 100px;
            background: var(--bg-section);
            transition: background-color 0.4s ease;
        }

        .section-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .section-header span {
            color: var(--rr-red);
            font-size: 0.9rem;
            letter-spacing: 4px;
            font-weight: 800;
            display: block;
            margin-bottom: 15px;
            text-transform: uppercase;
            font-family: 'Inter', sans-serif;
        }

        .section-header h2 {
            font-size: clamp(2.8rem, 5vw, 4rem);
            margin-bottom: 20px;
            font-weight: 900;
            letter-spacing: -1.5px;
            text-transform: none;
        }

        .section-header p {
            color: var(--text-muted);
            max-width: 650px;
            margin: 0 auto;
            font-size: 1.2rem;
        }

        /* FIX: Adjusted minmax from 360px to min(100%, 320px) to prevent mobile overflow */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(100%, 320px), 1fr));
            gap: 50px;
        }

        .service-card {
            background: var(--bg-card);
            border: 1px solid var(--border-soft);
            padding: 60px 50px;
            border-radius: var(--radius-large);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            box-shadow: var(--shadow-card);
            position: relative;
        }

        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-accent);
            border-color: var(--border-glow);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: var(--icon-bg);
            border-radius: var(--radius-medium);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 40px;
            transition: background 0.4s ease;
        }

        .service-icon i {
            font-size: 2.2rem;
            color: var(--rr-red);
            transition: color 0.4s ease;
        }

        .service-card h3 {
            font-size: 1.8rem;
            margin-bottom: 25px;
            font-weight: 900;
            letter-spacing: -0.5px;
        }

        .service-list {
            list-style: none;
            margin-bottom: 40px;
            flex-grow: 1;
        }

        .service-list li {
            color: var(--text-muted);
            margin-bottom: 18px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .service-list li i {
            color: var(--rr-red);
            font-size: 1rem;
            margin-top: 5px;
        }

        .service-link {
            color: var(--text-main);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-decoration: none;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            transition: var(--transition);
            border-bottom: 3px solid var(--rr-red);
            padding-bottom: 7px;
            align-self: flex-start;
        }

        .service-link:hover {
            gap: 18px;
            color: var(--rr-red);
        }

        /* =========================================
           7. MOSAIC PROJECT GALLERY
           ========================================= */
        .portfolio-section {
            padding: 120px 0;
            background: var(--bg-main);
            transition: background-color 0.4s ease;
        }

        .mosaic-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-auto-rows: 300px;
            gap: 20px;
            padding: 0 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .mosaic-item {
            position: relative;
            border-radius: var(--radius-large);
            overflow: hidden;
            box-shadow: var(--shadow-card);
            cursor: pointer;
        }

        .span-2-row {
            grid-row: span 2;
        }

        .mosaic-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
            filter: grayscale(10%);
        }

        .mosaic-item:hover img {
            transform: scale(1.05);
            filter: grayscale(0%);
        }

        .mosaic-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, transparent 60%);
            display: flex;
            align-items: flex-end;
            justify-content: flex-start;
            padding: 30px 40px;
            pointer-events: none;
        }

        .mosaic-overlay h4 {
            color: rgba(255, 255, 255, 0.95);
            font-family: 'Inter', sans-serif;
            font-size: 2.5rem;
            font-weight: 800;
            margin: 0;
            letter-spacing: -1px;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        /* =========================================
           8. CTA SECTION
           ========================================= */
        .cta-section {
            padding: 150px 0;
            background: var(--bg-section);
            text-align: center;
            transition: background-color 0.4s ease;
        }

        .cta-section h2 {
            font-size: clamp(3rem, 6vw, 4.5rem);
            margin-bottom: 25px;
            font-weight: 900;
            letter-spacing: -2px;
        }

        .cta-section p {
            color: var(--text-muted);
            font-size: 1.3rem;
            margin-bottom: 60px;
            max-width: 750px;
            margin-inline: auto;
        }

        /* =========================================
           9. FOOTER
           ========================================= */
        .footer {
            background: var(--rr-black);
            padding: 100px 0 50px;
            color: #FFFFFF;
            border-top-left-radius: 60px;
            border-top-right-radius: 60px;
            margin-top: -60px;
            position: relative;
            z-index: 10;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 60px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 60px;
            margin-bottom: 40px;
        }

        .footer-logo-wrapper {
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 15px;
            background-color: #FFFFFF;
            padding: 5px 20px;
            border-radius: 50px;
            margin-bottom: 20px;
            transition: var(--transition);
        }

        .footer-logo-wrapper img {
            height: 50px;
            width: auto;
            object-fit: contain;
        }

        .footer-logo-text {
            display: flex;
            flex-direction: row;
            gap: 8px;
            align-items: center;
        }

        .footer-brand p {
            color: #94a3b8;
            max-width: 450px;
            margin-top: 15px;
            line-height: 1.8;
            font-weight: 400;
        }

        .footer-col h4 {
            color: #FFFFFF;
            font-size: 1.1rem;
            margin-bottom: 30px;
            letter-spacing: 1.5px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 20px;
            color: #94a3b8;
            display: flex;
            gap: 15px;
            align-items: flex-start;
            font-weight: 500;
        }

        .footer-col ul li i {
            color: var(--rr-red);
            margin-top: 5px;
        }

        .footer-col a {
            color: #94a3b8;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-col a:hover {
            color: var(--rr-red);
        }

        .footer-bottom {
            text-align: center;
            color: #64748b;
            font-size: 0.95rem;
            font-weight: 500;
        }

        /* =========================================
           10. FAB WIDGET (Multi-channel Contact)
           ========================================= */
        .floating-widget {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 9999;
            display: flex;
            flex-direction: column-reverse;
            align-items: flex-end;
            gap: 15px;
        }

        .fab-main {
            width: 65px;
            height: 65px;
            background: var(--rr-red);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            box-shadow: var(--shadow-glow);
            transition: var(--transition-fast);
            color: white;
            font-size: 1.8rem;
        }

        .fab-main:hover {
            transform: scale(1.05);
            background: var(--rr-red-hover);
        }

        .fab-main .icon-close {
            display: none;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .floating-widget.is-open .fab-main .icon-chat {
            display: none;
        }

        .floating-widget.is-open .fab-main .icon-close {
            display: block;
        }

        .fab-actions {
            display: flex;
            flex-direction: column-reverse;
            gap: 15px;
            align-items: center;
            pointer-events: none;
        }

        .fab-action {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            text-decoration: none;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transform: translateY(20px) scale(0.8);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            font-size: 1.5rem;
        }

        .fab-phone {
            background: #10b981;
        }

        .fab-email {
            background: #3b82f6;
        }

        .fab-action:hover {
            transform: scale(1.1) !important;
            color: white;
        }

        .floating-widget.is-open .fab-actions {
            pointer-events: auto;
        }

        .floating-widget.is-open .fab-action {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .floating-widget.is-open .fab-phone {
            transition-delay: 0.05s;
        }

        .floating-widget.is-open .fab-email {
            transition-delay: 0.1s;
        }

        .fab-tooltip {
            position: absolute;
            right: 70px;
            background: var(--rr-black);
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 6px;
            font-family: var(--font-body);
            font-size: 0.9rem;
            font-weight: 600;
            white-space: nowrap;
            pointer-events: none;
            opacity: 0;
            transform: translateX(10px);
            transition: all 0.2s ease;
            box-shadow: var(--shadow-card);
        }

        .fab-tooltip::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -6px;
            transform: translateY(-50%);
            border-width: 6px 0 6px 6px;
            border-style: solid;
            border-color: transparent transparent transparent var(--rr-black);
        }

        .floating-widget.is-open .fab-action:hover .fab-tooltip {
            opacity: 1;
            transform: translateX(0);
        }

        /* =========================================
           11. ANIMATIONS & RESPONSIVE
           ========================================= */
        .reveal-up {
            opacity: 0;
            transform: translateY(40px);
            transition: all 1s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .active-reveal {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        @media (max-width: 1200px) {
            .hero-premium {
                grid-template-columns: 1fr;
                grid-template-rows: auto auto;
            }

            .hero-text-content {
                padding: 10% 5%;
                text-align: center;
                align-items: center;
            }

            .hero-label {
                margin-inline: auto;
            }

            .hero-actions {
                flex-direction: column;
                width: 100%;
                gap: 15px;
            }

            .btn-primary,
            .btn-outline {
                width: 100%;
                justify-content: center;
            }

            .hero-image-curve {
                min-height: 450px;
                border-radius: 0;
            }

            .offers-grid {
                grid-template-columns: 1fr;
                gap: 80px;
            }

            .offer-badge {
                position: relative;
                top: 0;
                right: 0;
                display: inline-block;
                margin-top: -40px;
                margin-left: 10%;
            }
        }

        /* FIX: Explicit Mobile Adjustments to fix grid overflow */
        @media (max-width: 900px) {
            .utility-strip {
                display: none;
            }

            .hamburger {
                display: flex;
            }

            .nav-links {
                position: fixed;
                top: 80px;
                right: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background: var(--bg-nav);
                backdrop-filter: blur(15px);
                flex-direction: column;
                justify-content: center;
                gap: 40px;
                transition: var(--transition);
                border-top: 1px solid var(--border-soft);
                padding: 10% 5%;
            }

            .nav-links a {
                font-size: 1.4rem;
                font-weight: 800;
            }

            #menu-toggle:checked~.nav-links {
                right: 0;
            }

            #menu-toggle:checked~.hamburger span:nth-child(1) {
                transform: translateY(9px) rotate(45deg);
            }

            #menu-toggle:checked~.hamburger span:nth-child(2) {
                opacity: 0;
            }

            #menu-toggle:checked~.hamburger span:nth-child(3) {
                transform: translateY(-9px) rotate(-45deg);
            }

            /* Forces cards to stack directly, fixing overflow */
            .services-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            /* Thinner padding on mobile to let content breathe */
            .service-card {
                padding: 40px 25px;
            }

            .mosaic-gallery {
                grid-template-columns: 1fr;
                grid-auto-rows: 250px;
            }

            .span-2-row {
                grid-row: span 1;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 50px;
            }

            .theme-toggle {
                display: none;
            }
        }

        @import url('/css/style.css');
    </style>
</head>

<body itemscope itemtype="https://schema.org/PlumbingService">
    <div class="noise-overlay"></div>

    <div class="utility-strip">
        <div class="utility-container">
            <div class="utility-info">
                <span><i class="fas fa-map-marker-alt"></i> El Paso, TX</span>
                <span><i class="fas fa-shield-alt"></i> License #M-42702</span>
                <span><i class="fas fa-wrench"></i> 20+ Years of Excellence</span>
            </div>
            <div class="utility-contact">
                <span><i class="fas fa-phone-alt"></i> (915) 873-7000</span>
            </div>
        </div>
    </div>

    <nav class="nav-header" id="navbar">
        <div class="container nav-wrapper">
            <a href="/" class="brand-logo">
                <img src="/images/logo.png" alt="Richy Rooter Plumbing" itemprop="logo"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="logo-text" style="display: none;">
                    <span class="title">RICHY</span>
                    <span class="title" style="color: var(--rr-red);">ROOTER</span>
                </div>
            </a>

            <div class="nav-controls">
                <button id="theme-toggle" class="theme-toggle" aria-label="Toggle Light/Dark Mode">
                    <i class="fas fa-moon"></i>
                </button>
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="hamburger">
                    <span></span><span></span><span></span>
                </label>
                <div class="nav-links">
                    <a href="/">Home</a>
                    <a href="/about/">About Us</a>
                    <a href="/services/">Services</a>
                    <a href="/gallery/">Gallery</a>
                    <a href="/contact/">Contact</a>
                    <div class="magnetic-wrap">
                        <a href="tel:9158737000" class="btn-primary btn-magnetic" itemprop="telephone">
                            <i class="fas fa-phone-alt" style="font-size: 0.8rem; margin-top: -2px;"></i> Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>