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
            <br>
            <div id="social_content">
                <p>Follow Us:</p>
                <ul id="social_icons">
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/facebook_icon.svg"
                                alt="Facebook Icon">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/instagram_icon.svg"
                                alt="Instagram Icon"></section>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/youtube_icon.svg"
                                alt="YouTube Icon">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <section id="what_we_do">
        <div class="content">
            <div class="slider">
                <div class="slider-container">
                    <div class="before">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/automotive/vintage_truck_before.png"
                            alt="Vintage Truck Before" />
                    </div>
                    <div class="after">
                        <img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/automotive/vintage_truck_after.png"
                            alt="Vintage Truck After" />
                    </div>
                </div>
                <input type="range" min="0" max="100" value="50" class="slider-control"
                    oninput="updateSlider(this.value)" aria-label="Percentage of before/after photo shown." />
                <div class="slider-line"></div>
                <!-- <div class="slider-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <rect width="100%" height="100%" fill="none" />
                        <line x1="128" y1="40" x2="128" y2="216" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <line x1="96" y1="128" x2="16" y2="128" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16" />
                        <polyline points="48 160 16 128 48 96" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16" />
                        <line x1="160" y1="128" x2="240" y2="128" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <polyline points="208 96 240 128 208 160" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    </svg>
                </div> -->
            </div>
            <h2>What We Do</h2>
            <p>We provide mobile dustless blasting services for a variety of surfaces including automotive, marine,
                concrete, wood, and more. Our services are safe on steel, fiberglass, aluminum, brick, stone, concrete
                and more!</p>
            <p>If you need to remove an unwanted surface on a material, we can help.</p>
            <a href="/about" class="btn btn-secondary">Learn More</a>
        </div>
    </section>
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