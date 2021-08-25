<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bird_the_world
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
	</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="container">
			<div class="site-branding">
				<!-- <?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
						else :
				?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
						endif;
						$bird_the_world_description = get_bloginfo('description', 'display');
						if ($bird_the_world_description || is_customize_preview()) :
				?>
				<p class="site-description"><?php echo $bird_the_world_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
											?></p>
			<?php endif; ?> -->
				<!-- remove -->

				<div class="row">
					<div class="col-md-4">
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					</div>
					<div class="col-md-8">
						<nav>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'	=> 'top-menu',
								)
							);
							?>
						</nav>
					</div>
				</div>

				<section class="intro_block" style="<?= 'background-image: url(' . get_template_directory_uri() . '/assets/img/bird_intro.png' . ')' ?>">
					<div class="row">
						<div class="col-md-6">
							<h2 class="heading_title">
								<b>Giúp bạn</b>
								<br />tìm kiếm thông tin về loài chim
							</h2>
							<form id="header_search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
								<input type="text" class="search_bird" name="s" placeholder="Tìm kiếm..." value="<?php echo get_search_query(); ?>">
								<button type="submit" class="search_bird_button" ><span class="iconify" data-icon="fluent:search-28-regular"></span></button>
							</form>
						</div>
					</div>

				</section>
		</header><!-- #masthead -->