<?php
/**
Template Name: Default
 */

get_header(); ?>

<div class="page_content default <?php the_field('page_colour'); ?>">
    <?php if (get_field('has_page_header_h1') != false):?>
        <div class="page_header">
            <div class="container">
                <div class="inner">
                    <h2 class="large_text"><?php the_field('large_text_h1'); ?></h2>
                    <?php if (get_field('has_small_text_h1') != false):?>
                    <span class="small_text"><?php the_field('small_text_h1'); ?></span>
                    <?php endif; ?>
                    <?php if (get_field('has_page_description_h1') != false):?>
                    <div class="page_description"><?php the_field('page_description_h1'); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="main">
        <div class="container">

            <?php if (get_field('has_page_header_h1') != true):?>
            <div class="top">
                <h2 class="large_text"><?php the_field('large_text_d1'); ?></h2>
                <?php if (get_field('has_small_text_d1') != false):?>
                    <span class="small_text"><?php the_field('small_text_d1'); ?></span>
                    <?php endif; ?>
            </div>
            <?php endif; ?>


            <div class="description">
                <?php the_field('page_content_d1'); ?>
            </div>
        </div>
    </div>

    <div class="subsection block1">
        <div class="inner">
            <h2 class="large_text">Become a friend</h2>
            <span class="small_text">Of Soul Revival Church</span>
            <div class="description">
                <p>Test</p>
            </div>
        </div>
    </div>
    <div class="subsection block2">
        <div class="inner">
            <h2 class="large_text">Become a friend</h2>
            <span class="small_text">Of Soul Revival Church</span>
            <div class="description">
                <p>Test</p>
            </div>
        </div>
    </div>
    <div class="subsection block3">
        <div class="inner">
            <h2 class="large_text">Become a friend</h2>
            <span class="small_text">Of Soul Revival Church</span>
            <div class="description">
                <p>Test</p>
            </div>
        </div>
    </div>

</div>
<div class="contact_banner <?php the_field('page_colour'); ?>">
    <?php require_once('contact_banner.php'); ?>
</div>


<?php get_footer(); ?>