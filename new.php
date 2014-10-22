<?php
/**
    Template Name: New
 */

get_header(); ?>
<div id="new" class="page_content">
    <div class="triblock">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="block primary text-center">
                    <img src="">
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="block text-center">
                    <div class="inner">
                        <p class="large_bree">Come</p>
                        <p class="page_description">We are based in Kirrawee and meeting in a factory we've converted.</p>
                        <a class="btn redDark" href="#expect">Learn More</a>
                        <a class="btn redDark" href="<?php bloginfo('url'); ?>/visit">I Want To Visit</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="block text-center stay">
                <div class="inner">
                    <p class="large_bree">Stay</p>
                    <p class="page_description">We love spending time in community. Each night we share a meal after the service and if it's your first week dinner is free!</p>
                    <a class="btn redDark" href="<?php bloginfo('url'); ?>/visit">I Want To Visit</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="block text-center grow">
                <div class="inner">
                    <p class="large_bree">Grow</p>
                    <p class="page_description">There are plenty of opportunities to grow. We have tonnes of opportunities to serve. So if you want to learn about what we stand for...</p>
                    <a class="btn redDark" href="<?php bloginfo('url'); ?>/visit">">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="default red">
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
    <div class="contact_banner red">
        <?php require_once('contact_banner.php'); ?>
    </div>
</div>


<?php get_footer(); ?>