<section class="container home-page">
    <div class="row">
        <div class="col-lg-6 col-12 d-lg-block d-none">
            <img src="<?= get_template_directory_uri() . '/assets/img/bird_step.png' ?>" style="margin-left: -28px;" data-aos="fade-down-right" data-aos-once="true" />
        </div>
        <div class="col-lg-6 col-12">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-once="true">
                <h3 class="home-page_direct_step"><b>Các bước</b> thực hiện</h3>
                <p class="home-page_direct_des">Hướng dẫn các thao tác tìm kiếm động vật</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-6" data-aos="fade-up" data-aos-delay="50" data-aos-once="true">
                    <div class="step-one">
                        <div class="step-one_icon">
                            <span class="iconify" data-icon="fe:search"></span>
                        </div>
                        <b>Bước 1</b>
                        <p>Nhập tên động vật muốn tìm kiếm</p>
                    </div>
                </div>
                <div class="col-md-6 col-6" data-aos="fade-up" data-aos-delay="50" data-aos-once="true">
                    <div class="step-one">
                        <div class="step-one_icon">
                            <span class="iconify" data-icon="bi:check-square"></span>
                        </div>
                        <b>Bước 2</b>
                        <p>Tìm đúng động vật bạn muốn tra cứu</p>
                    </div>
                </div>
                <div class="col-md-6 col-6" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
                    <div class="step-one">
                        <div class="step-one_icon">
                            <span class="iconify" data-icon="bx:bx-book"></span>
                        </div>
                        <b>Bước 3</b>
                        <p>Kiểm tra thông tin liên quan đến động vật</p>
                    </div>
                </div>
                <div class="col-md-6 col-6" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
                    <div class="step-one">
                        <div class="step-one_icon">
                            <span class="iconify" data-icon="clarity:repeat-line"></span>
                        </div>
                        <b>Lặp lại</b>
                        <p>Lặp lại các thao tác trên</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$query_hot_animal = new WP_Query([
    'post_type'     => 'animals-post',
    'posts_per_page' => 6,
    'orderby' => 'date',
    'order'   => 'DESC',
    'suppress_filters' => true
]);
?>
<section class="list_animal">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
            <?php while ($query_hot_animal->have_posts()) : $query_hot_animal->the_post()  ?>
                <div class="col-md-4 col-sm-6 col-6">
                    <?php get_template_part('pages/components/animal_block'); ?>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>

        </div>
    </div>
</section>