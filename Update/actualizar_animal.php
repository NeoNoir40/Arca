<?php   

//print_r($_POST);

$nombre_animal = $_POST ['nombre_animal'];
$descripcion = $_POST ['descripcion_animal'];
$clasificacion = $_POST['id_clasificacion'];
$alimentacion = $_POST ['id_alimentacion'];
$habitat = $_POST['id_habitat'];
$id_animal = $_POST['id_animal'];

include('../connection/connection.php');

$consulta = "call a_updateAnimal('$nombre_animal', '$descripcion', '$clasificacion', '$alimentacion', '$habitat', '$id_animal')";

$query = mysqli_query($conn,$consulta);

header('Location: ../animales.php');
?>