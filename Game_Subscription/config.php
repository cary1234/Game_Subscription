<?php
/*
$host = "31.170.160.106";
$username ="a3925237_admin1";
$password = "admin1";
$database = "a3925237_game";
*/

$host = "localhost";
$username ="root";
$password = "";
$database = "game_subscription";


$db_link = mysqli_connect($host, $username, $password, $database) or die("Error " . mysqli_error($db_link));
