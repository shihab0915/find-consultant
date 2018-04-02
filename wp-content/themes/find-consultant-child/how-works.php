<?php
/**
 * Template Name: How it Works
 *
 * @todo Remove this template. Use full-page instead
 *       and populate on install with placeholder content.
 *
 * @package Find-Consultant\Templates
 * @since 1.0.0
 */
?>
<!-- HOW IT WORKS -->
<?php echo get_template_part('/includes/how-it-works'); ?>

    
<div class="container temp-hiw"> 
    <div class="col-lg-10 col-lg-offset-1">
        <?php while ( have_posts() ) : the_post(); the_content(); ?>
        <?php endwhile; ?>
    </div>	
</div>
