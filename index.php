<?php get_header(); ?>
<main id="home">
    <header class="hero">
        <div class="hero-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mobile-blast-guy-logo.svg"
                alt="Mobile Blast Guy Logo" id="logo">
            <h3>Dustless Blasting in Ohio</h3>
            <a href="tel:+14199575665" class="btn btn-primary">
                <span>Get a Quote </span>
            </a>
        </div>
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
                        <span>Heavy Equipment</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_pools">
                    <a href="/services/pools">
                        <span>Pools</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_housing">
                    <a href="/services/housing">
                        <span>Housing</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
                            alt="Arrow pointing right">
                    </a>
                </li>
                <li class="service" id="service_more">
                    <a href="/services/more">
                        <span>More</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chevron_right.svg"
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
    <div id="bottom_content">
        <section id="about">
            <div class="content">
                <h3>You name it, we blast it!</h3>
                <p>Safe on steel, fiberglass, aluminum, brick, stone, concrete and more!</p>
            </div>
        </section>
        <!-- <section id="recent_work">
        <div class="content">
            <h3>Recent Work</h3>
            
        </div>
    </section> -->
        <section id="map">
            <div class="content">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24054.619077698764!2d-83.535954!3d41.094618!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8839558e36bc9061%3A0xa6be01d670b0f3b0!2smobile%20blast%20guy!5e0!3m2!1sen!2sus!4v1755521810272!5m2!1sen!2sus"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>