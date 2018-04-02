<section class="container-fluid ini-pos popular-categories">
    <div class="clearfix">
    <h1>Popular Categories</h1>
    
    <?php 
        while( have_posts() ) {
        the_post(); 
        $link = get_field('category_1_link');
        $icon = get_field('category_1_icon');
        $name = get_field('category_1_name');
        ?>
        <a href="<?php echo $link ?>">
            <div class="col-sm-6 col-md-3">
                <?php echo $icon; ?>
                <p><?php echo $name; ?></p>
            </div>
        </a>            
    <?php } ?>
    
    
    <?php 
        while( have_posts() ) {
        the_post(); 
        $link = get_field('category_2_link');
        $icon = get_field('category_2_icon');
        $name = get_field('category_2_name');
        ?>
        <a href="<?php echo $link ?>">
            <div class="col-sm-6 col-md-3">
                <?php echo $icon; ?>
                <p><?php echo $name; ?></p>
            </div>
        </a>            
    <?php } ?>


    <a href="#">
        <div class="col-sm-6 col-md-3">
            <i class="fa fa-pie-chart" aria-hidden="true"></i>
            <p>Corporate Strategy </p>
        </div>
    </a>
    <a href="#">
        <div class="col-sm-6 col-md-3">
            <i class="fa fa-recycle" aria-hidden="true"></i>
            <p>Principal Institute Research</p>
        </div>
    </a>

    <a href="#">
        <div class="col-sm-6 col-md-3">
            <i class="fa fa-deaf" aria-hidden="true"></i>
            <p>People Scientist</p>
        </div>
    </a>
    <a href="#">
        <div class="col-sm-6 col-md-3">
            <i class="fa fa-university" aria-hidden="true"></i>
            <p>Management</p>
        </div>
    </a>
    <a href="#">
        <div class="col-sm-6 col-md-3">
            <i class="fa fa-heartbeat" aria-hidden="true"></i>
            <p>Health</p>
        </div>
    </a>
    <a href="#">
        <div class="col-sm-6 col-md-3">
            <i class="fa fa-tree" aria-hidden="true"></i>
            <p>Rural Development</p>
        </div>
    </a>
    </div>
   
    <div class="all-cat-button">
        <a href="<?php echo site_url('/categories'); ?>">See All Categories</a>
    </div>
</section>