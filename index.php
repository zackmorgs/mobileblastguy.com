<?php get_header(); ?>
<main>
    <header class="hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mobile-blast-guy-logo.svg"
            alt="Mobile Blast Guy Logo" id="logo">
        <h3>Dustless Blasting in Ohio</h3>
        <a href="tel:+14199575665" class="btn btn-primary">
            <span>Get a Quote </span>
        </a>
    </header>

    <section id="services">
        <div class="content">
            <h2>Services</h2>
            <ul id="service_list">
                <li class="service" id="service_automotive">
                    <a href="/services/automotive">
                        <span>Automotive</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>

                </li>
                <li class="service" id="service_marine">
                    <a href="/services/marine">
                        <span>Marine</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_concrete">
                    <a href="/services/concrete">
                        <span>Concrete</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_wood">
                    <a href="/services/wood">
                        <span>Wood</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_fleet">
                    <a href="/services/fleet-vehicles">
                        <span>Fleet Vehicles</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_fire">
                    <a href="/services/fire-restoration">
                        <span>Fire Restoration</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_graffiti">
                    <a href="/services/graffiti-removal">
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
                    <a href="/services/line-stripe">
                        <span>Line Stripe</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_heavy_equipment">
                    <a href="/services/heavy-equipment">
                        <span>Heavy Equipment</span> <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_pools">
                    <a href="/services/pools">
                        <span>Pools</span> <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <!-- <li class="service" id="service_offshore">
                    <a href="/services/">
                        <span>Offshore</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li> -->
            </ul>
        </div>
    </section>
    <section id="about">
        <div class="content">
            <h3>You name it, we blast it!</h3>
            <p>Safe on steel, fiberglass, aluminum, brick, stone, concrete and more!</p>
        </div>
    </section>
    <section id="recent_work">
        <div class="content">
            <h3>Recent Work</h3>
            <p>Check out some of our recent projects in the <a href="/gallery">gallery</a>.</p>
        </div>
    </section>
</main>
<?php get_footer(); ?>