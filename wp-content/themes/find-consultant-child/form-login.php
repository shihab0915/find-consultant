<?php
/**
 * Password login page template
 *
 * @package Find-Consultant\Templates
 * @since 1.0.0
 */
?>

<div id="primary" class="container login-pg-style">

			<div class="large-12 columns">

				<div class="row">
					<div class="large-6 columns login-box">

						<?php require APP_THEME_FRAMEWORK_DIR . '/templates/form-login.php'; ?>

					</div>

					<?php if ( get_option( 'users_can_register' ) ) { ?>
						<div class="large-6 columns">
							<div class="register-box">
								<h5><?php echo $hrb_options->registration_box_title; ?></h5>
								<p class="registration-message"><?php echo $hrb_options->registration_box_text; ?></p>
								<?php wp_register( '<div class="button form-field" id="register-now">','</div>' ); ?>
							</div>
						</div>
					<?php } ?>

				</div><!-- .row -->

			</div><!-- .columns -->


</div><!-- #primary -->
