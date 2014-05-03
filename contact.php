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
                    <div class="large_bree">Meet</div>
                    <span class="small_text">Our Team</span>
                    <p class="description">Soul Revival Church is led by Stuart Crawshaw and Matt Redmond. Both are ordained Anglican ministers with years of ministry experience behind them. They lead a talented and committed team of people who are eager to see God’s kingdom grow in the Shire, Australia and around the world.</p>
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
                                <p class="name">Stuart Crawshaw</p>
                                <span class="title">Lead Pastor</span>
                            </div>
                        </div>
                    </div>
                    <a class="btn greenDark" href="#">More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="contact_banner green">
        <?php inlcude_once('contact_banner'); ?>
    </div>
</div>


<?php get_footer(); ?>