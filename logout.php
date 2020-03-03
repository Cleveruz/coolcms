<?php
require_once 'system.php';

unset($_SESSION['auth']);

header('location: login.php');
exit;