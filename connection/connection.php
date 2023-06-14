<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "arc";

$conn = new mysqli($hostname,$username,$password,$database);

if($conn -> connect_error){
    die("Error en la conexión en la base de datos | error: " 
.$conn -> connect_errno);
}

//echo "La conexion fue exitosa";

//$conn -> close();

?>