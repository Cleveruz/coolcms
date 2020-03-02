<?php

$config = parse_ini_file('config.ini');

$conn = mysqli_connect('localhost', $config['db_user'], $config['db_password'], $config['db_name']);

