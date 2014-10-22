<?php
/**
    Template Name: Berea
 */

get_header(); ?>
<div id="berea" class="page_content">
    <div class="page_header">
        <div class="container">
            <div class="inner">

                <h2 class="large_text">Berea</h2>
                <span class="small_text">Training for a lifetime of ministry</span>
                <p class="page_description">We’re really excited about Berea as our own local church training program for every member of our church.</p>
                <p class="page_description">As a church, we believe that Jesus calls us to love God and love others. Because Jesus changes everything, he can change our thoughts, affections and actions in order to grow in these two loves.</p>
                <p class="page_description">We want to grow in our love for Christ, grow in our discipleship of each other and grow in our mission to the lost. And Berea is set up to equip us for this task. Do you want to grow in your skills for sharing the love of Jesus person to person and generation to generation? Berea offers great local church training in the Bible, ministry ideas and practical skills.</p>
            </div>
        </div>
    </div>
    <div class="section" id="pathways">
        <div class="container">
            <div class="inner">
                <h3 class="large_text">Berea Training Pathways</h3>
                <p>Because we’re all different, Berea has a number of different pathways to accommodate all our members at whichever age or stage of life you  are in. There’s Berea for kids, youth, school leavers, younger adults, adults, and retirees.
                    We’ve also got a number of different ways to be trained; from casual conversations, project team training, seasonal lectures, and internships. Whoever you are, whether you’re checking out Jesus or been a Christian for decades, whether you’re in a ministry team or an occasional visitor to Soul Revival, whether you’re thinking about going into full time ministry, or just want to ask some basic questions about Jesus; Berea is our way to help all of us grow. There are four main pathways: </p>
            </div>
        </div>
    </div>
    <div class="section" id="pathwayOptions">
        <div class="row blockPadding">
            <div class="col-sm-6 col-md-3">
                <div class="item youth">
                    <p class="large_text">Berea Youth Team</p>
                    <div class="small_text">For High Schoolers</div>
                    <a class="btn" href="#">More Info</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="item foundations">
                    <p class="large_text">Foundations Internship</p>
                    <div class="small_text">For High Schoolers</div>
                    <a class="btn" href="#">More Info</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="item pastors">
                    <p class="large_text">Pastors in Training Internship</p>
                    <div class="small_text">For High Schoolers</div>
                    <a class="btn" href="#">More Info</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="item ministry">
                    <p class="large_text">Ministry For Life</p>
                    <div class="small_text">For High Schoolers</div>
                    <a class="btn" href="#">More Info</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="register">
        <div class="container">
            <div class="inner">
                <h3 class="large_text">Wanna Join?</h3>
                <p class="small_text">
                    Please take a moment to fill in this form and we will get your Berea application started for you:
                </p>
            </div>
            <form action="">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="">First Name</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="">First Name</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6 date_of_birth">
                        <label for="">Date Of Birth</label>
                        <div class="row">
                            <div class="col-sm-4">
                                <input class="form-control" type="text" placeholder="DD">
                            </div>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" placeholder="MM">
                            </div>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" placeholder="YYYY">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inner">
                    <p class="small_text">Which Stream Suits You?</p>
                    <p>Beacause we are all different, Soul Revival offers different Berea Streams. The Berea Youth Team is for high schoolers, the Internship is for young adults, Ministry for Life Stream is for adults and Pastors in Training Stream is for anyone contemplating paid ministry in Australia or overseas.</p>
                    <div class="radio_group">
                        <label for="" class="radio"><input type="radio"> Berea Youth Team (for high schoolers)</label>
                        <label for="" class="radio"><input type="radio"> Berea Youth Team (for high schoolers)</label>
                        <label for="" class="radio"><input type="radio"> Berea Youth Team (for high schoolers)</label>
                        <label for="" class="radio"><input type="radio"> Berea Youth Team (for high schoolers)</label>
                    </div>
                </div>
                <div class="inner">
                    <p class="small_text">Tell us a bit about yourself</p>
                    <p>We would love to get to know you a little and hear how you came to be a Christian.</p>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="">What is your story?</label>
                        <textarea class="form-control" name="" id="" rows="5"></textarea>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="">Why would you like to learn with Berea?</label>
                        <textarea class="form-control" name="" id="" rows="5"></textarea>
                    </div>
                </div>
                <div class="inner submit_area">
                    <button class="btn green">Submit</button>
                </div>

            </form>

        </div>
    </div>
    <div class="contact_banner green">
        <?php require_once('contact_banner.php'); ?>
    </div>
</div>


<?php get_footer(); ?>