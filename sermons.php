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
    </div>
</div>


<?php get_footer(); ?>