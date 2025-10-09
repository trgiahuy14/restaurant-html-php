<?php
if (!defined('_TRGIAHUY')) {
    die('Truy cập không hợp lệ');
}
$data = ['title' => 'Thực đơn'];

layout('header', $data);
echo layout('nav');
?>

<!-- Phần menu -->
<div id="menu">
    <div class="container">
        <div class="row">
            <div class="about-title">
                <h1>Thực đơn</h1>
            </div>
        </div>
        <div class="row">

            <div id="gallery-album">



                <input type="radio" id="menuDacbiet" name="button" checked>
                <input type="radio" id="menuTiec" name="button">
                <input type="radio" id="menuMeat" name="button">
                <input type="radio" id="menuFish" name="button">
                <input type="radio" id="khac" name="button">


                <label class="tag tag1" for="menuDacbiet">Món đặc biệt</label>
                <label class="tag tag2" for="menuTiec">Menu tiệc</label>
                <label class="tag tag3" for="menuMeat">món thịt</label>
                <label class="tag tag4" for="menuFish">hải sản</label>
                <label class="tag tag5" for="khac">khác</label>
                <br>

                <div class="images">

                    <a href="./assets/img/menu/dacbiet1.jpg" data-lightbox="mygallery" data-title="Menu đặc biệt 1"><img src="./assets/img/menu/dacbiet1.jpg" class="dacbiet"></a>
                    <a href="<?php echo _HOST_URL_TEMPLATES; ?>/assets/img/menu/dacbiet2.jpg" data-lightbox="mygallery" data-title="Menu đặc biệt 2"><img src="<?php echo _HOST_URL_TEMPLATES; ?>/assets/img/menu/dacbiet2.jpg" class="dacbiet"></a>
                    <a href="<?php echo _HOST_URL_TEMPLATES; ?>/assets/img/menu/dacbiet3.jpg" data-lightbox="mygallery" data-title="Menu đặc biệt 3"><img src="<?php echo _HOST_URL_TEMPLATES; ?>/assets/img/menu/dacbiet3.jpg" class="dacbiet"></a>


                    <a href="./templates/assets/img/menu/menuTiec/5.JPG" data-lightbox="mygallery" data-title="Menu tiệc 1"><img src="./templates/assets/img/menu/menuTiec/5.JPG" class="menuTiec"></a>
                    <a href="./templates/assets/img/menu/menuTiec/3.JPG" data-lightbox="mygallery" data-title="Menu tiệc 2"><img src="./templates/assets/img/menu/menuTiec/3.JPG" class="menuTiec"></a>


                    <a href="./assets/img/menu/menuMeat/8.JPG" data-lightbox="mygallery" data-title="Menu thịt 1"><img src="./assets/img/menu/menuMeat/8.JPG" class="menuMeat"></a>
                    <a href="./assets/img/menu/menuMeat/9.JPG" data-lightbox="mygallery" data-title="Menu thịt 2"><img src="./assets/img/menu/menuMeat/9.JPG" class="menuMeat"></a>

                    <a href="./assets/img/menu/menuFish/12.JPG" data-lightbox="mygallery" data-title="Menu hải sản 1"><img src="./assets/img/menu/menuFish/12.JPG" class="menuFish"></a>
                    <a href="./assets/img/menu/menuFish/13.JPG" data-lightbox="mygallery" data-title="Menu hải sản 2"><img src="./assets/img/menu/menuFish/13.JPG" class="menuFish"></a>
                    <a href="./assets/img/menu/menuFish/16.JPG" data-lightbox="mygallery" data-title="Menu hải sản 3"><img src="./assets/img/menu/menuFish/16.JPG" class="menuFish"></a>





                    <a href="./assets/img/menu/Khac/10.JPG" data-lightbox="mygallery" data-title="các món khác"><img src="./assets/img/menu/Khac/10.JPG" class="khac"></a>
                    <a href="./assets/img/menu/Khac/11.JPG" data-lightbox="mygallery" data-title="các món khác"><img src="./assets/img/menu/Khac/11.JPG" class="khac"></a>
                    <a href="./assets/img/menu/Khac/18.JPG" data-lightbox="mygallery" data-title="các món khác"><img src="./assets/img/menu/Khac/18.JPG" class="khac"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Kết thúc phần menu -->

<?php layout('footer');
