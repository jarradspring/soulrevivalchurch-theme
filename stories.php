<?php
/**
    Template Name: Stories
 */

get_header(); ?>
<div id="stories" class="page_content">
    <div class="page_header">
        <div class="container">
            <div class="inner">
                <span class="small_text">Jesus Changes</span>
                <h2 class="large_text">Lives</h2>
                <p class="page_description">Hear of the stories of those who come to our church and the way Jesus has given them something new.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="story">
                    <a href="<?php the_sub_field('video_link'); ?>" class="info">
                        <span class="inner">
                            <span class="small_text">Watch</span>
                            <span class="large_text name">Brad<?php the_sub_field('name'); ?>'s</span>
                            <span class="small_text">Story</span>
                        </span>
                    </a>
                    <div class="image">
                        <a href="<?php the_sub_field('video_link'); ?>">
                            <img src="http://placehold.it/320x180" alt="<?php the_sub_field('name'); ?>" />
                        </a>
                    </div>
                </div>
            </div>
            <?php if( get_field('story') ): ?>
                <?php while( has_sub_field('story') ): ?>
                    <div class="col-sm-6">
                        <div class="story">
                            <div class="info">
                                <a href="<?php the_sub_field('video_link'); ?>" class="inner">
                                    <span class="small_text">Watch</span>
                                    <span class="name"><?php the_sub_field('name'); ?>'s</span>
                                    <span class="small_text">Story</span>
                                </a>
                            </div>
                            <div class="image">
                                <a href="<?php the_sub_field('video_link'); ?>">
                                    <img src="<?php the_sub_field('story_image'); ?>" alt="<?php the_sub_field('name'); ?>" />
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>