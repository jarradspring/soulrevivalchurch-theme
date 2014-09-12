<?php
/**
    Template Name: Stories
 */

get_header(); ?>
<div id="stories" class="page_content">
    <div class="page_header">
        <div class="container">
            <div class="inner">
                <div class="small_text">Jesus Changes</div>
                <div class="large_text">Lives</div>
                <div class="page_description">
                    <p>Watch are some of the stories of those who come to Soul Revival &amp; see the ways Jesus has given them something new.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <?php if( get_field('story') ): ?>
            <?php while( has_sub_field('story') ): ?>
                <div class="col-sm-6">
                    <div class="story">
                        <a href="#" data-toggle="modal" data-target="#<?php the_sub_field('story_name'); ?>">
                            <span class="info">
                                <span class="inner">
                                    <span class="small_text">Watch</span>
                                    <span class="large_text name"><?php the_sub_field('story_name'); ?>'s</span>
                                    <span class="small_text">Story</span>
                                </span>
                            </span>
                            <span class="image">
                                <img src="<?php the_sub_field('story_image'); ?>" alt="<?php the_sub_field('story_name'); ?>" />
                            </span>
                        </a>
                        <div class="modal fade yellow video_modal" id="<?php the_sub_field('story_name'); ?>">
                            <div class="modal-dialog">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <div class="video_area_responsive">
                                    <?php the_sub_field('video_link'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>