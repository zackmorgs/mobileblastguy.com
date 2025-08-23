<?php get_header(); ?>
<main id="blog_list">
    <header class="hero">
        <div class="hero-content">
            <a id="hero_home_link" href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mobile-blast-guy-logo.svg"
                alt="Mobile Blast Guy Logo" id="logo">
            </a>
            <h3>Blog</h3>
        </div>
    </header>
    <section id="excerpts" class="content">
        <div class="content-float">
            <h2 id="heading_latest_posts">Latest Posts</h2>
            <div class="blog-posts">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>
                        <a class="excerpt-permalink" href="<?php the_permalink(); ?>">
                            <article class="blog-post-excerpt">
                                <h2><?php the_title(); ?></h2>
                                <hr />
                                <span class="excerpt">
                                    <?php the_excerpt(); ?>
                                </span>
                            </article>
                        </a>
                    <?php endwhile; else: ?>
                    <p>No posts found.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
</main>
<?php get_footer(); ?>