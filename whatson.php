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
                                <li>
                                    <a href="#villageGatherings"><span class="small_text">Village Gatherings</span></a>
                                </li>
                                <li>
                                    <a href="#communityGroups"><span class="small_text">Our Gatherings</span></a>
                                </li>
                                <li>
                                    <a href="#soulRevivalKids"><span class="small_text">Soul Revival Kids</span></a>
                                </li>
                                <li>
                                    <a href="#soulRevivalYouth"><span class="small_text">Soul Revival Youth</span></a>
                                </li>
                                <li>
                                    <a href="#youngAdults"><span class="small_text">Young Adults</span></a>
                                </li>
                                <li>
                                    <a href="#allAges"><span class="small_text">All Ages</span></a>
                                </li>
                                <li>
                                    <a href="#soulRevivalWorld"><span class="small_text">Soul Revival World</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="sermons block">

                        <div class="inner">
                            <p class="large_bree">Sermons</p>
                            <p class="page_description">If you’re still checking out Jesus, we want to help you to get to know Him better. If you are a Christian we want to help you grow as a disciple of Jesus. We hope these resources will help you along the way.</p>
                            <a class="btn blueDark" href="<?php bloginfo('url'); ?>/sermons">All Sermons</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="whats_on block">
                        <div class="inner">
                            <p class="large_bree">What's On</p>
                            <p class="page_description">There's lots of great things happening at Soul Revival all through the week.<br> We'd love for you to be part of it.</p>
                            <a class="btn blue" href="/sermons">View Calendar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="default blue">
                <div class="main">
                    <div class="description">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact_banner blue">
            <?php require_once('contact_banner.php'); ?>
        </div>
    </div>


<?php get_footer(); ?>