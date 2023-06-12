<?php 

 //print_r($_POST);

    $id_alimento = $_GET['id_alimentacion'];

    include('../connection/connection.php');

     $consulta = "call a_eliminarAlimentacion('$id_alimento')"; 

    $resultado = mysqli_query ($conn,$consulta);

    header('Location: ../alimentacion.php');
?>