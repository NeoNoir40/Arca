<!doctype html>
<html lang="en">

<head>
  <title>Clasificacion</title>  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="fondo.css">
  <link rel="stylesheet" href="imagenes-index.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body class="bodyclassificacion">
</div>
    <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
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
          <
    </header>
    
  <main class="clasificacionbg">

  <div>
  <div class="clasificaciones">
  <div class="boton-aqua">
    <img class="pezpayaso" src="./imagenes/pezpayaso.jpg" alt="">
    <h1>Acuaticos</h1>
  </div>

  <div class="boton-aves">
    <img class="guacamayo" src="./imagenes/guacamaya.jpg" alt="">
    <h1>Aves</h1>
  </div>

  <div class="boton-reptil">
    <img class="camaleon" src="./imagenes/reptil.jpg" alt="">
    <h1>Reptiles</h1>
  </div>
  
  <div class="boton-anfibio">
    <img class="anfibio" src="./imagenes/anfibio.jpg" alt="">
    <h1>Anfibios</h1>
  </div>

  <div class="boton-insecto">
    <img class="insecto" src="./imagenes/mariposa.jpeg" alt="">
    <h1>Insectos</h1>
  </div>

  <div class="boton-mamifero">
    <img class="mamifero" src="./imagenes/Jaguar.jpg" alt="">
    <h1>Mamiferos</h1>
  </div>
</div>
  </div>
  <div class="tabla_clasificacion">
 <!-- ========== Start Form ========== -->
 <form class="entradacl" action="Insert\insertar_clasificacion.php" method="post">
  <div class="mb-3">
    <label for="input_clasificacion" class="form-label">Clasificacion</label>
    <input type="text" class="form-control" id="input_clasificacion" name="nombre_clasificacion" Required>
    <div class="form-text">Escribe la clasificacion del animal</div>
  </div>
  <div>
<button class="btn btn-primary" type="submit">Enviar
</div>
</form>
    <!-- ========== End Form ========== -->

<table class="table">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Nombre de Clasificacion</th>
    <th scope="col">Eliminar</th>
    <th scope="col">Actualizar</th>
    </tr>
</thead>
<tbody>
    <?php
include('connection/connection.php');
$c =  1;
$consulta = "SELECT * FROM clasificacion";
$resultado = mysqli_query($conn,$consulta);

while($fila = mysqli_fetch_array($resultado)){
?>

<tr class="table">
<th scope="row"><?php echo $c?></th>
<td><?php echo $fila['nombre_clasificacion']?></td>
<td>
<a href="Update\clasificaciones.php?id_clasificacion= <?php echo $fila['id_clasificacion']?>">
          <i class="bi bi-arrow-clockwise text-warning"></i>
        </a>
</td>
<td>
<a href="Delete\eliminar_clasificacion.php?id_clasificacion= <?php echo $fila['id_clasificacion']?>">
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