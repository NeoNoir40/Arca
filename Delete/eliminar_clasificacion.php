<?php 

 //print_r($_POST);

    $id_clasificacion = $_GET['id_clasificacion'];

    include('../connection/connection.php');

    $consulta = "call a_eliminarClasificacion($id_clasificacion)";

    $resultado = mysqli_query ($conn,$consulta);

    header('Location: ../clasificacion.php');
?>