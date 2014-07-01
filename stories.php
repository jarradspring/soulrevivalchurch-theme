<?php
/**
    Template Name: Stories
 */

get_header(); ?>
<div id="stories" class="page_content">
    <div class="page_header">
        <div class="container">
            <div class="inner">
                <?php if (get_field('has_small_text_b1') != false):?>
                    <span class="small_text"><?php the_field('small_text_b1'); ?></span>
                <?php endif; ?>
                <h2 class="large_text"><?php the_field('large_text_b1'); ?></h2>

                <div class="page_description"><?php the_field('description_b1'); ?></div>
                <?php if (get_field('has_button_b1') != false):?>
                    <?php if( get_field('button_b1') ): ?>
                        <?php while( has_sub_field('button_b1') ): ?>
                            <a class="btn yellowDark" href="<?php the_sub_field('button_link_b1'); ?>"><?php the_sub_field('button_text_b1'); ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="story">
                    <a href="<?php the_sub_field('video_link'); ?>">
                        <span class="info">
                            <span class="inner">
                                <span class="small_text">Watch</span>
                                <span class="large_text name">Brad<?php the_sub_field('name'); ?>'s</span>
                                <span class="small_text">Story</span>
                            </span>
                        </span>
                        <span class="image">
                            <img src="http://placehold.it/320x180" alt="<?php the_sub_field('name'); ?>" />
                        </span>
                    </a>
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