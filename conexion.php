<?php

$host = "localhost";
$user = "root";
$pass = "";

$db = " iniciodesesion";

$conexion = mysqli-connect($host, $user , $pass , $db);

if (!$con) {
    echo "Conexion fallida";
}


