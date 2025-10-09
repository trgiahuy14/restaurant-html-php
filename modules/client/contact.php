<?php
if (!defined('_TRGIAHUY')) {
    die('Truy cập không hợp lệ');
}
$data = ['title' => 'Liên hệ'];

layout('header', $data);
echo layout('nav');
?>

<!-- Phần liên hệ -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="about-title">
                <h1>LIÊN HỆ</h1>
            </div>
        </div>

        <div class="row">
            <div class="about-item">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15675.064451962726!2d106.6088027395508!3d10.829202600000025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f9f88b9211f%3A0x8b3788bae6617c77!2zTmjDoCBIw6BuZyBI4bqnbSBSxrDhu6N1IFRo4bqxbmcgQuG7nW0!5e0!3m2!1svi!2s!4v1668078078709!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="about-item">
                <p>NHÀ HÀNG THẰNG BỜM <br>
                    <i class="ti-location-pin"></i> - 85 Nguyễn Văn Quá, Quận 12, TP.Hồ Chí Minh<br>

                    <i class="ti-mobile"></i> - Điện thoại: 0902 905 919 <br>

                    <i class="ti-email"></i> - hamruouthangbom@gmail.com <br>

                    <i class="ti-timer"></i> - 09:00 - 23:00 tất cả các ngày ( kể cả ngày lễ )
                </p>
                <ul class="socialmedia">

                    <li><a href="https://www.instagram.com/trdaa.huy/"><i class="ti-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=100087332216216"><i class="ti-facebook"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCVulOwP88j42tL7WjTu5sFQ"><i class="ti-youtube"></i></a></li>
                </ul>
            </div>
        </div>


    </div>
</div>
<!-- Kết thúc phần liên hệ -->

<?php layout('footer');
