<?php
/**
 * User registration page template
 *
 * @package HireBee\Templates
 * @since 1.0.0
 */
?>

<div class="container reg-pg-style">
   <div class="row">
    <?php if ( get_option( 'users_can_register' ) ) : ?>
        <?php appthemes_load_template( 'form-registration-main.php' ); ?>
    <?php else: ?>
        <h3><?php _e( 'User registration has been disabled.', APP_TD ); ?></h3>
    <?php endif; ?>
    </div>
</div>