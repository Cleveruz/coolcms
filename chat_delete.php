<?php
require_once 'system.php';

$id = $_GET['id'];

mysqli_query($conn, "delete from chat where id = $id");

header('location: chat.php');
exit;

?>