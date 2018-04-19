<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta name="article:author" content="<?php echo get_bloginfo('name');?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta itemprop="image" content=""/>
    <meta itemprop="datePublished" content=""/>
    <meta name="msvalidate.01" content="" />
    <meta property="article:published_time" content="" />
    <meta name="googlebot" content="noarchive,index,follow" />
    <meta name="robots" content="index,follow" />

    <!-- For Google -->
    <meta name="description" content="<?php echo get_bloginfo('description');?>" />
    <meta name="keywords" content="travel,du lich, tour nuoc ngoai, tour trong nuoc, hello world , keep traveling, tin tuc du lich" />
    <meta name="author" content="<?php echo get_bloginfo('name');?>" />
    <meta name="copyright" content="<?php echo get_bloginfo('name');?>" />
    <meta name="application-name" content="<?php echo get_bloginfo('name');?>" />

    <!-- For Facebook -->
    <meta property="og:description" itemprop="description" content="<?php echo get_bloginfo('description');?>" />
    <meta property="og:site_name" content="<?php echo get_bloginfo('name');?>" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo get_bloginfo('url');?>" />
    <meta property="og:title" content="<?php echo get_bloginfo('description');?>" />
    <meta property="og:image" content="http://helloworldtravel.vn/wp-content/uploads/2018/02/cropped-logo-1.png" />

    <!-- For Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php echo get_bloginfo('name');?>" />
    <meta name="twitter:description" content="<?php echo get_bloginfo('description');?>" />
    <meta name="twitter:image" content="http://helloworldtravel.vn/wp-content/uploads/2018/02/cropped-logo-1.png" />

    <link rel="canonical" href=""/>
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/vaakash/socializer/80391a50/css/socializer.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="overlay"></div>
<div class="preloader">
    <img src="<?php bloginfo('template_url') ?>/assets/images/ajax-loader.gif" alt="" />
</div>
<div id="page" class="site">
    <!--<a class="skip-link screen-reader-text" href="#content"><?php /*esc_html_e( 'Skip to content', 'travel' ); */?></a>-->

    <header id="header" class="header">
        <div class="topbar">
            <div class="container">
                <div class="topbar_info">
                    <a href="tel:0904772000" title=""><i class="fas fa-phone"></i> 0904.77.2000</a>
                    <a href="mailto:info@helloworldtravel.vn"><i class="fas fa-envelope"></i>info@helloworldtravel.vn</a>
                    <a href="" title=""><img src="<?php bloginfo('template_url') ?>/assets/images/flag-uk.png" alt="" /></a>
                </div>
            </div>
        </div>
        <div class="container header_inner">
            <div class="row">
                <div class="col-10 col-lg-3">
                    <!--Logo-->
                    <div id="logo">
		                <?php
		                the_custom_logo();
		                /*
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						*/
		                $description = get_bloginfo( 'description', 'display' );
		                if ( $description || is_customize_preview() ) : ?>
                            <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			                <?php
		                endif;
		                ?>
                    </div>
                    <!--//Logo-->
                </div>
                <div class="col-2 col-lg-9 d-flex align-items-center justify-content-end">
                    <!-- #site-navigation -->
                    <a id="navtop_icon" class="menu-toggle" rel="nofollow">
		                <?php /*esc_html_e( 'Primary Menu', 'travel' ); */?>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <div class="navtop_collapse">
                        <nav id="site-navigation" class="navigation_main">
		                    <?php
		                    wp_nav_menu( array(
			                    'theme_location' => 'menu-1',
			                    'menu_id'        => 'primary-menu',
			                    'menu_class'     => 'navtop_lst',
		                    ) );
		                    ?>
                        </nav>
                    </div>
                    <!-- //#site-navigation -->
                </div>
            </div>



        </div>
    </header><!-- #masthead -->

