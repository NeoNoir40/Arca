<?php 

 //print_r($_POST);

    $id_alimento = $_GET['id_alimentacion'];

    include('../connection/connection.php');

     $consulta = "DELETE FROM alimentacion WHERE id_alimentacion = $id_alimento";

    $resultado = mysqli_query ($conn,$consulta);

    header('Location: ../alimentacion.php');
?>