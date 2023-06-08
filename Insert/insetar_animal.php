
<?php 

 print_r($_POST);

    $nombre_animal = $_POST ['nombre_animal'];
    $descripcion = $_POST ['descripcion_animal'];
    $clasificacion = $_POST ['id_clasificacion'];
    $alimentacion = $_POST ['id_alimentacion'];
    $habitat = $_POST['id_habitat'];

    include('../connection/connection.php');

    $consulta = "INSERT INTO animal (nombre_animal, descripcion_animal, id_clasificacion_id, id_alimentacion_id, id_habitat_id) 
    VALUES ('$nombre_animal', '$descripcion', '$clasificacion', '$alimentacion', '$habitat');";


    $resultado = mysqli_query ($conn,$consulta);

    header('Location: ../animales.php');    


?>



