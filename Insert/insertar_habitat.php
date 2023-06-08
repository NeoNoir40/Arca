<?php 

 print_r($_POST);

    $nombre_habitat = $_POST['nombre_habitat'];

    include('../connection/connection.php');

    $consulta = "INSERT INTO habitat(nombre_habitat) VALUES ('$nombre_habitat')";

    $resultado = mysqli_query ($conn,$consulta);

header('Location: ../habitat.php');    


?>