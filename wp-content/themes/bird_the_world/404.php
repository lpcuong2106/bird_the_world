<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bird_the_world
 */

get_header();
?>

<main id="primary" class="site-main page_404 container">
	<div class="row">
		<img src="<?= get_template_directory_uri() . '/assets/img/404_icon.svg' ?>" alt="">
	</div>

</main><!-- #main -->

<?php
get_footer();
