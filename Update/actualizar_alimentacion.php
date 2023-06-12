<?php   

//print_r($_POST);

$tipo_alimento = $_POST['tipo_alimento'];
$id_alimentacion = $_POST['id_alimentacion'];

include('../connection/connection.php');

$consulta = "call a_updateAlimentacion('$id_alimentacion', '$tipo_alimento');";


$query = mysqli_query($conn,$consulta);

header('Location: ../alimentacion.php');
?>