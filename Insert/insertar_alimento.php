<?php 

 print_r($_POST);

    $tipo_aliemnto = $_POST['tipo_alimento'];

    include('../connection/connection.php');

    $consulta = "INSERT INTO alimentacion(tipo_alimento) VALUES ('$tipo_aliemnto')";

    $resultado = mysqli_query ($conn,$consulta);

header('Location: ../alimentacion.php');    


?>