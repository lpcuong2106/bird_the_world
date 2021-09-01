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

<main id="primary" class="site-main single-animal">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-12">
				<?php
				while (have_posts()) :
					the_post();
					get_template_part('pages/animal_detail');
				endwhile; // End of the loop.
				?>
			</div>
			<div class="col-md-3 d-lg-block d-none">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>


</main><!-- #main -->

<?php

get_footer();
