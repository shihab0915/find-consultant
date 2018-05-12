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
<div id="fploop" class="container">
    <div class="row">
        <?php do_action( 'hrb_front_loops' ); ?>
    </div>
</div>