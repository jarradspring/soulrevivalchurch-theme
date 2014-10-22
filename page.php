<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Blain
 */

get_header(); ?>
<div class="page_content default red error">
    <div class="main">
        <div class="container">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- .container -->
	</div><!-- .main -->
</div><!-- .default -->

<?php get_footer(); ?>
