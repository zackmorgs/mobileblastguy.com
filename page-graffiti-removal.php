<?php get_header(); ?>
<main id="graffiti">
    <header class="hero">
        <div class="hero-content">
            <h3>Graffiti Removal Services</h3>
            <p>Fast, Effective, and Eco-Friendly Graffiti Removal</p>
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