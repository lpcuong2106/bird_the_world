<?php
$img = get_the_post_thumbnail_url();

?>
<div class="animal">
    <img src="<?= $img ? $img :  get_template_directory_uri() . '/assets/img/default_image.png' ?>" alt="" class="animated-background">

    <div class="animal_info">
        <div class="animal_info__title">
            <b><?php the_title() ?></b>
            <?php $ten_khoa_học = get_field('ten_khoa_học'); ?>
            <p><?= (strlen($ten_khoa_học) > 30) ? substr($ten_khoa_học, 0, 30) . '...' : $ten_khoa_học ?></p>
        </div>
        <div class="animal_info_des">
            <a href="<?php the_permalink() ?>">Xem thêm</a>
        </div>
    </div>
</div>