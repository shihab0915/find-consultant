<?php
/**
 * The template for displaying project listings
 *
 * @package Find-Consultant\Templates
 * @since 1.0.0
 */
?>
<div class="container find-prjt">
    <div id="primary" class="content-area row">

        <div id="main" class="large-8 columns">
        	<?php
        		if( pmpro_hasMembershipLevel('2') ){
					get_template_part( 'parts/loop', HRB_PROJECTS_PTYPE );
        		} else{ ?>
					<div class="col-xs-12 col-lg-10 col-lg-offset-2 well text-center alert alert-danger">
	    				<h1><i class="fa fa-lock" aria-hidden="true"></i></h1>
	    				<h1>Projects are only visible to Premium members only.</h1>
	    			</div>  
        		<?php }
        	?>

        </div><!-- #main -->

        <?php get_sidebar( 'archive' ); ?>

    </div><!-- #primary -->
</div>