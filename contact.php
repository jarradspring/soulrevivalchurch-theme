<?php
/**
    Template Name: Contact
 */

get_header(); ?>
<div id="contact" class="page_content blockPadding">
    <div class="row top_block">
        <div class="col-sm-12 col-md-6">
            <div class="contact_our_team">
                <div class="inner ">
                    <h2 class="large_text"><?php the_field('large_text_b1'); ?></h2>
                    <?php if (get_field('has_small_text_b1') != false):?>
                    <span class="small_text"><?php the_field('small_text_b1'); ?></span>
                    <?php endif; ?>
                    <div class="page_description"><?php the_field('description_b1'); ?></div>
                    <?php if (get_field('has_button_b1') != false):?>
                    <?php if( get_field('button_b1') ): ?>
                        <?php while( has_sub_field('button_b1') ): ?>
                            <a class="btn orange" href="<?php the_sub_field('button_link_b1'); ?>"><?php the_sub_field('button_text_b1'); ?></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <h2 class="large_bree">Contact</h2>
                    <span class="small_text">Our Team</span>

                    <form action="">
                        <div class="form-group">
                            <label for="">Name *</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Email *</label>
                            <input class="form-control" type="email">
                        </div>
                        <div class="form-group">
                            <label for="">Contact Number *</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Message *</label>
                            <textarea class="form-control" row="8"></textarea>
                        </div>
                        <input class="btn greenDark submit" type="submit" value="Send Message">
                    </form>
                </div>
            </div>

        </div>
        <div class="col-sm-12 col-md-6">
            <div class="meet_our_team">
                <div class="inner">
                    <h2 class="large_bree"><?php the_field('large_text_b2'); ?></h2>
                    <?php if (get_field('has_small_text_b2') != false):?>
                    <span class="small_text"><?php the_field('small_text_b2'); ?></span>
                    <?php endif; ?>
                    <div class="page_description"><?php the_field('description_b2'); ?></div>
                    <?php if (get_field('has_button_b2') != false):?>
                    <?php if( get_field('button_b2') ): ?>
                        <?php while( has_sub_field('button_b2') ): ?>
                            <a class="btn orange" href="<?php the_sub_field('button_link_b2'); ?>"><?php the_sub_field('button_text_b2'); ?></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <div class="large_bree">Meet</div>
                    <span class="small_text">Our Team</span>
                    <p class="">Soul Revival Church is led by Stuart Crawshaw and Matt Redmond. Both are ordained Anglican ministers with years of ministry experience behind them. They lead a talented and committed team of people who are eager to see God’s kingdom grow in the Shire, Australia and around the world.</p>
                    <div class="row team">
                        <div class="col-xs-6">
                            <div class="item pastor">
                                <img src="http://placehold.it/167x221" alt="">
                                <p class="name">Stuart Crawshaw</p>
                                <span class="title">Lead Pastor</span>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="item pastor">
                                <img src="http://placehold.it/167x221" alt="">
                                <p class="name">Matt Redmond</p>
                                <span class="title">Pastor</span>
                            </div>
                        </div>
                    </div>
                    <a class="btn greenDark" href="#">More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="contact_banner green">
        <?php inlcude('contact_banner'); ?>
    </div>
    
</div>


<?php get_footer(); ?>