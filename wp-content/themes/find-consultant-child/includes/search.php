<div class="container">
    <div class="row header-branding-wrap">
        <div class="large-12 columns top-navigation-header">
            <form method="get" action="<?php echo esc_url( trailingslashit( home_url() ) ); ?>">
                <div class="row">
                    <div class="large-4 columns project-dropdown">
                        <?php the_hrb_search_dropdown( array( 'name' => 'drop-search' ) ); ?>
                    </div>
                    <div class="large-8 columns search-field">
                        <input type="search" id="search" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', APP_TD ); ?>" name="ls" class="text search" value="<?php esc_attr( hrb_output_search_query_var( 'ls' ) ); ?>" />
                        <div class="search-btn">
                            <button type="submit" id="search-submit" class="search-button"><i class="fi-magnifying-glass"></i></button>
                        </div>
                    </div>
                    <input type="hidden" id="st" name="st" value="<?php echo esc_attr( hrb_get_search_query_var( 'st' ) ? hrb_get_search_query_var( 'st' ) : HRB_PROJECTS_PTYPE ); ?>">
                </div><!-- .row -->
            </form>
        </div><!-- .columns -->
    </div><!-- .row -->
</div>