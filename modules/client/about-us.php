<?php
if (!defined('_TRGIAHUY')) {
    die('Truy cập không hợp lệ');
}
$data = ['title' => 'Giới thiệu'];

layout('header', $data);
echo layout('nav');
?>


<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-title">
                <h1>Về chúng tôi</h1>
            </div>
        </div>
        <div class="row">
            <div class="about-item">
                <h2>Chào mừng bạn đến với <br> <span>HẦM RƯỢU CỦA THẰNG BỜM</span> </h2>
                <p>Tại nơi đây không chỉ nổi tiếng với những đặc sản trứ danh mà còn
                    được xem là nơi tổ chức các bữa tiệc họp mặt - liên hoan gia đình,
                    thôi nôi - đầy tháng - sinh nhật trọn gói được nhiều khách hàng tin
                    tưởng. <br>Ngoài việc thực phẩm đều là hàng chất lượng và tươi sống thì
                    bên cạnh đó nhà hàng còn có đội ngũ nhân viên chuyên nghiệp và lâu năm với nghề.
                    Đảm bảo khách hàng yên tâm và hài lòng về chất lượng đồ ăn cũng như chất lượng phục vụ.</p>

                <button class="btn"><a href="<?php echo _HOST_URL ?>?module=client&action=booking">XEM THỰC ĐƠN</a></button>

            </div>
            <div class="about-item">
                <div class="about-item-img">
                    <img src="<?php echo _HOST_URL_TEMPLATES ?>/assets/img/hinhnen.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<?php layout('footer');
