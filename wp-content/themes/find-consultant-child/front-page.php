<?php 
    get_header();
?>
<div class="slidertandew">
    <?php echo get_template_part('/slider/slider'); ?>
    <div class="serchtandew">
        <?php echo get_template_part('/includes/search'); ?>
    </div>
</div>

<div class="fp_search">
	<?php echo get_template_part('/includes/search'); ?>
</div>

<!-- POPULAR CATEGORIES -->
<?php echo get_template_part('/includes/popular-categories'); ?>

<!-- HOW IT WORKS -->
<?php echo get_template_part('/includes/how-it-works'); ?>

<!-- FRONT PAGE RECENT PROJECTS AND TOP CONSULTANTS LOOP --> 
<div id="fploop" class="container" style="margin-top: 2rem;">
    <div class="row">
    	<?php
    		if( pmpro_hasMembershipLevel('2') ){
				do_action( 'hrb_front_loops' );
    		} else{ ?>
    			<div class="col-xs-12 col-lg-10 col-lg-offset-2 well text-center alert alert-danger">
    				<h1><i class="fa fa-lock" aria-hidden="true"></i></h1>
    				<h1>Projects and Consultants's profile are only visible to Premium members only.</h1>
    			</div>

    		<?php }
    	?>
    </div>
</div>