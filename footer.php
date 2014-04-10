<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Blain
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
            <div class="footer_links">
                <div class="group">
                    <a href="/index.php/get-directions">Get Directions</a>
                    <a href="/index.php/what-to-expect">What to expect</a>
                    <a href="/index.php/contact-us">Contact Us</a>
                </div>
                <div class="group">
                    <a href="/index.php/groups">Groups</a>
                    <a href="/index.php/sermons">Sermons</a>
                    <a href="/index.php/calendar">Calendar</a>
                </div>
                <div class="group">
                    <a href="/index.php/baptism">Baptism</a>
                    <a href="/index.php/pre-marriage">Pre-Marriage</a>
                    <a href="/index.php/weddings">Weddings</a>
                </div>
                <div class="group">
                    <a href="/index.php/blog">Blog</a>
                    <a href="/index.php/berea-training">Berea Training</a>
                    <a href="/index.php/give">Give</a>
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
</div><!-- #page -->

<?php		
	if ( (function_exists( 'of_get_option' ) && (of_get_option('footercode1', true) != 1) ) ) {
			 	echo of_get_option('footercode1', true); } ?>

<script src="<?php bloginfo('template_directory'); ?>/js/instafeed.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>