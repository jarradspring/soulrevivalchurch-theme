<?php
/**
 * Template Name: Home
 */

get_header(); ?>
<div id="home" class="main_content">
    <div class="triblock">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div id="homeCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php if( get_field('slide') ): ?>
                            <?php while( has_sub_field('slide') ): ?>
                                <!-- Wrapper for slides -->
<<<<<<< HEAD:home.php
<<<<<<< HEAD:front-page.php
                                <div class="item <?php if (!$isFirstElementActive) { $isFirstElementActive = true; echo " active "; } ?>">
                                    <img src="<?php the_sub_field('slider_image'); ?>" alt="<?php the_sub_field('alternative_image_text'); ?>" />
=======
                                <div class="item active">
                                    <img src="<?php the_sub_field('image'); ?>" alt="" />
                                    <?php if (get_field('has_small_text_b1') != false):?>
                                    <span class="small_text"><?php the_field('small_text_b1'); ?></span>
                                    <?php endif; ?>
>>>>>>> parent of e646d79... Merge branch 'master' of https://github.com/jarradspring/soulrevivalchurch-theme:home.php
=======
<<<<<<< HEAD:home.php
                                <div class="item active">
                                    <img src="<?php the_sub_field('image'); ?>" alt="" />
                                    <?php if (get_field('has_small_text_b1') != false):?>
                                    <span class="small_text"><?php the_field('small_text_b1'); ?></span>
                                    <?php endif; ?>
=======
                                <div class="item <?php if (!$isFirstElementActive) { $isFirstElementActive = true; echo " active "; } ?>">
                                    <img src="<?php the_sub_field('slider_image'); ?>" alt="<?php the_sub_field('alternative_image_text'); ?>" />
>>>>>>> FETCH_HEAD:front-page.php
>>>>>>> parent of a3f9de8... Added the visit modal:front-page.php
                                    <div class="carousel-caption">
                                        <?php the_sub_field('caption'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#homeCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#homeCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="row">
                    <div class="col-sm-6 col-md-12">
                        <div class="visit block">
                            <h2>Saturdays <span>5:00PM</span></h2>
                            <span class="small_text">40a Flora Street, Kirrawee</span>
<<<<<<< HEAD:front-page.php
                            <a class="btn yellow" href="#" data-toggle="modal" data-target="#visitModal">I want to visit</a>
<<<<<<< HEAD:home.php
                            <?php require_once('visit-modal.php'); ?>
=======
                            <a class="btn yellow" href="#">I want to visit</a>
>>>>>>> parent of e646d79... Merge branch 'master' of https://github.com/jarradspring/soulrevivalchurch-theme:home.php
=======
>>>>>>> parent of a3f9de8... Added the visit modal:front-page.php
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-12">
                        <div class="jesus_changes block">
                            <span class="small_text">Jesus changes</span>
                            <h2>Everything</h2>
                            <div class="btn yellowMedium">Find out more</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section differently">
        <div class="text-center">
            <p class="small_text">You might find that we do things</p>
            <p class="large_text">A Little Differently</p>
            <p class="small_text">At Soul Revival Church</p>
        </div>
    </div>
    <div class="section different_features">
        <div class="row">
            <div class="col-sm-4">
                <div class="factory block">
                    <p class="option">Firstly</p>
                    <p class="small_text">We meet in a</p>
                    <p class="large_text">Factory</p>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/factory-icon.png" alt="Our Factory">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="saturday block">
                    <p class="option">Secondly</p>
                    <p class="small_text">On a Saturday</p>
                    <p class="large_text">Night</p>
                    <i class="fa fa-moon-o"></i>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="dinner block">
                    <p class="option">Thirdly</p>
                    <p class="small_text">We share dinner</p>
                    <p class="large_text">Every Week</p>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/factory-icon.png" alt="Our Factory">
                </div>
            </div>
        </div>
    </div>
    <div class="section night_format">
        <div class="container">
            <p class="small_text">Each night looks a little bit like this</p>
            <div class="clock">
                <span><i class="fa fa-clock-o"></i></span>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <p class="time">5:00<span>PM</span>-5:30<span>PM</span></p>
                    <div class="large_text">Coffee</div>
                </div>
                <div class="col-sm-2">
                    <p class="time">5:00<span>PM</span>-6:30<span>PM</span></p>
                    <div class="large_text">Kids</div>
                </div>
                <div class="col-sm-2">
                    <p class="time">5:30<span>PM</span>-6:30<span>PM</span></p>
                    <div class="large_text">Service</div>
                </div>
                <div class="col-sm-2">
                    <p class="time">6:30<span>PM</span>-7:30<span>PM</span></p>
                    <div class="large_text">Coffee</div>
                </div>
                <div class="col-sm-2">
                    <p class="time">7:30<span>PM</span>-Late</p>
                    <div class="large_text">Party</div>
                </div>
            </div>
            <a class="btn red" href="/im-new">Find Out More</a>
        </div>
    </div>
    <div class="section instagram_feed">
        <div class="container">
            <div class="top text-center">
                <p class="small_text">So what's been</p>
                <p class="large_bree">happening</p>
                <p class="small_text">in our community?</p>
            </div>
            <div class="row instagram_section">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="empty"></div>
                            <div id="image0" class="image"></div>
                        </div>
                        <div class="col-sm-6">
                            <div id="image1" class="image large"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div id="image9" class="image"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="empty"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="empty"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div id="image10" class="image"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div id="image2" class="image"></div>
                            <div class="empty"></div>
                            <div id="image11" class="image"></div>
                            <div class="empty"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="empty"></div>
                                    <div id="image3" class="image"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div id="image4" class="image"></div>
                                    <div id="image5" class="image"></div>
                                </div>
                            </div>
                            <div id="image12" class="image large"></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div id="image6" class="image"></div>
                                    <div class="empty"></div>
                                    <div id="image13" class="image"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="empty"></div>
                                    <div id="image7" class="image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn blue" href="/whats-on">See More</a>
        </div>
    </div>

</div>


<?php get_footer(); ?>