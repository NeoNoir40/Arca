<?php   

//print_r($_POST);

$nombre_animal = $_POST ['nombre_animal'];
$descripcion = $_POST ['descripcion_animal'];
$clasificacion = $_POST['id_clasificacion'];
$alimentacion = $_POST ['id_alimentacion'];
$habitat = $_POST['id_habitat'];
$id_animal = $_POST['id_animal'];

include('../connection/connection.php');

$consulta = "UPDATE animal SET
nombre_animal = '$nombre_animal' ,descripcion_animal = '$descripcion',id_clasificacion_id = '$clasificacion',id_alimentacion_id = '$alimentacion',id_habitat_id = '$habitat' WHERE id_animal = '$id_animal'";

$query = mysqli_query($conn,$consulta);

header('Location: ../alimentacion.php');
?>