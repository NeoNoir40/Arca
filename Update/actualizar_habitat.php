<?php   

//print_r($_POST);

$nombre_habitat = $_POST['nombre_habitat'];
$id_habitat = $_POST['id_habitat'];


include('../connection/connection.php');

$consulta = "call a_updateHabitat( '$id_habitat','$nombre_habitat')";

$query = mysqli_query($conn,$consulta);

header('Location: ../habitat.php');
?>