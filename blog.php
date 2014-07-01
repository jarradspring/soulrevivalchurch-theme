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
            <?php query_posts('cat=2'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="blog_article description">
                    <h2 class="univers"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    <?php if ( 'post' == get_post_type() ) : ?>
                        <div class="entry-meta">
                            <p class="small_text"><?php the_date(); ?></p>
                        </div><!-- .entry-meta -->
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>
                <?php next_posts_link(); ?>
                <?php previous_posts_link(); ?>

            <?php endwhile; endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>