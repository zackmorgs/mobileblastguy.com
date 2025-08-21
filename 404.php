<?php get_header(); ?>
<main>
    <header class="hero">
        <div class="hero-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mobile-blast-guy-logo.svg"
                alt="Mobile Blast Guy Logo" id="logo">
            <h3>404 - Page Not Found</h3>
        </div>
    </header>
    <section id="content_about">
        <article class="content">
            <div class="content-text">
                <p>Sorry, the page you are looking for does not exist.</p>
                <p>Please check the URL or return to the <a href="<?php echo home_url(); ?>">homepage</a>.</p>
            </div>
        </article>
    </section>

</main>
<?php get_footer(); ?>