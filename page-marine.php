<?php get_header(); ?>
<main id="marine">
    <header class="hero">
        <div class="hero-content">
            <a id="hero_home_link" href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mobile-blast-guy-logo.svg"
                alt="Mobile Blast Guy Logo" id="logo">
            </a>
            <h3>Marine Services</h3>
            <p>Safely remove antifouling paint, rust, and marine growth without damaging fiberglass or metal.</p>
            <a href="tel:+14199575665" class="btn btn-primary">
                <span>Get a Quote </span>
            </a>
        </div>
    </header>
    <section id="content_about">
        <article class="content">
            <div class="content-text">
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                        the_content(); // This is the important line!
                    endwhile;
                endif;
                ?>
            </div>
        </article>
    </section>

</main>
<?php get_footer(); ?>