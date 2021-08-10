<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "nuevocrud";

$con = mysqli_connect($host, $user, $pass, $db)or die(mysql_error());
$con-> set_charset("utf8");


$nombres = $_POST["nombres"];
$apellido = $_POST["apellido"];
$fecha = $_POST["fecha"];


if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
}else{
    echo $query = "INSERT INTO datos (nombres,apellidos,fecha)VALUES('$nombres', '$nombres', '$fecha')";
        echo mysqli_query($con, $query) or die (mysqli_error());
}

   



?>