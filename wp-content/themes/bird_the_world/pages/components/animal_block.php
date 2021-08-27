<div class="animal">
    <img src="<?= get_template_directory_uri() . '/assets/img/bird_step.png' ?>" alt="">
    <div class="animal_info">
        <div class="animal_info__title">
            <b><?php the_title() ?></b>
            <p><?php the_excerpt() ?></p>
        </div>
        <div class="animal_info_des">
            <p><?php the_excerpt() ?></p>
            <a href="<?php the_permalink() ?>">Xem thêm</a>
        </div>
    </div>
</div>