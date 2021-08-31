<?php
/* Template Name: Search Animal 
   Template Post Type: page
*/

get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'posts_per_page' => 8,
    'post_type' => 'animals-post',
    'paged' => $paged ?? 1
);
$query_animal = new WP_Query($args);
?>

<main id="primary" class="site-main page_search">

    <?php if ($query_animal->have_posts()) : ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <?php
                        /* Start the Loop */
                        while ($query_animal->have_posts()) :
                            $query_animal->the_post();

                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                        ?>

                            <div class="col-lg-3 col-md-4 search_section col-6">
                                <?php get_template_part('pages/components/animal_block'); ?>
                            </div>

                        <?php endwhile; ?>
                    <?php else :

                    get_template_part('template-parts/content', 'none');

                endif;

                wp_reset_postdata();
                    ?>
                    </div>
                    <div class="paginate_nav">
                        <?php wp_corenavi_table($query_animal); ?>
                    </div>
                </div>

                <div class="col-md-3 d-lg-block d-none">
                    <?php get_sidebar(); ?>
                </div>
            </div>


        </div>


</main><!-- #main -->

<?php
get_footer();
