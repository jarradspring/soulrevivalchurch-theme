<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Blain
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="<?php bloginfo('template_directory'); ?>/less/bootstrap.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('template_directory'); ?>/less/style.less" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/less/component.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory'); ?>/js/audiojs/audio.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/pushmenu/classie.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/pushmenu/mlpushmenu.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
    <div class="mp-pusher" id="mp-pusher">
        <nav id="mp-menu" class="mp-menu">
            <div class="mp-level">
                <ul>
                    <li><a href="#"><span class="big">Jesus</span><span class="small_text">Changes Everything</span></a></li>
                    <li><a href="#"><span class="big">I'm New</span><span class="small_text">Come | Stay | Grow</span></a></li>
                    <li><a href="#"><span class="big">Connect</span><span class="small_text">Groups | Sermons | What's On</span></a></li>
                    <li><a href="#"><span class="big">Give</span><span class="small_text">Pray | Donate | Serve</span></a></li>
                    <li><a href="#"><span class="big">Contact</span><span class="small_text">Our Team</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="scroller"><!-- this is for emulating position fixed of the nav -->
            <div class="scroller-inner">

            <?php do_action( 'before' ); ?>

            <div id="site-navigation" class="navbar navbar-default main-navigation" role="navigation">

                <div class="navbar-header">
                    <button type="button" id="trigger" class="navbar-toggle menu-trigger">
                      <span class="sr-only">Toggle navigation</span>
                      <i class="fa fa-bars"></i>
                    </button>
                    <div class="navbar-brand">
                        <a href="<?php echo home_url(); ?>/"><h1>Soul<span>Revival</span>Church</h1></a>
                    </div>
                </div>

            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
            </div><!-- #site-navigation -->

    <script>
        new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
    </script>