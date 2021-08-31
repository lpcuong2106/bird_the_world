<?php
$location_geo_map = get_field("location_geo_map");
$ten_khoa_học = get_field('ten_khoa_học');
$ten_dia_phuong = get_field('ten_dia_phuong');
$class_animal = get_field('class');
$bo_animal = get_field('bo');
$ho_animal = get_field('ho');
$nganh = get_field('nganh');
$phan_bo = get_field('phan_bo');
$sinh_canh = get_field('sinh_canh');
$dia_diem = get_field('dia_diem');
$useful = get_field('useful');
$mo_ta_dac_diem = get_field('mo_ta_dac_diem');
$tinh_trang_mau = get_field('tinh_trang_mau');
$sach_do_vn = get_field('sach_do_vn');
$bao_ton_iucn = get_field('bao_ton_iucn');
$bao_ton_cites = get_field('bao_ton_cites');

$post_categories = wp_get_post_categories(get_the_ID());
$img = get_the_post_thumbnail_url();


?>
<section class="animal_detail">
    <div class="row">
        <div class="col-md-6">
            <img src="<?= $img ? $img :  get_template_directory_uri() . '/assets/img/default_image.png' ?>" alt="img_animal" class="img_animal_feature">

        </div>
        <div class="col-md-6">
            <h1 class="animal_detail_title"><?php the_title() ?></h1>
            <blockquote class="animal_detail_sort_info">
                <p>Tên khoa học: <span><?= $ten_khoa_học ?></span></p>

                <p>Tên địa phương: <span><?= (isset($ten_dia_phuong) && $ten_dia_phuong != '') ? $ten_dia_phuong  : 'Không xác định' ?></span></p>

                <p>Giới:
                    <?php
                    foreach ($post_categories as $c) :
                        $cat = get_category($c); ?>
                        <span><a href="<?= get_category_link($cat->term_id) ?>"><?= $cat->name ?></a>, </span>
                    <?php endforeach   ?>

                </p>
                <p>Phân Bổ: <span><?= (isset($phan_bo) && $phan_bo != '') ? $phan_bo : 'Không xác định' ?></span></p>
                <p>Người thu mẫu: <span><?= get_the_author() ?></span></p>
                <p>Ngày thu mẫu: <span><?= get_the_date('d-m-Y') ?></span></p>
                <p>Tình trạng mẫu: <span><?= $tinh_trang_mau ?></span></p>
            </blockquote>
            <div class="animal_detail_share">
                <p>Chia sẻ:</p>
                <div class="fb-share-button" data-href="<?php the_permalink() ?>" data-layout="button"></div>
                <div class="zalo-share-button" data-href="<?php the_permalink() ?>" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize="false"></div>
            </div>
        </div>
    </div>

    <ul class="nav nav-tabs" id="animal_tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="Thông tin chung" aria-selected="true">Thông tin chung</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="detail-more" data-toggle="tab" href="#detail-more-tab" role="tab" aria-controls="Mô tả thêm" aria-selected="false">Mô tả thêm</a>
        </li>
    </ul>
    <div class="tab-content" id="animal_content_tab">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="info general_info">
                <div class="row">
                    <div class="col-md-6">
                        <p>Lớp: <span><?= $class_animal ?></span></p>
                        <p>Bộ: <span><?= $bo_animal ?></span></p>
                        <p>Họ: <span><?= $ho_animal ?></span></p>
                        <p>Ngành: <span><?= $nganh ?></span></p>
                        <p>Sinh cảnh: <span><?= (isset($sinh_canh) &&  $sinh_canh != '')  ?  $sinh_canh : 'Chưa xác định' ?></span></p>
                        <p>Địa điểm: <span><?= (isset($dia_diem) &&  $dia_diem != '')  ?  $dia_diem : 'Chưa xác định' ?></span></p>
                        <p>Giá trị sử dụng: <span><?= (isset($useful) && $useful != '')  ?  $useful :   'Chưa xác định' ?></span></p>
                        <p>Mô tả đặc điểm hình thái: <span><?= (isset($mo_ta_dac_diem) &&  $mo_ta_dac_diem != '')  ?   $mo_ta_dac_diem :   'Chưa xác định' ?></span></p>
                        <p>Tình trạng bảo tồn theo sách đỏ Việt Nam: <span><?= (isset($sach_do_vn) &&  $sach_do_vn != '')  ?  $sach_do_vn : 'Chưa xác định' ?></span></p>
                        <p>Tình trạng bảo tồn theo Nghị định 32/2006/NĐCP: <span><?= (isset($bao_ton_iucn) &&  $bao_ton_iucn != '')  ?  $bao_ton_iucn :  'Chưa xác định' ?></span></p>
                        <p>Tình trạng bảo tồn theo CITES (40/2013/TT-BNNPTNT): <span><?= (isset($bao_ton_cites) &&  $bao_ton_cites != '')  ?  $bao_ton_cites :  'Chưa xác định' ?></span></p>
                    </div>
                    <div class="col-md-6">
                        <p>Vị trí</p>
                        <?= do_shortcode($location_geo_map) ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="tab-pane fade" id="detail-more-tab" role="tabpanel" aria-labelledby="detail-more">
            <div class="info">
                <?php the_content() ?>
            </div>
        </div>
    </div>

</section>