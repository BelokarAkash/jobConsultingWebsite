<?php if ( $apply = get_the_job_application_method() ) :
	wp_enqueue_script( 'wp-job-manager-job-application' );
	?>
	<div class="job_application application ">
		<?php do_action( 'job_application_start', $apply ); ?>

		<a href="http://localhost/Wordpress/wordpress_demo/contact-us/" class="btn btn-success" style="background-color: #28a745; border-color: #28a745;">Apply</a>

		<!-- <input type="button" class="application_button button" value="<?php esc_attr_e( 'Apply for job', 'jobscout' ); ?>" /> -->

		<div class="application_details">
			<?php
				/**
				 * job_manager_application_details_email or job_manager_application_details_url hook
				 */
				do_action( 'job_manager_application_details_' . $apply->type, $apply );
			?>
		</div>
		<?php do_action( 'job_application_end', $apply ); ?>
	</div>
<?php endif;
