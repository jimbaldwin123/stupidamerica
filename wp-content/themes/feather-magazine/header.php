<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package feather Lite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="main-container">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'feather-magazine' ); ?></a>
		<header id="site-header" role="banner">
			<div class="container clear">
				<div class="site-branding">
					<?php if (has_custom_logo()) { ?>
						<?php if( is_front_page() || is_home() || is_404() ) { ?>
							<h1 id="logo" class="image-logo" itemprop="headline">
								<?php the_custom_logo(); ?>
							</h1><!-- END #logo -->
						<?php } else { ?>
						    <h2 id="logo" class="image-logo" itemprop="headline">
								<?php the_custom_logo(); ?>
							</h2><!-- END #logo -->
						<?php } ?>
					<?php } else { ?>
						<?php if( is_front_page() || is_home() || is_404() ) { ?>
							<h1 id="logo" class="site-title" itemprop="headline">
								<a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( 'name' ); ?></a>
							</h1><!-- END #logo -->
							<div class="site-description"><?php bloginfo( 'description' ); ?></div>
						<?php } else { ?>
						    <h2 id="logo" class="site-title" itemprop="headline">
								<a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( 'name' ); ?></a>
							</h2><!-- END #logo -->
							<div class="site-description"><?php bloginfo( 'description' ); ?></div>
						<?php } ?>
					<?php } ?>
				</div><!-- .site-branding -->
                                <div class="site-branding2" style="float:right;">
                                        <?php if (has_custom_logo()) { ?>
                                                <?php if( is_front_page() || is_home() || is_404() ) { ?>
                                                        <h1 id="logo" class="image-logo" itemprop="headline">
                                                                <?php the_custom_logo(); ?>
                                                        </h1><!-- END #logo -->
                                                <?php } else { ?>
                                                    <h2 id="logo" class="image-logo" itemprop="headline">
                                                                <?php the_custom_logo(); ?>
                                                        </h2><!-- END #logo -->
                                                <?php } ?>
                                        <?php } else { ?>
                                                <?php if( is_front_page() || is_home() || is_404() ) { ?>
                                                        <h1 id="logo" class="site-title" itemprop="headline">
                                                                <a href="<?php echo esc_url(home_url()); ?>"><?php // bloginfo( 'name' ); ?></a>
                                                        </h1><!-- END #logo -->
                                                        <div class="site-description" style="color:white;">If you believe we are saying that America is stupid, or that  all Americans are stupid<br>--then you're stupid.</div>
                                                <?php } else { ?>
                                                    <h2 id="logo" class="site-title" itemprop="headline">
                                                                <a href="<?php echo esc_url(home_url()); ?>"><?php // bloginfo( 'name' ); ?></a>
                                                        </h2><!-- END #logo -->
                                                        <div class="site-description" style="color:white;">If you believe we are saying that America is stupid, or that  all Americans are stupid<br>--then you're stupid.</div>
                                                <?php } ?>
                                        <?php } ?>
                                </div><!-- .site-branding -->
				<?php dynamic_sidebar('widget-header'); ?>
			</div>
			<div class="primary-navigation">
				<a href="#" id="pull" class="toggle-mobile-menu"><?php esc_attr_e('Menu', 'feather-magazine'); ?></a>
				<div class="container clear">
					<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
						<?php if ( has_nav_menu( 'primary' ) ) { ?>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu clearfix', 'container' => '' ) ); ?>
						<?php } else { ?>
							<ul class="menu clearfix">
								<!-- <li><a href="/stupefied/">STUPEFIED!</a></li> -->
								<?php
                                    $args = [];
                                    $args['title_li'] = '';
                                    $args['exclude'] = '13';
                                    wp_list_categories($args);
                                ?>
								<li><a href="/about-us/">About us</a></li>
							</ul>
						<?php } ?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</header><!-- #masthead -->
