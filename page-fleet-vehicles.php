<?php get_header(); ?>
<main id="fleet">
    <header class="hero">
        <div class="hero-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mobile-blast-guy-logo.svg"
                alt="Mobile Blast Guy Logo" id="logo">
            <h3>Fleet Vehicle Services</h3>
            <p>Keep Your Fleet Looking Professional</p>
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