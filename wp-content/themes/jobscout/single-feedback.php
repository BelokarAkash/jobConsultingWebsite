<?php
/**
 * The template for displaying all single job posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package JobScout
 */
get_header(); ?>

<section>
    <div class="container">
        <h3>Feedback:</h3>
        <div class="row">
            <?php if (have_rows('repeater')): ?>
                <?php while (have_rows('repeater')):
                    the_row(); ?>
                    <?php if (get_sub_field('image')): ?>
                        <div class="col-md-4">
                            <img src="<?php the_sub_field('image'); ?>" alt="feedback-images">
                        </div>
                    <?php endif ?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php // No rows found  ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php 
get_footer();