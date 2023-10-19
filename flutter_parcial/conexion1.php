<?php 
$mysql = new mysqli('localhost', 'root', '', 'flutter');

if ($mysql->connect_error){
    die("Error de conexion");
}

else{
    echo "Conexion exitosa";
}