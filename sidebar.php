<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Blain
 */
?>
<div class="subsection block1">
    <div class="inner">
        <div id="secondary" class="widget-area" role="complementary">
            <?php do_action( 'before_sidebar' ); ?>
            <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

            <?php endif; // end sidebar widget area ?>
        </div><!-- #secondary -->
    </div>
</div>
