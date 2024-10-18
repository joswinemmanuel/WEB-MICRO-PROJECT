<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joswin_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connecty failed : " . mysqli_connect_error());
}
?>  