<?php


$config = parse_ini_file('config.ini');

$lang = parse_ini_file('language/' . $config['lang'] . '.ini');

$conn = mysqli_connect('localhost', $config['db_user'], $config['db_password'], $config['db_name']);

foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
    $_POST[$key] = mysqli_real_escape_string($conn, $_POST[$key]);
}

session_start();

if (!empty($_SESSION['auth'])) {
    $auth = $_SESSION['auth'];
} else {
    $auth = false;
}

function username($user_id) {
    global $conn;

    $result = mysqli_query($conn, "select * from users where id = $user_id");
    $user = mysqli_fetch_assoc($result);

    return $user['username'];
}

function redirect($link = 'index.php') {
    header('location: ' . $link);
    exit;
}

function auth_only() {
    global $auth;

    if (!$auth) {
        redirect('login.php');
    }
}

function guest_only() {
    global $auth;

    if ($auth) {
        redirect('account.php');
    }
}
