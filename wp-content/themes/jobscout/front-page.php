<?php
/**
 * Front Page
 * 
 * @package JobScout
 */

$home_sections = jobscout_get_home_sections();

if ( 'posts' == get_option( 'show_on_front' ) ) { //Show Static Blog Page
    include( get_home_template() );
}elseif( $home_sections ){ 
    get_header();
    //If any one section are enabled then show custom home page.
    foreach( $home_sections as $section ){
        get_template_part( 'sections/' . esc_attr( $section ) );  
    }
    
?>

        <section class="">
            <div class="container py-5 ">

            <h2 class="section-heading text-center mb-4">Explore Job Opportunities</h2>
            <div class="job-categories">
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="card  bg-secondary-subtle text-secondary-emphasis  mb-5 bg-body-tertiary rounded jobs hover">
                            <div class="text-center pt-2">
                                <img src="wp-content\themes\jobscout\images\account_finance.avif" alt=".." height="60px"
                                    width="60px">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Account & Finance</h5>
                                <p class="card-text">300+ Jobs Available</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-secondary-subtle text-secondary-emphasis  mb-5 bg-body-tertiary rounded jobs hover">
                            <div class="text-center pt-2">
                                <img src="wp-content\themes\jobscout\images\creatice_design.avif" alt=".." height="60px"
                                    width="60px">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Creative Design</h5>
                                <p class="card-text">100+ Jobs Available</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-secondary-subtle text-secondary-emphasis  mb-5 bg-body-tertiary rounded jobs hover" >
                            <div class="text-center pt-2">
                                <img src="wp-content\themes\jobscout\images\marketing.avif" alt=".." height="60px"
                                    width="60px">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Marketing & Sales</h5>
                                <p class="card-text">150+ Jobs Available</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-secondary-subtle text-secondary-emphasis  mb-5 bg-body-tertiary rounded jobs hover" >
                            <div class="text-center pt-2">
                                <img src="wp-content\themes\jobscout\images\engineering.avif" alt=".." height="60px"
                                    width="60px">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Engineering Job</h5>
                                <p class="card-text">220+ Jobs Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>


        <?php
    get_footer();
} else {
    //If all section are disabled then show respective page template. 
    include(get_page_template());
}