<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "nuevocrud";

$con = mysqli_connect($host, $user, $pass, $db)or die(mysql_error());
$con-> set_charset("utf8");

$id = $_POST['id'];

$sqlborrar="DELETE FROM TuTabla WHERE id=$id";
$resborrar=mysqli_query($con,$sqlborrar);