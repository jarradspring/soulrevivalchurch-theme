<?php
/**
    Template Name: What's On
 */

get_header(); ?>
<div id="whatson" class="page_content">
    <div class="triblock">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="block groups text-center">
                    <div class="inner">
                        <p class="large_bree">Groups</p>
                        <span class="small_text">Click to learn more</span>
                        <ul class="list-unstyled list_groups">
                            <?php if( get_field('link_l1') ): ?>
                                <?php while( has_sub_field('link_l1') ): ?>
                                    <li>
                                        <?php if (get_sub_field('link_type_l1') != 'false'):?>
                                            <a href="<?php the_sub_field('internal_link_l1'); ?>"><span class="small_text"><?php the_sub_field('link_text_l1'); ?></span></a>
                                        <?php elseif (get_sub_field('link_type_l1') == 'false'):?>
                                            <a href="<?php the_sub_field('external_link_l1'); ?>"><span class="small_text"><?php the_sub_field('link_text_l1'); ?></span></a>
                                        <?php endif; ?>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="sermons block">

                    <div class="inner">
                        <p class="large_bree"><?php the_field('large_text_b1'); ?></p>
                        <?php if (get_field('has_small_text_b1') != false):?>
                            <span class="small_text"><?php the_field('small_text_b1'); ?></span>
                        <?php endif; ?>
                        <div class="page_description"><?php the_field('description_b1'); ?></div>
                        <?php if (get_field('has_button_b1') != false):?>
                            <?php if( get_field('button_b1') ): ?>
                                <?php while( has_sub_field('button_b1') ): ?>
                                    <a class="btn blueDark" href="<?php the_sub_field('button_link_b1'); ?>"><?php the_sub_field('button_text_b1'); ?></a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="recent recent_sermons visible-lg">
                    <div class="links">
                        <span class="most_recent small_text">Featured Sermon</span>
                        <span class="small_text title">The Death of Death</span>
                        <span class="small_text preacher hidden-md">Matt Redmond</span>
                        <div class="btn blue">Listen</div>
                    </div>
                    <div class="image">
                        <img src="http://placehold.it/160x240" alt=""/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="whats_on block">
                    <div class="inner">
                        <p class="large_bree"><?php the_field('large_text_b2'); ?></p>
                        <?php if (get_field('has_small_text_b2') != false):?>
                            <span class="small_text"><?php the_field('small_text_b2'); ?></span>
                        <?php endif; ?>
                        <div class="page_description"><?php the_field('description_b2'); ?></div>
                        <?php if (get_field('has_button_b2') != false):?>
                            <?php if( get_field('button_b2') ): ?>
                                <?php while( has_sub_field('button_b2') ): ?>
                                    <a class="btn blue" href="<?php the_sub_field('button_link_b2'); ?>"><?php the_sub_field('button_text_b2'); ?></a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="recent upcoming_events visible-lg">
                    <div class="links">
                        <span class="most_recent small_text">Upcoming Events</span>
                        <span class="small_text date">Sep 8</span>
                        <span class="small_text preacher">Table Tennis Tournament</span>
                    </div>
                    <div class="image">
                        <img src="http://placehold.it/160x240" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="description">
            <?php the_field('page_content_p1'); ?>
        </div>
    </div>
    <div class="contact_banner blue">
        <?php require_once('contact_banner.php'); ?>
    </div>
</div>


<?php get_footer(); ?>