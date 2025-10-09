<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();
ob_start();

// Load file .env
$env = parse_ini_file(__DIR__ . '/.env');
foreach ($env as $key => $value) {
    putenv("$key=$value");
}

require_once './config.php';
require_once './includes/connect.php';
require_once './includes/database.php';
// require_once './includes/session.php';

// Email
// require_once './includes/mailer/Exception.php';
// require_once './includes/mailer/PHPMailer.php';
// require_once './includes/mailer/SMTP.php';


require_once './includes/functions.php';


// Mặc định là module dashboard, action là file index.php (chỉnh trong config.php)
$module = _MODULES;
$action = _ACTION;


// Lấy path
if (!empty($_GET['module'])) {
    $module = $_GET['module'];
}

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// Tạo đường dẫn
$path = 'modules/' . $module . '/' . $action . '.php';
// echo $path;
if (!empty($path)) {
    if (file_exists($path)) {
        require_once $path;
    } else {
        require './modules/errors/404.php';
    }
} else {
    require './modules/errors/500.php';
}
