<?php 

 print_r($_POST);

    $nombre_clasificacion = $_POST['nombre_clasificacion'];

    include('../connection/connection.php');

    $consulta = "call a_insertarClasificacion('$nombre_clasificacion')";

    $resultado = mysqli_query ($conn,$consulta);

header('Location: ../clasificacion.php');    


?>