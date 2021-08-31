<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bird_the_world
 */

get_header();

?>

<main id="primary" class="site-main page_search">

	<h1 class="page-title title_search">
		<?= str_replace("Category:", "Danh mục:", get_the_archive_title());  ?>
	</h1>
	<?php if (have_posts()) : ?>

		<div class="container">
			<div class="row">
				<div class="col-md-9">
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

						<?php endwhile; ?>
					<?php else :

					get_template_part('template-parts/content', 'none');

				endif; ?>
					</div>
					<div class="paginate_nav">
						<?php wp_corenavi_table(); ?>
					</div>
				</div>

				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>

		</div>

		</div>


</main><!-- #main -->

<?php
get_footer();
