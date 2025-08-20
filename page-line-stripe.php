<?php get_header(); ?>
<main id="line_stripe">
    <header class="hero">
        <div class="hero-content">
            <h3>Line Stripe Services</h3>
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