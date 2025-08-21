<?php get_header(); ?>
<main>
    <header class="hero">
        <div class="hero-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mobile-blast-guy-logo.svg"
                alt="Mobile Blast Guy Logo" id="logo">
            <h3>Blog</h3>
        </div>
    </header>
    <section id="content_home">
        <article class="content">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    the_content(); // This is the important line!
                endwhile;
            endif;
            ?>
        </article>
    </section>
</main>
<?php get_footer(); ?>