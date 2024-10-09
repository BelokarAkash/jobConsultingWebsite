<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JobScout
 */

get_header(); ?>


<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded mt-5">

    <section>
        <div class="container">
            <h2>About Us:</h2>
            <p class="ps-5">
                Prefix Placement Solutions is leading IT service group, Providing placement in IT and various other
                sectors.
                We are giving candidates a good career opportunity to grow their future. Prefix Placement Solutions is
                basically freelancing consultancy and service based industry.
            </p>
        </div>
    </section>

    <!-- About 1 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                        <div>
                            <div class="me-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                                    class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6 1.223a1 1 0 0 1 1.515-.858l6.373 3.654a1 1 0 0 1 .112 1.777L10 9l-.26.304a1 1 0 0 1-1.52-.062L6 6.156 4.605 9.242a1 1 0 0 1-1.527.117L1.11 8.11a1 1 0 0 1 .112-1.777l6.373-3.654A1 1 0 0 1 6 1.223z" />
                                    <path
                                        d="M6.996 14c.462.614.977 1.118 1.5 1.464.523-.346 1.038-.85 1.5-1.464h-3zM8 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="h4 mb-3">Innovation</h2>
                                <p class="text-secondary mb-0">We are committed to innovation and continuously seek new
                                    and
                                    creative solutions to challenges.</p>
                            </div>
                        </div>

                    </div>

                    <div class="pt-5">
                        <div class="me-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-award-fill" viewBox="0 0 16 16">
                                <path
                                    d="M13.5 1a.5.5 0 0 1 .5.5v2.8l1.52-1.52a.5.5 0 1 1 .7.7l-2.42 2.42a.5.5 0 0 1-.7 0L9.28 4.49a.5.5 0 1 1 .7-.7L11 4.8V1.5a.5.5 0 0 1 .5-.5zM8 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                                <path
                                    d="M8.354 13.854a.5.5 0 0 1-.708 0l-2.5-2.5a.5.5 0 0 1 .708-.708l2.353 2.353 3.647-5.47a.5.5 0 1 1 .914.405l-4 6a.5.5 0 0 1-.817.086l-3.5-3.5a.5.5 0 1 1 .708-.708l3.146 3.146z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="h4 mb-3">Recognition</h2>
                            <p class="text-secondary mb-0">We believe in recognizing and rewarding the hard work and
                                dedication of our team members.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="mb-3">Who Are We?</h2>
                            <p class="lead fs-4 text-secondary mb-3">Prefix Placement Solutions is leading placement
                                group with 300+ Clients on chart, where we fulfill the requirements of both employers
                                and Employees.</p>
                            <div class="row gy-4 gy-md-0 gx-xxl-5X pt-3">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                                <path d="M0 5v9a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5H0z"></path>
                                                <path
                                                    d="M12.5 0h-9C2.672 0 2 1.12 2 2.5V4h12V2.5C14 1.12 13.328 0 12.5 0zm-1 4V3H4v1h7.5zM2 5v8a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="h4 mb-3">Job Opportunities</h2>
                                            <p class="text-secondary mb-0">Explore a wide range of job opportunities
                                                across various industries and sectors.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 10c1.5 0 2.5 1 2.5 2.5S9.5 15 8 15 5.5 14 5.5 12.5 6.5 10 8 10zm-2.5-2.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zM13 10c0-1.925-1.565-3.5-3.5-3.5S6 8.075 6 10s1.565 3.5 3.5 3.5S13 11.975 13 10zM3 10c0-2.33 1.79-4.227 4-4.464V5c0-1.104.896-2 2-2s2 .896 2 2v.536c2.21.237 4 2.134 4 4.464 0 1.611-1.337 2.978-3 3.374V14H6v-.626c-1.663-.396-3-1.763-3-3.374z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="h4 mb-3">Career Development</h2>
                                            <p class="text-secondary mb-0">We support career growth and development by
                                                providing resources and guidance to job seekers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="text-center py-4">
    <h2>Achievements</h2>
</div>

<div id="primary" class="content-area">

    <?php
    /**
     * Before Posts hook
     */
    do_action('jobscout_before_posts_content');
    ?>

    <main id="main" class="site-main shadow-all-sides ">

        <?php
        if (have_posts()):

            /* Start the Loop */
            while (have_posts()):
                the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('template-parts/content', get_post_format());

            endwhile;

        else:

            get_template_part('template-parts/content', 'none');

        endif; ?>

    </main><!-- #main -->

    <?php
    /**
     * After Posts hook
     * @hooked jobscout_navigation - 15
     */
    do_action('jobscout_after_posts_content');
    ?>

</div><!-- #primary -->


<?php
// get_sidebar();
get_footer();
