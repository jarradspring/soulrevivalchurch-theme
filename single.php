<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Blain
 */

get_header(); ?>
<div class="page_content default red error">
    <div class="main">
        <div class="container">
            <div class="description">
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'single' ); ?>

                <?php endwhile; // end of the loop. ?>
            </div>
            <a href="/blog" class="btn red">Back to Blog</a>
	    </div><!-- #primary -->
	</div><!-- #primary -->
</div><!-- #primary -->


<?php get_footer(); ?>