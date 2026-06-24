<footer class="footer curved-top" id="contact">
    <div class="container footer-grid">
        <div class="footer-brand reveal-up">
            <a href="/" class="footer-logo-wrapper">
                <img src="/images/logo.png" alt="Richy Rooter Logo"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="logo-text" style="display: none;">
                    <span class="title" style="color: var(--rr-black);">RICHY</span>
                    <span class="title" style="color: var(--rr-red);">ROOTER</span>
                </div>
            </a>
            <p>Richy Rooter – Quality Plumbing. Honest Service. Reliable Solutions. Proudly serving El Paso for over 20
                years.</p>
            <p style="margin-top: 10px; font-weight: 700; color: var(--rr-red);">Texas License #M-42702</p>

            <div class="footer-social" style="margin-top: 25px; display: flex; gap: 20px;">
                <a href="https://www.instagram.com/richyrooter" target="_blank" aria-label="Follow us on Instagram"
                    style="color: #FFFFFF; font-size: 1.5rem; transition: var(--transition);">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.tiktok.com/@richyrooter" target="_blank" aria-label="Follow us on TikTok"
                    style="color: #FFFFFF; font-size: 1.5rem; transition: var(--transition);">
                    <i class="fab fa-tiktok"></i>
                </a>
            </div>
        </div>

        <div class="footer-col reveal-up" style="transition-delay: 0.1s;">
            <h4>SERVICE AREAS</h4>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i><span>El Paso, Texas</span></li>
                <li><i class="fas fa-map-marker-alt"></i><span>Horizon City & Socorro</span></li>
                <li><i class="fas fa-map-marker-alt"></i><span>Clint, Fabens & Canutillo</span></li>
                <li><i class="fas fa-map-marker-alt"></i><span>San Elizario & Eastlake Area</span></li>
            </ul>
        </div>

        <div class="footer-col reveal-up" style="transition-delay: 0.2s;">
            <h4>BUSINESS HOURS</h4>
            <ul>
                <li><i class="fas fa-clock"></i><span>Mon-Fri: 7:30 AM - 12:00 AM</span></li>
                <li><i class="fas fa-clock"></i><span>Saturday: 7:00 AM - 12:00 AM</span></li>
                <li><i class="fas fa-exclamation-triangle"></i><span
                        style="color: var(--rr-red); font-weight: 700;">Sunday: Closed (Emergency only)</span></li>
            </ul>

            <h4 style="margin-top: 30px;">CONTACT</h4>
            <ul>
                <li><i class="fas fa-phone-alt"></i><span>(915) 873-7000</span></li>
                <!-- <li><i class="fas fa-envelope"></i><span>info@richyrooterllc.com</span></li> -->
            </ul>
        </div>
    </div>

    <div class="footer-bottom container reveal-up"
        style="transition-delay: 0.3s; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 30px;">
        <p style="font-style: italic; color: var(--rr-red); margin-bottom: 10px;">"I can do all things through Christ
            who strengthens me." – Philippians 4:13</p>
        <p>&copy; <?php echo date("Y"); ?> Richy Rooter LLC. All Rights Reserved.</p>
        <p style="margin-top: 10px;">
            Designed & Developed by
            <a href="https://ervotechep.com" target="_blank" rel="noopener"
                style="color: var(--rr-red); text-decoration: none; font-weight: 600;">Ervotech</a>
        </p>
    </div>
</footer>

<div class="floating-widget" id="fabWidget">
    <button class="fab-main" id="fabMain">
        <span class="icon-chat"><i class="fas fa-comment-dots"></i></span>
        <span class="icon-close"><i class="fas fa-times"></i></span>
    </button>
    <div class="fab-actions">
        <a href="tel:9158737000" class="fab-action fab-phone">
            <span class="fab-tooltip">Call Now</span>
            <i class="fas fa-phone"></i>
        </a>
        <a href="mailto:info@richyrooterllc.com" class="fab-action fab-email">
            <span class="fab-tooltip">Email Us</span>
            <i class="fas fa-envelope"></i>
        </a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Theme Toggle Logic
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = themeToggle.querySelector('i');

        themeToggle.addEventListener('click', () => {
            const body = document.body;
            if (body.classList.contains('dark-theme')) {
                body.classList.remove('dark-theme');
                themeIcon.classList.replace('fa-sun', 'fa-moon');
                localStorage.setItem('rr-theme', 'light');
            } else {
                body.classList.add('dark-theme');
                themeIcon.classList.replace('fa-moon', 'fa-sun');
                localStorage.setItem('rr-theme', 'dark');
            }
        });

        const savedTheme = localStorage.getItem('rr-theme');
        if (savedTheme === 'dark') {
            document.body.classList.add('dark-theme');
            themeIcon.classList.replace('fa-moon', 'fa-sun');
        }

        // Smooth Scrolling (Lenis)
        const lenis = new Lenis({
            duration: 0.7, easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            direction: 'vertical', gestureDirection: 'vertical', smooth: true,
        });
        function raf(time) { lenis.raf(time); requestAnimationFrame(raf); }
        requestAnimationFrame(raf);

        // Scroll Parallax
        const seoImg = document.querySelector('.seo-parallax-img');
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            if (seoImg) {
                const imgOffset = seoImg.parentElement.offsetTop;
                if (scrollY > imgOffset - window.innerHeight) {
                    const diff = scrollY - (imgOffset - window.innerHeight);
                    seoImg.style.transform = `scale(1.1) translateY(calc(-5% + ${diff * 0.05}px))`;
                }
            }
        });

        // Magnetic Buttons
        if (window.innerWidth > 1024) {
            const magneticButtons = document.querySelectorAll('.btn-magnetic');
            magneticButtons.forEach((btn) => {
                btn.addEventListener('mousemove', (e) => {
                    const position = btn.getBoundingClientRect();
                    const x = e.clientX - position.left - position.width / 2;
                    const y = e.clientY - position.top - position.height / 2;
                    btn.style.transform = `translate(${x * 0.3}px, ${y * 0.5}px)`;
                });
                btn.addEventListener('mouseleave', () => {
                    btn.style.transition = 'transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
                    btn.style.transform = 'translate(0px, 0px)';
                    setTimeout(() => { btn.style.transition = 'var(--transition-fast)'; }, 500);
                });
            });
        }

        // Sticky Navbar
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) navbar.classList.add('scrolled');
            else navbar.classList.remove('scrolled');
        }, { passive: true });

        // Scroll Reveals
        function checkReveals() {
            const reveals = document.querySelectorAll('.reveal-up');
            const windowHeight = window.innerHeight;
            for (let i = 0; i < reveals.length; i++) {
                if (reveals[i].getBoundingClientRect().top < windowHeight - 80) {
                    reveals[i].classList.add('active-reveal');
                }
            }
        }
        window.addEventListener('scroll', checkReveals);
        checkReveals();
        setTimeout(() => { document.querySelectorAll('.reveal-up').forEach(el => el.classList.add('active-reveal')); }, 1000);

        // Mobile Menu
        const mobileLinks = document.querySelectorAll('.nav-links a');
        const menuCheckbox = document.getElementById('menu-toggle');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 900) menuCheckbox.checked = false;
            });
        });

        // FAB Widget
        const fabWidget = document.getElementById('fabWidget');
        const fabMain = document.getElementById('fabMain');
        fabMain.addEventListener('click', () => { fabWidget.classList.toggle('is-open'); });
    });
</script>
</body>

</html>