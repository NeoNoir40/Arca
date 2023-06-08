<!doctype html>
<html lang="en">

<head>
  <title>Actualizar</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

<?php 

//print_r($_GET);

$id_clasificacion = $_GET['id_clasificacion'];

include('../connection/connection.php');

$consulta = "SELECT * FROM clasificacion WHERE id_clasificacion =$id_clasificacion";

$query = mysqli_query($conn,$consulta);

$fila = mysqli_fetch_array($query);

?>
<!-- ========== Start FORM ========== -->
<form action="actualizar_clasificacion.php" method="post">
<div class="mb-3">
<label for="input_clasificacion" class="form-label"> Clasificacion </label>
<input type="text" class="form-control" id="input_clasificacion" name="nombre_clasificacion" value ="<?php echo $fila['nombre_clasificacion']?>">
</div>
<input type="hidden" class="form-control" id="input_clasificacion" name="id_clasificacion" value ="<?php echo $fila['id_clasificacion']?>">
<button class="btn btn-primary me-md-2" type="submit">Actualizar</button>

</form>
<!-- ========== End FORM ========== -->
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>