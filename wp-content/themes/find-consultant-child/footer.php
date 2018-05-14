<?php
/**
 * The template for displaying the footer
 *
 * Displays all of the footer elements.
 *
 * @package Find-Consultant
 * @since 1.0.0
 */
?>

<footer>
   <div class="container">
        <div class="row" style="margin-top: 2rem;">
            <div class="col-md-6 ftr-about-us">
                <?php the_custom_logo(); ?>
                <h3>About Us</h3><hr style="margin:0">
                <p><?php echo get_theme_mod('about_us_text') ?></p>
            </div>
            <div class="col-md-3 quicklink">
                
                <h3><i class="fa fa-link" aria-hidden="true"></i> Quick Links</h3><hr style="margin:0">
                <p><a href="<?php echo site_url('/how-it-works'); ?>">How it Works</a></p>
                <p><a href="<?php echo site_url('/categories'); ?>">Categories</a></p>
                <p><a href="<?php echo site_url('/consultants'); ?>">Find Consultant</a></p>
                <p><a href="<?php echo site_url('/post-a-project'); ?>">Post a Project</a></p>
                <p><a href="<?php echo site_url('/register'); ?>">Become a consultant</a></p>
                <p class="social">
                <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></i></a>
                <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </p>
            </div>
            <div class="col-md-3 supporandtos">
                <h3><i class="fa fa-cog fa-spin"></i> Support &amp; ToS</h3><hr style="margin:0">
                <p>
                    <p><a href="#"><i class="fa fa-question" aria-hidden="true"></i> Help &amp; Support</a></p>
                    <p><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> Terms of Service</a></p>
                    <p><a href="#"><i class="fa fa-usd" aria-hidden="true"></i></i> Fees &amp; Charge</a></p>
                    <p><a href="#"><i class="fa fa-address-card" aria-hidden="true"></i> Contact Us</a></p>
                    
                </p>
            </div>
        </div><hr style="margin-bottom: 0px;">
        <p style="text-align: center; "><i class="fa fa-copyright" aria-hidden="true"></i> <?php the_time('Y'); ?> SLVC, All rights reserved. </p>
    </div>
</footer><!-- #footer -->