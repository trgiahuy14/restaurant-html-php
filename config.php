<?php

const _TRGIAHUY = True;

// Mặc định ban đầu là dashboard/index.php
const _MODULES = 'client';
const _ACTION = 'index';

// Khai báo DB
const _HOST = 'localhost';
const _DB = 'nhahanthangbom_db';
const _USER = 'root';
const _PASS = '';
const _DRIVER = 'mysql';

// Debug error
const _DEBUG = true;

// Thiết lập host
define('_HOST_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/restaurant-html-php');
define('_HOST_URL_TEMPLATES', _HOST_URL . '/templates');

// Thiết lập path
define('_PATH_URL', __DIR__);
define('_PATH_URL_TEMPLATES', _PATH_URL . '/templates');
