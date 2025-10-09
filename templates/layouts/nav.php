<?php
if (!defined('_TRGIAHUY')) {
    die('Truy cập không hợp lệ');
}
?>

<!-- Phần header -->

<body>

    <div id="main">


        <!-- Messenger Plugin chat Code -->
        <div id="fb-root"></div>

        <!-- Your Plugin chat code -->
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>
        <nav>
            <div id="header">
                <div class="menu">
                    <div class="logo">
                        <a href="/"><img src="<?php echo _HOST_URL_TEMPLATES; ?>/assets/img/logo.png" alt="Logo"></a>
                    </div>
                    <ul id="nav">
                        <li><a class="<?php echo current_active('index') ?>" href="<?php echo _HOST_URL ?>?module=client&action=index">TRANG CHỦ</a></li>

                        <li><a class="<?php current_active('about-us') ?>" href="<?php echo _HOST_URL ?>?module=client&action=about-us">GIỚI THIỆU</a></li>
                        <li><a class="<?php current_active('menu') ?>" href="<?php echo _HOST_URL ?>?module=client&action=menu">THỰC ĐƠN</a></li>
                        <li><a class="<?php current_active('booking') ?>" href="<?php echo _HOST_URL ?>?module=client&action=booking">ĐẶT BÀN</a></li>
                        <li><a class="<?php current_active('contact') ?>" href="<?php echo _HOST_URL ?>?module=client&action=contact">LIÊN HỆ </a></li>
                    </ul>
                </div>


            </div>
        </nav>