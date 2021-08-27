<section class="animal_detail">
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
            <h1 class="animal_detail_title"><?php the_title() ?></h1>
            <blockquote class="animal_detail_sort_info">
                <p>Tên khoa học: Chim</p>
                <p>Tên tiếng việt: Chi a</p>
                <p>Tên địa phương: Bò sát</p>
                <p> Giới: Chim điên bụng trắng</p>
            </blockquote>
            <div class="animal_detail_share">
                <p>Chia sẻ:</p>
                <div class="fb-share-button" data-href="<?php the_permalink() ?>" data-layout="button"></div>
                <div class="zalo-share-button" data-href="<?php the_permalink() ?>" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize="false"></div>
            </div>
        </div>
    </div>
    <div class="info">
        <?php the_content() ?>
    </div>
</section>