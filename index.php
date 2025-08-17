<?php get_header(); ?>
<main>
    <header id="hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mobile-blast-guy-logo.svg"
            alt="Mobile Blast Guy Logo" id="logo">
        <h3>Dustless Blasting in Ohio</h3>
        <a href="/quote" class="btn btn-primary">
            Get a Quote
        </a>
    </header>
    <section id="services">
        <div class="content">
            <h2>Services</h2>
            <ul id="service_list">
                <li class="service" id="service_automotive">
                    <a href="/services/" >
                        <span>Automotive</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_marine">
                    <a href="/services/" >
                        <span>Marine</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_concrete">
                    <a href="/services/">
                        <span>Concrete</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_wood">
                    <a href="/services/">
                        <span>Wood</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_fleet">
                    <a href="/services/">
                        <span>Fleet Vehicles</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_fire">
                    <a href="/services/">
                        <span>Fire Restoration</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_graffiti">
                    <a href="/services/">
                        <span>Graffiti Removal</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <!-- <li class="service" id="service_power_coating">
                    <a href="/services/">
                        <span>Power Coating</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li> -->
                <li class="service" id="service_line_stripe">
                    <a href="/services/">
                        <span>Line Stripe</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_heavy_equipment">
                    <a href="/services/">
                        <span>Heavy Equipment</span> <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_pools">
                    <a href="/services/">
                        <span>Pools</span> <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_offshore">
                    <a href="/services/">
                        <span>Offshore</span> 
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
            </ul>
        </div>
    </section>
</main>
<?php get_footer(); ?>