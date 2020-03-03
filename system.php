<?php

$config = parse_ini_file('config.ini');

$lang = parse_ini_file('language/' . $config['lang'] . '.ini');

$conn = mysqli_connect('localhost', $config['db_user'], $config['db_password'], $config['db_name']);

session_start();

if (!empty($_SESSION['auth'])) {
    $auth = $_SESSION['auth'];
} else {
    $auth = false;
}

