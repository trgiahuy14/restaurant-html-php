<?php
if (!defined('_TRGIAHUY')) {
    die('Truy cập không hợp lệ');
}
$data = ['title' => 'Trang chủ'];

layout('header', $data);
echo layout('nav'); ?>


<!-- Phần slider -->

<div id="slider" style="
  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
  url('<?php echo _HOST_URL_TEMPLATES ?>/assets/img/hinhnen.jpg') bottom center / cover no-repeat;
  position: relative;">



    <div class="slider-content">
        <h1 class="slider-content-heading">NHÀ HÀNG THẰNG BỜM</h1>
        <p class="slider-content-description">Với không gian sân vườn thoáng mát ,
            rộng rãi . Món ăn đa dạng , phong phú , giá cả phù hợp
            <br> thích hợp tổ chức tiệc liên hoan , sinh nhật.
        </p>
        <div>
            <button class="btn"> <a href="<?php echo _HOST_URL ?>?module=client&action=menu">XEM MENU</a></button>
            <button class="btn"><a href="<?php echo _HOST_URL ?>?module=client&action=booking">ĐẶT BÀN NGAY</a></button>
        </div>


    </div>
</div>
<!-- Kết thúc phần slider -->
<?php layout('footer');
