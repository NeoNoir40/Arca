<?php 

 //print_r($_POST);

    $id_habitat = $_GET['id_habitat'];

    include('../connection/connection.php');

     $consulta = "call a_eliminarHabitat('$id_habitat')";

    $resultado = mysqli_query ($conn,$consulta);

    header('Location: ../habitat.php');
?>