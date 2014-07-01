<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Blain
 */

get_header(); ?>

    <div class="page_content default red error">
        <div class="main">
            <div class="container">
                <h2 class="univers">
                    <?php _e( 'Oops! That page can&rsquo;t be found.', 'blain' ); ?>
                </h2>
                <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'blain' ); ?></p>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <?php get_search_form(); ?>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>