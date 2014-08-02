<?php
/**
 * @package Blain
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("row archive"); ?>>
	
	<header class="entry-header">
		<h2 class="univers"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<p class="small_text"><?php the_date(); ?></p>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
	<?php if ( of_get_option('excerpt1', true) == 0 ) : ?>
		<?php the_content( __( 'Contine reading <span class="meta-nav">&rarr;</span>', 'blain' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages: ', 'blain' ),
				'after'  => '</div>',
			) );
		else :
			the_excerpt();
		endif;		
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
</article><!-- #post-## -->