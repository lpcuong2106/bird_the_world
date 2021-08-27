<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package bird_the_world
 */

get_header();
global $wp_query;
?>

<main id="primary" class="site-main  page_search">

	<?php if (have_posts()) : ?>
		<h1 class="page-title title_search">
			<?php
			/* translators: %s: search query. */
			printf(esc_html__('Kết quả tìm kiếm: %s', 'bird_the_world'), '<b>' . get_search_query() . '</b>');
			?>
		</h1>
		<p class="des_search">Tìm thấy <?= $wp_query->found_posts ?> kết quả</p>
		<div class="container">
			<div class="row">
				<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
				?>

					<div class="col-md-3 search_section">
						<?php get_template_part('pages/components/animal_block'); ?>

					</div>

			<?php endwhile;

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
			?>
			</div>
		</div>


</main><!-- #main -->

<?php
get_sidebar();
get_footer();
