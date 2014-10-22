<?php
/**
Template Name: Content Page - Child
 */

get_header(); ?>

<div class="page_content default custom <?php the_field('page_colour'); ?>">
    <?php while ( have_posts() ) : the_post(); ?>
        <header class="page_header">
            <h2 class="univers"><?php the_title(); ?></h2>
            <span class="small_text"><?php wps_parent_post(); ?></span>
        </header><!-- .entry-header -->
        <div class="main">
            <div class="container">
                <div class="description">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; // end of the loop. ?>
</div>
<div class="contact_banner <?php the_field('page_colour'); ?>">
    <?php require_once('contact_banner.php'); ?>
</div>


<?php get_footer(); ?>