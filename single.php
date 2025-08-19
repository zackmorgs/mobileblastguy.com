<?php get_header(); ?>

<div class="header">
    <div class="hero-content">
        <h3><?php the_title(); ?></h3>
    </div>
</div>
<section id="content_single">
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

<?php get_footer(); ?>