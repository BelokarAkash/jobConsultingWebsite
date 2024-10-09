<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JobScout
 */

/**
 * After Content
 * 
 * @hooked jobscout_content_end - 20
 */
do_action('jobscout_before_footer');

// /**
//  * Footer
//  * 
//  * @hooked jobscout_footer_start  - 20
//  * @hooked jobscout_footer_top    - 30
//  * @hooked jobscout_footer_bottom - 40
//  * @hooked jobscout_footer_end    - 50
// */
// do_action( 'jobscout_footer' );

/**
 * After Footer
 * 
 * @hooked jobscout_page_end    - 20
 */
do_action('jobscout_after_footer');

wp_footer(); ?>

<!-- footer -->
<footer class="pt-5 pb-3 bg-secondary text-white">
    <div class="container">
        <div class="row justify-content-center  align-items-center">

            <!-- Logo and About Section -->
            <div class="col-12 col-md-6 col-xxl-6 mb-4 text-center pe-5">
                <p class="lead">We're dedicated to fostering meaningful connections between talent and opportunity,
                    ensuring that every placement is a stepping stone towards fulfilling careers and thriving
                    communities.
                </p>
            </div>

            <!-- Get in Touch Section -->
            <div class="col-12 col-md-6 col-xxl-6 mb-4 ps-5 text-decoration-none">
                <h4 class="mb-3 ps-5">Get in Touch</h4>
                <ul class="list-unstyled">
                    <li><a href="tel:+917448024063"><i class="fas fa-phone-alt me-2"></i> Contact: 74480 24063</a></li>
                    <li><a href="mailto:prefixplacementsolution345@gmail.com"><i class="fas fa-envelope me-2"></i>
                            Email: prefixplacementsolution345@gmail.com</a></li>
                            <li><a href="https://www.google.com/maps/search/?api=1&query=Hinjewadi+Phase+3,+Pune+411057"><i class="fas fa-map-marker-alt me-2"></i> Address: Hinjewadi Phase 3, Pune, 411057.</a></li>
                </ul>

            </div>
        </div>

        <!-- Navigation Section -->
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <nav class="nav nav-footer justify-content-center">
                    <a class="nav-link" href="http://localhost/Wordpress/wordpress_demo/">Home</a>
                    <span class="my-2 vr opacity-50"></span>
                    <a class="nav-link" href="http://localhost/Wordpress/wordpress_demo/jobs/">Jobs</a>
                    <span class="my-2 vr opacity-50"></span>
                    <a class="nav-link" href="http://localhost/Wordpress/wordpress_demo/achievements/">Achievements</a>
                    <span class="my-2 vr opacity-50"></span>
                    <a class="nav-link" href="http://localhost/Wordpress/wordpress_demo/contact-us/">Apply</a>
                </nav>
            </div>
        </div>

        <!-- Desc -->
        <hr class="mt-6 mb-3">

        <div class="row align-items-center">
            <!-- Desc -->
            <div class="col-lg-3 col-md-6 col-12">
                <span>© <span id="copyright4">
                        <script>
                            document.getElementById('copyright4').appendChild(document.createTextNode(new Date()
                                .getFullYear()))
                        </script>
                    </span> Prefix placement solutions. All Rights Reserved</span>
            </div>

            <!-- Legal Links -->
            <div class="col-12 col-md-6 col-lg-7 d-lg-flex justify-content-center">
                <nav class="nav nav-footer">
                    <a class="nav-link ps-0" href="#">Privacy Policy</a>
                    <a class="nav-link px-2 px-md-0" href="#">Cookie Notice</a>
                    <a class="nav-link" href="#">Terms of Use</a>
                </nav>
            </div>

            <!-- Social Media and Contact -->
            <div class="col-lg-2 col-md-12 col-12 d-lg-flex justify-content-end">
                <div class="">
                    <!--Facebook-->
                    <a href="#" class="me-2">
                        <i class="fab fa-facebook" style="font-size: 16px; color: #3b5998;"></i>
                    </a>

                    <!--Instagram-->
                    <a href="#" class="me-2">
                        <i class="fab fa-instagram" style="font-size: 16px; color: #c13584;"></i>
                    </a>

                    <!--LinkedIn-->
                    <a href="#" class="me-2">
                        <i class="fab fa-linkedin" style="font-size: 16px; color: #0077b5;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>




</body>

</html>