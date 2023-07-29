<?php
require 'rb.php';

$servername = "localhost";
$database = "php4v2";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

R::setup('mysql:host=' . $servername . ';dbname=' . $database . '', '' . $username . '', '' . $password . '');

$conn->set_charset("utf8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
