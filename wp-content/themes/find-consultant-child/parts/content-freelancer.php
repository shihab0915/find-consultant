<?php
/**
 * Freelancer loop content template
 *
 * @package HireBee\Templates
 * @since 1.0.0
 *
 */
?>

<article id="freelancer-<?php echo $user->ID; ?>" <?php hrb_user_class( HRB_FREELANCER_UTYPE, $user ); ?>>

	<div class="row">

		<div class="fr-img small-3 columns">
			<?php the_hrb_user_gravatar( $user, 350 ); ?>
			<div class="review-meta">
				<?php the_hrb_user_rating( $user, __( 'No ratings yet', APP_TD ) ); ?>
			</div>
		</div>

		<div class="small-9 columns">
			<h2 class="freelancer-header">
				<?php the_hrb_user_display_name( $user ); ?>
				<?php if ( $user->hrb_location ): ?>
					<span class="freelancer-loc"><i class="icon i-user-location"></i><?php the_hrb_user_location( $user ); ?></span>
				<?php endif; ?>
			</h2>

			<!-- freelancer meta above desc-->
			<div class="freelancer-meta cf">
				<div class="freelancer-rate"><?php the_hrb_user_rate( $user ); ?></div>
				<div class="freelancer-success"><?php the_hrb_user_success_rate( $user ); ?></div>
				<div class="freelancer-portfolio">
					
					<?php if ( $user->user_url ): ?>
						<?php 
							if(pmpro_hasMembershipLevel('2')){
								the_hrb_user_portfolio( $user );
							} else{ ?>
								<h6 class="alert alert-danger" role="alert" style="margin: 0;padding:7px;font-weight:bold;"><i class="fa fa-lock" aria-hidden="true"></i> Only Premium members can browse CV.</h6>
							<?php }
						?>						
					<?php endif; ?>

				</div>
			</div>

			<!-- freelancer desc-->
			<div class="freelancer-description">

				<?php
					$freelancer_bio = get_the_hrb_user_bio( $user );
					$num_words = 150;
					$more_symbol = '&hellip; &raquo;';

					if( is_front_page() OR is_archive() ){
						echo wp_trim_words( $freelancer_bio, $num_words, $more_symbol );
					} else{
						the_hrb_user_bio( $user );
					}

				?>

			</div>

		</div><!-- end 9-columns -->

	</div><!-- end row -->

	<div class="row">
		<div class="large-12 columns">
			<div class="user-skills"><?php the_hrb_user_skills( $user, ' ', '<span class="label">', '</span>' ); ?></div>
		</div><!-- end 12-columns -->
	</div><!-- end row -->

</article>
