<?php 

 print_r($_POST);

    $nombre_clasificacion = $_POST['nombre_clasificacion'];

    include('../connection/connection.php');

    $consulta = "INSERT INTO clasificacion(nombre_clasificacion) VALUES ('$nombre_clasificacion')";

    $resultado = mysqli_query ($conn,$consulta);

header('Location: ../clasificacion.php');    


?>