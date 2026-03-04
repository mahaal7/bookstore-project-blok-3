<?php
$dbhost = 'mariadb';
$dbname = 'bookstore';
$dbuser = 'user';
$dbpass = 'password';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    echo ''. mysqli_connect_error();
    exit();
}