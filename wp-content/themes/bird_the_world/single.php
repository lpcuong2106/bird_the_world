<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bird_the_world
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php
				while (have_posts()) :
					the_post();
					get_template_part('pages/components/animal_block');
				endwhile; // End of the loop.
				?>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>


</main><!-- #main -->

<?php

get_footer();
