<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Blain
 */
?>
                <div class="push"></div>
                </div><!-- .scroller-inner -->
                <footer id="colophon" class="site-footer" role="contentinfo">
                    <div class="container">
                        <div class="footer_links">
                            <div class="group">
                                <a href="<?php bloginfo('url'); ?>/get-directions">Get Directions</a>
                                <a href="<?php bloginfo('url'); ?>/what-to-expect">What to expect</a>
                                <a href="<?php bloginfo('url'); ?>/contact-us">Contact Us</a>
                            </div>
                            <div class="group small">
                                <a href="<?php bloginfo('url'); ?>/groups">Groups</a>
                                <a href="<?php bloginfo('url'); ?>/sermons">Sermons</a>
                                <a href="<?php bloginfo('url'); ?>/calendar">Calendar</a>
                            </div>
                            <div class="group medium">
                                <a href="<?php bloginfo('url'); ?>/baptism">Baptism</a>
                                <a href="<?php bloginfo('url'); ?>/pre-marriage">Pre-Marriage</a>
                                <a href="<?php bloginfo('url'); ?>/weddings">Weddings</a>
                            </div>
                            <div class="group medium">
                                <a href="<?php bloginfo('url'); ?>/blog">Blog</a>
                                <a href="<?php bloginfo('url'); ?>/berea">Berea Training</a>
                                <a href="<?php bloginfo('url'); ?>/give">Give</a>
                            </div>
                        </div>
                        <div class="follow_us">
                            <p>Follow Us</p>
                            <a class="facebook" href="https://www.facebook.com/SoulRevivalChurch" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="https://twitter.com/SR_Church" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a class="instagram" href="http://instagram.com/soulrevivalchurch" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>

                </footer><!-- #colophon -->

                <?php
                    if ( (function_exists( 'of_get_option' ) && (of_get_option('footercode1', true) != 1) ) ) {
                                echo of_get_option('footercode1', true); } ?>

                <script src="<?php bloginfo('template_directory'); ?>/js/jquery.fitvids.js"></script>
                <script src="<?php bloginfo('template_directory'); ?>/js/instafeed.js"></script>
                <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
                <?php wp_footer(); ?>

        </div><!-- .scroller -->
    </div><!-- .mp-pusher -->
</div><!-- wrapper -->
</body>
</html>