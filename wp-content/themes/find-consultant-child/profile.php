<?php
/**
 * The author/user page template file
 *
 * @package Find-Consultant\Templates
 * @since 1.0.0
 */
?>

<div id="primary" class="content-area container">
    
	<div id="main" class="large-8 columns user-profile">

		<div class="row profile">

			<div class="fr-img large-3 small-3 small-centered large-uncentered columns">
				<?php the_hrb_user_gravatar( $profile_author->ID, 175 ); ?>
				<div class="review-meta">
					<?php the_hrb_user_rating( $profile_author->ID, __( 'No ratings yet', APP_TD ) ); ?>
				</div>
			</div>

			<div class="large-9 columns user-info">

				<h2 class="user-name"><?php the_hrb_user_display_name( $profile_author->ID ); ?>
					<?php if ( get_the_hrb_user_location( $profile_author->ID ) ) { ?>
						<span class="location"><i class="icon i-user-location"></i><?php the_hrb_user_location( $profile_author->ID ); ?></span>
					<?php } ?>
				</h2>

				<!-- freelancer meta above desc-->
				<div class="freelancer-meta cf">
					<div class="freelancer-rate"><?php the_hrb_user_rate( $profile_author ); ?></div>
					<div class="freelancer-success"><?php the_hrb_user_success_rate( $profile_author ); ?></div>
					<div class="freelancer-portfolio">
						<?php if ( $profile_author->user_url ) { ?>
							<?php 
								if( pmpro_hasMembershipLevel('2') ){
									the_hrb_user_portfolio( $profile_author );
								} else{ ?>
									<h6 class="alert alert-danger" role="alert" style="margin: 0;padding:7px;font-weight:bold;"><i class="fa fa-lock" aria-hidden="true"></i> Only Premium members can browse CV.</h6>
								<?php }
							?>
							
						<?php } ?>
					</div>
				</div>

				<div class="user-actions">
					<?php
					/**
					 * Fires after the author meta.
					 *
					 * @since 1.0.0
					 *
					 * @param array $profile_author The author array.
					 */
					do_action( 'hrb_output_user_actions', $profile_author );
					?>
				</div>

				<div class="user-description"><?php the_hrb_user_bio( $profile_author ); ?></div>

				<div class="user-social-networks">

					<?php if ( ! empty( $profile_author->user_url ) ) {  ?>
							<a title="<?php esc_attr_e( __( 'Website', APP_TD ) ); ?>" href="<?php echo esc_url( $profile_author->user_url ); ?>"><i class="icon i-website"></i></a>
					<?php } ?>

					<?php foreach ( get_the_hrb_user_social_networks( $profile_author ) as $network_id => $value ) { ?>
							<a target="_blank" title="<?php echo esc_attr( APP_Social_Networks::get_title( $network_id) ); ?>" href="<?php echo esc_url( APP_Social_Networks::get_url( $network_id, $value ) ); ?>"><i class="icon fi-social-<?php echo esc_attr( $network_id ); ?>"></i></a>
					<?php } ?>

				</div>


			</div>

		</div><!-- end row -->

		<div class="row">
			<div class="large-12 columns skills">
				<div class="user-skills"><?php the_hrb_user_skills( $profile_author, ' ', '<span class="label">', '</span>' ); ?></div>
			</div><!-- end 12-columns -->
		</div><!-- end row -->

		<div class="user-header-meta row">
			<div class="meta-rating large-4 columns large-uncentered success-rate">
				<i class="icon i-success-rate"></i><small class="label-meta"><?php _e( 'Success Rate:', APP_TD ); ?></small> <strong><?php the_hrb_user_success_rate( $profile_author ); ?></strong>
			</div>
			<div class="meta-current large-4 columns large-uncentered active-projects">
				<i class="icon i-active-projects"></i><small class="label-meta"><?php _e( 'Active Projects:', APP_TD ); ?></small> <strong><?php the_hrb_user_related_active_projects_count( $profile_author ); ?></strong>
			</div>
			<div class="meta-completed large-4 columns large-uncentered completed-projects">
				<i class="icon i-completed-projects"></i><small class="label-meta"><?php _e( 'Projects Completed:', APP_TD ); ?></small> <strong><?php the_hrb_user_completed_projects_count( $profile_author ); ?></strong>
			</div>
		</div><!-- end row -->

		<div class="user-content-tabs row">
		  <div class="section-container auto section-tabs" data-section data-options="deep_linking: true">

			<!-- dynamic content within tabs -->

			<?php if ( $projects_owned && $projects_owned->have_posts() ) : ?>

				<section class="services-current <?php echo empty( $active ) ? $active = 'active' : ''; ?>">

					<p class="title" data-section-title><a href="#projects-employer"><?php _e( 'Projects', APP_TD ) ?></a></p>

					<div class="content" data-section-content>
						<?php appthemes_load_template( 'profile-section-projects.php', array( 'projects' => $projects_owned, 'relation' => 'employer', ) ); ?>
					</div>

				</section>

			<?php endif; ?>

			<?php if ( $projects_participant && $projects_participant->have_posts() ) : ?>

					<section class="services-current <?php echo empty( $active ) ? $active = 'active' : ''; ?>">

						<p class="title" data-section-title><a href="#projects-worker"><?php _e( 'Awarded Projects', APP_TD ) ?></a></p>

						<div class="content" data-section-content>
							<?php appthemes_load_template( 'profile-section-projects.php', array( 'projects' => $projects_participant, 'relation' => 'worker' ) ); ?>
						</div>

					</section>

			<?php endif; ?>

			<section class="services-current <?php echo empty( $active ) ? $active = 'active' : ''; ?>">

				<p class="title" data-section-title><a href="#reviews"><?php _e( 'Reviews', APP_TD ); ?></a></p>

				<div class="content" data-section-content>
					<?php appthemes_load_template( 'profile-section-reviews.php', array( 'reviews' => $reviews ) ); ?>
				</div>

			</section>

			<?php if ( $user_posts->have_posts() ) : ?>

					<section class="services-current <?php echo empty( $active ) ? $active = 'active' : ''; ?>">

						<p class="title" data-section-title><a href="#posts"><?php _e( 'Posts', APP_TD ); ?></a></p>

						<div class="content" data-section-content>
							<?php appthemes_load_template( 'profile-section-posts.php', array( 'user_posts' => $user_posts ) ); ?>
						</div>

					</section>

			<?php endif; ?>

			<?php do_action( 'hrb_profile_tabs', $profile_author, $active ); ?>

		  </div>
		</div><!-- .row -->

	</div><!-- #main -->
        <?php get_sidebar( 'profile' ); ?>

</div><!-- #primary -->
