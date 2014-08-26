<?php
/**
Template Name: Blog
 */

get_header(); ?>

<div class="page_content default red">
    <div class="page_header">
        <div class="container">
            <div class="inner">
                <h2 class="large_text"><?php the_title(); ?></h2>
                <div class="page_description">
                    <p>All the latest news, ideas and thoughts from the staff and members of Soul Revival Church. Enjoy!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <?php if (have_posts()) : ?>
                <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1; query_posts('cat=2&paged='.$paged.'&post_per_page=2'.get_option('posts_per_page')); ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="blog_article description">
                        <h2 class="univers"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                        <?php if ( 'post' == get_post_type() ) : ?>
                            <div class="entry-meta">
                                <p class="small_text"><?php the_date(); ?></p>
                            </div><!-- .entry-meta -->
                        <?php endif; ?>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
                <div class="bottom-links">
                    <div class="pagination">
                        <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); else { ?>
                            <div class="pagination-newer"><?php previous_posts_link(__('Newer Entries')) ?></div>
                            <div class="pagination-older"><?php next_posts_link(__('Older Entries')) ?></div>
                        <?php } ?>
                    </div> <!--end .pagination-->
                </div><!-- #bottom-links -->
            <?php else : ?>

                <div id="post-0" class="post home-no-results not-found">
                    <header class="entry-header">
                        <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
                    </header><!-- .entry-header -->
                    <div class="entry-content">
                        <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
                        <?php get_search_form(); ?>
                    </div><!-- .entry-content -->
                </div><!-- #post-0 -->

            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>