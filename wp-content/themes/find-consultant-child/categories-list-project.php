<?php
/**
 * The project categories template /categories/
 *
 * Template Name: Projects Categories
 *
 * @package Find-Consultant\Templates
 * @since 1.0.0
 */
?>

<div class="container">
    <div class="row category-row">
        <div class="large-12 columns">
            <section class="categories-list">
                <?php the_hrb_project_categories_list(); ?>
            </section>
        </div><!-- .columns -->
    </div><!-- .category-row -->
</div>