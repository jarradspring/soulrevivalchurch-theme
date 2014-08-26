<?php
/**
    Template Name: Jesus
 */

get_header(); ?>
<div id="jesus" class="page_content">
    <div class="triblock">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="block primary text-center">
                    <div class="inner changes_everything">
                        <span class="small_text">Jesus Changes</span>
                        <p class="large_bree">everything</p>
                        <p>Jesus commands us to love God and love others. It’s the best way to live, because it’s how we were made to live.</p>
                        <p>We also believe that Jesus Changes Everything. Because of what Jesus has done for us on the cross we can now live in reconciled relationships, with God and each other. By His Spirit, Jesus can help change our thoughts, affections and actions in order to grow in these two loves.</p>
                        <p>Jesus has changed billions of peoples lives for the better....He can change your life too.</p>
                        <a href="#" class="btn yellowMedium">More</a>
                    </div>
                    <div class="changes_lives">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="title">
                                    <div class="inner">
                                        <span class="small_text">Jesus Changes</span>
                                        <span class="large_text">Lives</span>
                                        <p>Hear some of the stories of those who come to our church and the way Jesus has given them something new</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="links">
                                    <span class="most_recent small_text">Most Recent</span>
                                    <span class="small_text">Watch Brad's Story</span>
                                    <div class="btn yellow">All Stories</div>
                                </div>
                                <div class="image">
                                    <img src="http://placehold.it/160x240" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="row">
                    <div class="col-sm-6 col-md-12">
                        <div class="love_god block">
                            <div class="inner">
                                <span class="small_text">Love</span>
                                <p class="large_bree">God</p>
                                <p>We love God because He first loved us by sending His Son Jesus to die in our place for our sin. In response to His love for us He calls everyone, everywhere trust in Jesus, turn from their sin and love God with all their heart, soul, mind and strength.</p>
                                <a class="btn yellowDark" href="#">More</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-12">
                        <div class="love_others block">
                            <div class="inner">
                                <span class="small_text">Love</span>
                                <p class="large_bree">Others</p>
                                <p>Jesus also calls us to love our neighbour as ourself. So, we are committed to sharing the love of Jesus person to person, generation to generation in our words and our actions.</p>
                                <div class="btn yellow">More</div>
                                <div class="btn yellow">Our Values</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="default yellow">
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
    <div class="contact_banner yellow">
        <?php require_once('contact_banner.php'); ?>
    </div>
</div>


<?php get_footer(); ?>