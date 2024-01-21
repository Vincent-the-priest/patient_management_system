<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
$server = "localhost";
$users = "root";
$pass ="";
$db= "website";
$conn = mysqli_connect($server, $users, $pass, $db);
if (!$conn) {
    $error="Connection failed: ";
}
?>