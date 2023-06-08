<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
  <header>
    <!-- place navbar here -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Arca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clasificacion.php">clasificacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="alimentacion.php">Alimentacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="habitat.php">Habitat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="animales.php">Animales</a>
            </li>
          </div>
          </div>
  </header>
  <main>
    <div>
        <!-- ========== Start FORM ========== -->
    
    <form action="Insert\insertar_habitat.php" method="post">
  <div class="mb-3">
    <label for="input_habitat" class="form-label">Habitat</label>
    <input type="text" class="form-control" id="input_habitat" name="nombre_habitat">
    <div class="form-text">Escribe de el habitat</div>
  </div>
  <div>
<button class="btn btn-primary" type="submit">Enviar
</div>
</form>
  <!-- ========== End FORM ========== -->
    </div>
<div class="tabla_habitat">
<table class="table">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Nombre</th>
    <th scope="col">Eliminar</th>
    <th scope="col">Actualizar</th>
    </tr>
</thead>
<tbody>
    <?php
include('connection/connection.php');
$c =  1;
$consulta = "SELECT * FROM habitat";
$resultado = mysqli_query($conn,$consulta);

while($fila = mysqli_fetch_array($resultado)){
?>

<tr class="table">
<th scope="row"><?php echo $c?></th>
<td><?php echo $fila['nombre_habitat']?></td>
<td>
<a href="Update\habitats.php?id_habitat= <?php echo $fila['id_habitat']?>">
          <i class="bi bi-arrow-clockwise text-warning"></i>
        </a>
</td>
<td>
<a href="Delete\eliminar_habitat.php?id_habitat= <?php echo $fila['id_habitat']?>">
          <i class="bi bi-trash text-danger"></i>
</td>
</tr>
<?php $c++; } ?>
</tbody>
</table>
</div>
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