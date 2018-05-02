<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head elements.
 *
 * @package Find-Consultant
 * @since 1.0.0
 * @since 1.4.0 Added header tag. Moved content blocks into own template parts.
 */
?>
<header class="header" role="banner">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php the_custom_logo(); ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <?php // is logged in and admin or freelancer
            $user = wp_get_current_user();
            if( is_user_logged_in() && in_array( 'freelancer' , (array) $user->roles ) || in_array( 'administrator' , (array) $user->roles ) ) { ?>
                <li><a href="<?php echo site_url('/projects'); ?>">Find Projects</a></li>
            <?php } ?>
        
        <?php // is logged in and admin or employer
            $user = wp_get_current_user();
            if( is_user_logged_in() && in_array( 'employer' , (array) $user->roles ) || in_array( 'administrator' , (array) $user->roles ) ) { ?>
                <li><a href="<?php echo site_url('/consultants'); ?>">Find Consultants</a></li>
            <?php } ?>        
        
        <li><a href="<?php echo site_url('/categories'); ?>">Categories</a></li>
        <li><a href="<?php echo site_url('/how-it-works'); ?>">How it Works</a></li>
        <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
       
<!--        <span id="custom_hrb_nav"><?php the_hrb_user_nav_links(); ?></span>-->
<!-- rss feed       the_hrb_social_nav_links();-->
        
        
      </ul>
      <form class="navbar-form navbar-left">

        <div class="form-group">
        
<!--          <input type="text" class="form-control" placeholder="Search">-->
        </div>

        <?php 
            if(is_user_logged_in()){ ?>
                <button type="submit" class="btn btn-default btn--inbox"><span id="custom_hrb_nav"><?php the_hrb_user_nav_links(); ?></span></button>
        <?php } ?>
        
      </form>

      <?php 
        if( !is_user_logged_in() ){ ?>
          <ul class="nav navbar-nav navbar-center">
            <li><a href="<?php echo site_url('/post-a-project'); ?>">Post an advert</a></li>
            <li><a href="<?php echo site_url('/dashboard'); ?>">Post your CV</a></li>
          </ul>
       <?php } ?>
      

      <ul class="nav navbar-nav navbar-right">
        <?php
          if(is_user_logged_in()){ ?>
            <li><a class="user_profile_32" href="<?php echo site_url('/dashboard'); ?>"><?php echo get_avatar( get_current_user_id(), 32 ); ?></a></li>
           
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, 
                                   <?php
                                    $current_user = wp_get_current_user();
                                    echo $current_user->user_login; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('/dashboard'); ?>"><b><?php
                                    $current_user = wp_get_current_user();
                                    echo $current_user->user_login; ?></b></a></li>
            <li><a href="<?php echo site_url('/edit-profile'); ?>">Settings</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></li>
            
          </ul>
        </li>    
        <?php } else{ ?>
            <li><a href="<?php echo wp_login_url(); ?> ">Login</a></li>
            <li><a href="<?php echo wp_registration_url(); ?> ">Register</a></li>
        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header><!-- .header -->


