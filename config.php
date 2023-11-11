<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pizza";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die(" " . mysqli_connect_error());
} else {
    echo("Kết nối thành công!");
}
?>