<?php
require_once 'system.php';

auth_only();

$id = $_GET['id'];

$result = mysqli_query($conn, "select * from chat where id = $id");
$post = mysqli_fetch_assoc($result);

if ($post['user_id'] == $auth['id']) {
    mysqli_query($conn, "delete from chat where id = $id");
}

redirect('chat.php');