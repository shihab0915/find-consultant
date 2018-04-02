<section class="container-fluid well--bg-one howitworks">
    <div class="container">
        <h1 class="headline text-center ini-pos">How it Works</h1>
   
        <div class="col-md-3 col-sm-6 find">
            <div class="col">
               <i class="fa fa-search-plus" aria-hidden="true"></i>
            </div>
            <hr>
           <h6>Find</h6>
           <p class="text-center">
               <?php
                while( have_posts() ) {
                    the_post();
                    the_field('find');
                }
               ?>
           </p>
        </div>
        <div class="col-md-3 col-sm-6 hire">
           <div class="col">
               <i class="fa fa-handshake-o" aria-hidden="true"></i>
           </div>
           <hr>
           <h6>Hire</h6>
           <p class="text-center">
            <?php
                while( have_posts() ) {
                    the_post();
                    the_field('hire');
                }
               ?>
           </p>
        </div>
        <div class="col-md-3 col-sm-6 work">
            <div class="col">
               <i class="fa fa-tasks" aria-hidden="true"></i>
            </div>
            <hr>
            <h6>Work</h6>
            <p class="text-center">
               <?php
                while( have_posts() ) {
                    the_post();
                    the_field('work');
                }
               ?>
           </p>
        </div>
        <div class="col-md-3 col-sm-6 pay">
            <div class="col">
               <i class="fa fa-credit-card" aria-hidden="true"></i>
            </div>
            <hr>
            <h6>Pay</h6>
            <p class="text-center">
               <?php
                while( have_posts() ) {
                    the_post();
                    the_field('pay');
                }
               ?> 
            </p>
       </div>
    </div>
    <div class="text-center general-button-div front_page_post_prjt_btn">
        <div class="col-xs-12">
            <a href="<?php echo site_url('/post-a-project'); ?>">Post a Project</a>
        </div>
    </div>
</section>