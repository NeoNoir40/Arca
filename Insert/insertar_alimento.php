<?php 

 print_r($_POST);

    $tipo_aliemnto = $_POST['tipo_alimento'];

    include('../connection/connection.php');

    $consulta = "call a_insertarAlimentacion('$tipo_aliemnto')";

    $resultado = mysqli_query ($conn,$consulta);

header('Location: ../alimentacion.php');    


?>