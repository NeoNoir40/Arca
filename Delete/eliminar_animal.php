<?php 

 //print_r($_POST);

    $id_animal = $_GET['id_animal'];

    include('../connection/connection.php');

     $consulta = "DELETE FROM animal WHERE id_animal = $id_animal";

    $resultado = mysqli_query ($conn,$consulta);

    header('Location: ../animales.php');
?>