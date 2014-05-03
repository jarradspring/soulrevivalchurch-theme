<?php
/**
    Template Name: Give
 */

get_header(); ?>
<div id="give" class="page_content">
    <div class="page_header">
        <div class="container">
            <div class="inner">
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

                <div class="btn-group">
                    <a class="btn orange" href="#pray">Pray</a>
                    <a class="btn orangeMedium" href="#donate">Donate</a>
                    <a class="btn orangeDark" href="#serve">Serve</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="pray">
        <div class="container">
            <div class="inner">

                <h3 class="large_text"><?php the_field('large_text_b2'); ?></h3>
                <?php if (get_field('has_small_text_b2') != false):?>
                    <span class="small_text"><?php the_field('small_text_b2'); ?></span>
                <?php endif; ?>
                <div class="page_description"><?php the_field('description_b2'); ?></div>
                <?php if (get_field('has_button_b2') != false):?>
                    <?php if( get_field('button_b2') ): ?>
                        <?php while( has_sub_field('button_b2') ): ?>
                            <a class="btn orangeDark" href="<?php the_sub_field('button_link_b2'); ?>"><?php the_sub_field('button_text_b2'); ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif; ?>
                <form class="mailing_list" action="">
                    <div class="form-group">
                        <label for="" class="small_text">Join the Mailing List</label>
                        <div class="form_icon_group">
                            <input class="form-control" type="email" placeholder="Your Email Address"/>
                            <i class="fa fa-envelope"></i>
                        </div>

                    </div>
                    <input class="btn orangeDark btn-block" type="submit"/>
                </form>

            </div>
        </div>
    </div>
    <div class="section" id="donate">
        <div class="container">
            <div class="inner">
                <h3 class="large_text"><?php the_field('large_text_b3'); ?></h3>
                <?php if (get_field('has_small_text_b3') != false):?>
                    <span class="small_text"><?php the_field('small_text_b3'); ?></span>
                <?php endif; ?>
                <div class="page_description"><?php the_field('description_b3'); ?></div>
                <?php if (get_field('has_button_b3') != false):?>
                    <?php if( get_field('button_b3') ): ?>
                        <?php while( has_sub_field('button_b3') ): ?>
                            <a class="btn orangeDark" href="<?php the_sub_field('button_link_b3'); ?>"><?php the_sub_field('button_text_b3'); ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="row give_options">
                <div class="col-sm-4">
                    <h4 class="large_text">Give Online</h4>
                    <p class="small_text">
                        <strong>NAB account:</strong><br>
                        Soul Revival Church
                    </p>
                    <p class="small_text">
                        <strong>BSB #:</strong><br>
                        082 367
                    </p>
                    <p class="small_text">
                        <strong>ACC #:</strong><br>
                        12 357 0417
                    </p>
                </div>
                <div class="col-sm-4">
                    <h4 class="large_text">Credit Card</h4>
                    <p class="small_text">
                        You can give here using your credit card
                    </p>
                    <a class="btn orangeDark" href="#">Givenow.com.au</a>
                </div>
                <div class="col-sm-4">
                    <h4 class="large_text">Cheques</h4>
                    <p class="small_text">
                        Cheques can be made out to Soul Revival Church and posted to <br>
                        <strong>40A Flora St Kirrawee NSW 2232</strong>
                    </p>
                </div>
            </div>
            <div class="inner">
                <p><strong>An opportunity also exists at the end of our Saturday service to give generously and cheerfully.</strong></p>
            </div>
        </div>
    </div>
    <div class="section" id="serve">
        <div class="container">
            <div class="inner">
                <h3 class="large_text"><?php the_field('large_text_b4'); ?></h3>
                <?php if (get_field('has_small_text_b4') != false):?>
                    <span class="small_text"><?php the_field('small_text_b4'); ?></span>
                <?php endif; ?>
                <div class="page_description"><?php the_field('description_b4'); ?></div>
                <?php if (get_field('has_button_b4') != false):?>
                    <?php if( get_field('button_b4') ): ?>
                        <?php while( has_sub_field('button_b4') ): ?>
                            <a class="btn orange" href="<?php the_sub_field('button_link_b4'); ?>"><?php the_sub_field('button_text_b4'); ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="row service_options">
                <div class="col-md-2 hidden-sm hidden-xs"></div>
                <div class="col-sm-6 col-md-4">
                    <h4 class="large_text">Service Opportunities</h4>
                    <ul class="list-unstyled list_groups">
                        <?php if( get_field('link_l1') ): ?>
                            <?php while( has_sub_field('link_l1') ): ?>
                                <li>
                                    <?php if (get_sub_field('link_type_l1') == 'internal_link'):?>
                                        <a href="<?php the_sub_field('internal_link_l1'); ?>"><span class="small_text"><?php the_sub_field('link_text_l1'); ?></span></a>
                                    <?php endif; ?>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <p class="large_bree">Wanna get involved?</p>
                    <a class="btn orange" href="#">Let us know</a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h4 class="large_text">Training Opportunities</h4>
                    <ul class="list-unstyled list_groups">
                        <li>
                            <a href="#"><span class="small_text"><strong>Berean Youth Stream</strong>(for High Schoolers)</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="small_text">Our Gatherings</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="small_text">Our Gatherings</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="small_text">Our Gatherings</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="small_text">Our Gatherings</span></a>
                        </li>

                    </ul>
                    <a class="btn orange" href="#">Find Out More</a>
                </div>
            </div>
        </div>
    </div>

</div>


<?php get_footer(); ?>