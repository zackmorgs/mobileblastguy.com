<?php get_header(); ?>
<main id="home">
    <header class="hero">
        <div class="hero-content">
            <a id="hero_home_link" href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mobile-blast-guy-logo.svg"
                alt="Mobile Blast Guy Logo" id="logo">
            </a>
            <h3>Dustless Blasting in Ohio</h3>
            <a href="tel:+14199575665" class="btn btn-primary">
                <span>Get a Quote </span>
            </a>
            <br>
            <div id="social_content">
                <p>Follow Us:</p>
                <ul id="social_icons">
                    <li>
                        <a href="https://www.facebook.com/mobileblastguy" target="_blank" aria-label="Follow us on Facebook">
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
            <div class="md-row">
                <div class="slider">
                    <div class="slider-container">
                        <div class="before">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/automotive/vintage_truck_before.png"
                                alt="Vintage Truck Before" />
                        </div>
                        <div class="after">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/automotive/vintage_truck_after.png"
                                alt="Vintage Truck After" />
                        </div>
                    </div>
                    <input type="range" min="0" max="100" value="50" class="slider-control"
                        aria-label="Percentage of before/after photo shown." />
                </div>

                <div class="what_content">
                    <h2>What We Do</h2>
                    <p>We provide mobile dustless blasting services for a variety of surfaces. Our services are safe on
                        steel, fiberglass, aluminum, brick, stone, concrete, wood, wand more!</p>
                    <p>If you need to remove an unwanted surface on a material, we can help.</p>
                    <a href="/about" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            <div class="md-row">
                <div class="what-content">
                    <h2>About Us</h2>
                    <p>We are a family operated business based out of Findlay, Ohio. We have a “blast” taking paint,
                        rust and more off everything under the sun without causing damage to the underlying surface.
                        This system removes virtually any type of coating from any surface. It is quite remarkable.</p>
                    <a href="/about" class="btn">
                        About Us
                    </a>
                </div>
                <div class="slider">
                    <div class="slider-container">
                        <div class="before">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wood/deck_before.png"
                                alt="Vintage Truck Before" />
                        </div>
                        <div class="after">
                            <img class=""
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/wood/deck_after.png"
                                alt="Vintage Truck After" />
                        </div>
                    </div>
                    <input type="range" min="0" max="100" value="50" class="slider-control"
                        aria-label="Percentage of before/after photo shown." />
                </div>
            </div>

        </div>


    </section>

    <?php get_template_part(slug: 'template-parts/components/services-list'); ?>

    <div id="bottom_content">
        <section id="about">
            <div class="content">
                <div class="about-text">
                    <h3>You name it, we blast it!</h3>
                    <p>Safe on steel, fiberglass, aluminum, brick, stone, concrete and more!</p>
                </div>
                <div>
                    <div class="slider">
                        <div class="slider-container">
                            <div class="before">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/housing/house_siding_before.png"
                                    alt="House Siding Before" />
                            </div>
                            <div class="after">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/housing/house_siding_after.png"
                                    alt="House Siding After" />
                            </div>
                        </div>
                        <input type="range" min="0" max="100" value="50" class="slider-control"
                            aria-label="Percentage of before/after photo shown." />
                    </div>
                </div>
            </div>
        </section>
        <!-- <section id="recent_work">
        <div class="content">
            <h3>Recent Work</h3>
            
        </div>
    </section> -->
        <section id="map">
            <div class="content">
                <h3>Find Us</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24054.619077698764!2d-83.535954!3d41.094618!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8839558e36bc9061%3A0xa6be01d670b0f3b0!2smobile%20blast%20guy!5e0!3m2!1sen!2sus!4v1755521810272!5m2!1sen!2sus"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <section id="testimonials">

        </section>
    </div>
</main>
<?php get_footer(); ?>