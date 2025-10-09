<?php
if (!defined('_TRGIAHUY')) {
    die('Truy cập không hợp lệ');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title'] ?></title>
    <link rel="stylesheet" href="<?php echo _HOST_URL_TEMPLATES; ?>/assets/css/style.css">
    <script src="<?php echo _HOST_URL_TEMPLATES; ?>/assets/js/main.js"></script>

    <!-- Plugin để xem ảnh gallery -->
    <link href="<?php echo _HOST_URL_TEMPLATES; ?>/assets/js/node_modules/lightbox2/dist/css/lightbox.min.css" rel="stylesheet" />


    <!-- Plugin calendar chọn ngày giờ - cho chức năng booking -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>