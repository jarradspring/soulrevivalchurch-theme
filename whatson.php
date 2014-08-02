<?php
/**
    Template Name: What's On
 */

get_header(); ?>
<div id="whatson" class="page_content">
    <div class="triblock">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="block groups text-center">
                    <div class="inner">
                        <p class="large_bree">Groups</p>
                        <span class="small_text">Click to learn more</span>
                        <ul class="list-unstyled list_groups">
                            <li>
                                <a href="#Village"><span class="small_text">Our Gatherings</span></a>
                            </li>
                            <li>
                                <a href="#CommunityGroups"><span class="small_text">Community Groups</span></a>
                            </li>
                            <li>
                                <a href="#Kids"><span class="small_text">Soul Revival Kids</span></a>
                            </li>
                            <li>
                                <a href="#Youth"><span class="small_text">Soul Revival Youth</span></a>
                            </li>
                            <li>
                                <a href="#YoungAdults"><span class="small_text">Young Ages</span></a>
                            </li>
                            <li>
                                <a href="#AllAges"><span class="small_text">All Ages</span></a>
                            </li>
                            <li>
                                <a href="#World"><span class="small_text">Soul Revival World</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="sermons block">
                    <div class="inner">
                        <p class="large_bree">Sermons</p>
                        <p>We love God because He first loved us by sending His Son Jesus to die in our place for our sin. In response to His love for us He calls everyone, everywhere trust in Jesus, turn from their sin and love God with all their heart, soul, mind and strength.</p>
                        <a class="btn blueDark" href="#">All Sermons</a>
                    </div>
                </div>
                <div class="recent recent_sermons">
                    <div class="links">
                        <span class="most_recent small_text">Most Recent</span>
                        <span class="small_text title">The Death of Death</span>
                        <span class="small_text preacher hidden-md">Matt Redmond</span>
                        <div class="btn blue">Listen</div>
                    </div>
                    <div class="image">
                        <img src="http://placehold.it/160x240" alt=""/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="whats_on block">
                    <div class="inner">
                        <p class="large_bree">What's On</p>
                        <p>Jesus also calls us to love our neighbour as ourself. So, we are committed to sharing the love of Jesus person to person, generation to generation in our words and our actions.</p>
                        <a href="#" class="btn blue">View Calendar</a>
                    </div>
                </div>
                <div class="recent upcoming_events">
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
        <h2><?php echo get_the_title();?></h2>
        <div class="row">
            <?php if( get_field('sermon') ): ?>
                <?php while( has_sub_field('sermon') ): ?>
                    <div class="col-sm-6">
                        <div class="sermon">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="inner">
                                        <p class="date"><?php the_sub_field('date'); ?></p>
                                        <p class="title"><?php the_sub_field('sermon_title'); ?></p>
                                        <p class="preacher"><?php the_sub_field('preacher'); ?></p>
                                    </div>
                                    <audio src="<?php the_sub_field('audio'); ?>" preload="auto"></audio>
                                </div>
                                <div class="col-sm-4">
                                    <img src="<?php the_sub_field('series_image'); ?>" alt="<?php the_sub_field('series_title'); ?>" />
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