<?php
$pageTitle = "Plumbing Projects Gallery | Richy Rooter El Paso";
$pageDesc = "See the quality of our work. Browse our before-and-after gallery featuring slab leak repairs, hydro jetting, fixture installations, and commercial build-outs in El Paso.";
include('../includes/header.php');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/beerslider/dist/BeerSlider.css">

<style>
    .gallery-container { padding: 80px 5%; max-width: 1400px; margin: 0 auto; }
    
    .project-card { 
        background: var(--bg-card); 
        padding: 20px; 
        border-radius: var(--radius-medium); 
        box-shadow: var(--shadow-card);
        border: 1px solid var(--border-soft);
        transition: var(--transition);
    }

    .project-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-accent); }
    .project-card h3 { margin-top: 20px; font-size: 1.25rem; font-weight: 800; color: var(--text-main); text-align: center; }

    /* The Cinematic Full-Width Anchor */
    .full-width {
        grid-column: 1 / -1; 
        padding: 30px; 
    }
    
    /* Strict Height & Object Fit for Sliders and Full Width */
    .beer-slider { 
        height: 400px; 
        width: 100%; 
        border-radius: var(--radius-small); 
        overflow: hidden; 
        position: relative;
    }
    
    /* THE FIX: Strict vertical and horizontal centering for all images */
    .full-width img,
    .beer-slider img, 
    .beer-reveal img { 
        width: 100% !important; 
        height: 100% !important; 
        object-fit: cover !important; 
        object-position: center center !important; /* Forces exact middle X and Y alignment */
    }

    .full-width img {
        height: 650px !important;
        border-radius: var(--radius-small);
    }
    
    /* Responsive Refinements */
    @media (max-width: 768px) {
        .projects-grid { grid-template-columns: 1fr !important; gap: 30px !important; }
        
        /* Keep cinematic proportions on mobile */
        .full-width img { height: 350px !important; } 
        .beer-slider { height: 280px !important; } 
    }
</style>

<section class="gallery-page">
    <div class="gallery-container">
        <div class="section-header reveal-up" style="text-align: center; margin-bottom: 60px;">
            <span style="color: var(--rr-red); text-transform: uppercase; letter-spacing: 2px; font-weight: 800; font-size: 0.8rem; display: block; margin-bottom: 10px;">Project Showcase</span>
            <h2 style="font-size: clamp(2.5rem, 5vw, 3rem);">Before & After Transformations</h2>
        </div>

        <div class="projects-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 40px;">
            
            <div class="project-card full-width reveal-up">
                <img src="/images/van.jpeg" alt="Richy Rooter Plumbing Fleet Van" loading="lazy">
                <h3>Our Mobile Dispatch Fleet</h3>
            </div>
            
            <?php 
            $projects = [
                ['before' => 'before_1.jpeg', 'after' => 'after_1.jpeg', 'title' => 'Structural Pipe Restoration'],
                ['before' => 'before_2.jpeg', 'after' => 'after_2.jpeg', 'title' => 'Sewer Line Repair'],
                ['before' => 'before_3.jpeg', 'after' => 'after_3.jpeg', 'title' => 'Water Heater Upgrade'],
                ['before' => 'imagrr04_b.jpeg', 'after' => 'imagrr04_a.jpeg', 'title' => 'Hydro Jetting'],
                ['before' => 'imagrr05_b.jpeg', 'after' => 'imagrr05_a.jpeg', 'title' => 'Fixture Install'],
                ['before' => 'imagrr06_b.jpeg', 'after' => 'imagrr06_a.jpeg', 'title' => 'System Overhaul'],
                ['before' => 'imagrr07_b.jpeg', 'after' => 'imagrr07_a.jpeg', 'title' => 'Slab Leak Diagnostics']
            ];

            foreach ($projects as $project) { ?>
                <div class="project-card reveal-up">
                    <div class="beer-slider" data-beer-label="After">
                        <img src="/images/<?php echo $project['before']; ?>" alt="Before plumbing repair" loading="lazy">
                        <div class="beer-reveal" data-beer-label="Before">
                            <img src="/images/<?php echo $project['after']; ?>" alt="After plumbing repair" loading="lazy">
                        </div>
                    </div>
                    <h3><?php echo $project['title']; ?></h3>
                </div>
            <?php } ?>
            
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/beerslider/dist/BeerSlider.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize all sliders
        document.querySelectorAll('.beer-slider').forEach(function(el) {
            new BeerSlider(el);
        });
    });
</script>

<?php include('../includes/footer.php'); ?>