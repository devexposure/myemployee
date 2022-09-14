<?php

$host = 'localhost';
$user = 'root';
$pwd = '';
$db = 'myemployee';

$connection = mysqli_connect($host, $user, $pwd, $db);

if ($connection->connect_error) {
    die("connection failed" . $connection->connect_error);
} else {
    return;
}
