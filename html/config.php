<?php 

$server = "localhost";
$user = "helpcour_admin";
$pass = "@helpcours4";
$database = "helpcour_login_register_pure_coding";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>