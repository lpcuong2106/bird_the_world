<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bird_the_world
 */

?>

<footer id="colophon" class="site-footer footer_main">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h6 class="footer_title">LIÊN HỆ</h6>
				<p><?= get_bloginfo('description') ?></p>
				<div class="info_footer">
					<div class="info_footer_item">
						<span class="iconify" data-icon="carbon:location"></span>
						<p>Ladeco Building, 266 Doi Can Street, Hà Nội, Vietnam</p>
					</div>
					<div class="info_footer_item">
						<span class="iconify" data-icon="fluent:mail-20-regular"></span>
						<p><?= get_bloginfo('admin_email') ?></p>
					</div>

				</div>
			</div>
			<div class="col-md-4">
				<h6 class="footer_title">DANH MỤC</h6>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'	=> 'footer-menu',
					)
				);
				?>
			</div>
			<div class="col-md-4">
				<h6 class="footer_title">HÌNH ẢNH ĐỆP VỀ ĐỘNG VẬT</h6>

				<div class="row img_footer">
					<div class="col-md-6">
						<img src="<?= get_template_directory_uri() . '/assets/img/bird_footer.png' ?>" alt="">
					</div>
					<div class="col-md-6">
						<img src="<?= get_template_directory_uri() . '/assets/img/bird_footer.png' ?>" alt="">
					</div>
					<div class="col-md-6">
						<img src="<?= get_template_directory_uri() . '/assets/img/bird_footer.png' ?>" alt="">
					</div>
					<div class="col-md-6">
						<img src="<?= get_template_directory_uri() . '/assets/img/bird_footer.png' ?>" alt="">
					</div>

				</div>

			</div>

		</div>

	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	AOS.init();
</script>

</body>

</html>