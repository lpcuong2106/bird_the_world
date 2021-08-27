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
		<div <?php if (!is_home()) : ?> class="search_header_bg" style="<?= 'background-image: url(' . get_template_directory_uri() . '/assets/img/header_search.png' . ')' ?>" <?php endif ?>>
			<header id="masthead" class="container">
				<div class="site-branding">
					<div class="row" data-aos="fade-up" data-aos-offset="5" data-aos-duration="20" data-aos-easing="ease" data-aos-once="true" data-aos-easing="linear">
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
					<?php if (is_home()) : ?>
						<section class="intro_block" style="<?= 'background-image: url(' . get_template_directory_uri() . '/assets/img/bird_intro.png' . ')' ?>">
							<div class="row" data-aos="fade-up">
								<div class="col-md-6" data-aos-easing="ease" data-aos-once="true" data-aos-delay="400" data-aos-easing="linear">
									<h2 class="heading_title">
										<b>Giúp bạn</b>
										<br />tìm kiếm thông tin về loài động vật
									</h2>
									<form id="header_search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
										<input type="text" class="search_bird" name="s" placeholder="Tìm kiếm..." value="<?php echo get_search_query(); ?>">
										<input name="post_type" value="animals-post" class="hidden" />
										<button type="submit" class="search_bird_button"><span class="iconify" data-icon="fluent:search-28-regular"></span></button>
									</form>
								</div>
							</div>
						</section>
					<?php else : ?>
						<section class="search_header_form">
							<form id="header_search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
								<div class="input_cus">
									<button type="submit" class="search_animal_button">
										<span class="iconify" data-icon="ei:search"></span>
									</button>
									<input name="post_type" value="animals-post" class="hidden" />
									<input type="text" class="search_animal" name="s" placeholder="Tìm động vật..." value="<?php echo get_search_query(); ?>">
								</div>
							</form>
						</section>
					<?php endif ?>
			</header><!-- #masthead -->
		</div>