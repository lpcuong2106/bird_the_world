<?php

/* Template Name: Contract 
   Template Post Type: page
*/


get_header();
?>

<main id="primary" class="site-main page-lienhe">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                while (have_posts()) :
                    the_post(); ?>
                    <h1 class="text-center mt-4"><?php the_title() ?></h1>
                    <div>
                        <?php the_content() ?>
                        <?= do_shortcode('[wpforms id="69" title="false"]') ?>
                    </div>
                <?php endwhile; // End of the loop.
                ?>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/d/embed?mid=137H9bhsFObSYprn4esvx9KSqE8Y" width="100%" height="480"></iframe>
            </div>
        </div>
    </div>


</main><!-- #main -->

<?php
get_footer();
