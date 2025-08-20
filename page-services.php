<?php get_header(); ?>
<main id="services_page">
    <header class="hero">
        <div class="hero-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mobile-blast-guy-logo.svg"
                alt="Mobile Blast Guy Logo" id="logo">
            <h3>Services</h3>
            <a href="tel:+14199575665" class="btn btn-primary">
                <span>Get a Quote </span>
            </a>


        </div>
    </header>
    <?php get_template_part(slug: 'template-parts/components/services-list'); ?>

</main>
<?php get_footer(); ?>