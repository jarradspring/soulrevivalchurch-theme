<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Blain
 */

get_header(); ?>

<div class="page_content default red search">
    <div class="main">
        <div class="container">

		<?php if ( have_posts() ) : ?>

            <h2 class="univers"><?php printf( __( 'Search Results for: %s', 'blain' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php blain_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>