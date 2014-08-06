<?php
/**
    Template Name: Sermons
 */

get_header(); ?>
<div class="sermons">
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
        <div id="homeCarousel" class="carousel slide" data-ride="carousel">
            <?php if( get_field('slide_group') ): ?>
                <div class="carousel-inner">

                    <?php $isFirstElementActive = false; ?>
                    <?php while( has_sub_field('slide_group') ): ?>
                        <!-- Wrapper for slides -->
                        <div class="item <?php if (!$isFirstElementActive) { $isFirstElementActive = true; echo " active "; } ?>">
                            <img src="<?php the_sub_field('slider_image'); ?>" alt="<?php the_sub_field('alternative_image_text'); ?>" />
                            <div class="carousel-caption">
                                <?php the_sub_field('slide_caption'); ?>
                            </div>
                        </div>
                    <?php endwhile;  $isFirstElementActive = false;?>

                </div>
            <?php endif; ?>
            <!-- Controls -->
            <a class="left carousel-control" href="#homeCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right carousel-control" href="#homeCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>


<?php get_footer(); ?>