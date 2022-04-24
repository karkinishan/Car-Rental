<?php
session_start();
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "car_rental";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
