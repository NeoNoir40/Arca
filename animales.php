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
    <link rel="stylesheet" href="fondo.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
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
            <br>
    </nav>
  </header>

  <main class="fondoanimal">

     <!-- ========== Start FORM ========== -->!
     <div class="tabla_animal">
          <form action="Insert\insetar_animal.php" method="post">
          <div class="mb-3">
    <label for="input_animal" class="form-label">Animal</label>
    <input type="text" class="form-control" id="input_animal" name="nombre_animal">
    <div class="form-text">Escribe el nombre del animal</div>
  </div>
  <div class="mb-3">
    <label for="input_animal" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="input_animal" name="descripcion_animal">
    <div class="form-text">(Opcional) Escribe algo acerca de este animal</div>
  </div>
  
  <label class="form-label">Clasificacion</label>
    <select name="id_animal" class="form-select">
                    <?php
                    include('connection/connection.php');
                    $consulta = "SELECT * FROM clasificacion";
                    $query = mysqli_query($conn,$consulta);
                    while ($fila = mysqli_fetch_array($query)) {
                    ?>
                        <option value="<?php echo $fila['id_animal']; ?>"><?php echo $fila['nombre_clasificacion']?></option>
                    <?php } ?>
     </select>                 
<label class="form-label">Alimentacion</label>
   <select name="id_alimentacion" class="form-select">
      <?php
         include('connection/connection.php');
            $consulta = "SELECT * FROM alimentacion";
            $query = mysqli_query($conn,$consulta);
              while ($fila = mysqli_fetch_array($query)) {
       ?>
   <option value="<?php echo $fila['id_alimentacion']?>"><?php echo $fila['tipo_alimento']?></option>
       <?php } ?>
      </select>
      <label class="form-label">Habitat</label>
   <select name="id_habitat" class="form-select">
      <?php
         include('connection/connection.php');
            $consulta = "SELECT * FROM Habitat";
            $query = mysqli_query($conn,$consulta);
              while ($fila = mysqli_fetch_array($query)) {
       ?>
   <option value="<?php echo $fila['id_habitat']?>"><?php echo $fila['nombre_habitat']?></option>
       <?php } ?>
      </select>                                
 <div>
<button class="btn btn-primary" type="submit">Enviar
</div>
          </form>
          
          <!-- ========== End FORM ========== -->


<table class="table">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Nombre</th>
    <th scope="col">Descripcion</th>
    <th scope="col">Clasificacion</th>
    <th scope="col">Alimentacion</th>
    <th scope="col">Habitat</th>
    <th scope="col">Eliminar</th>
    <th scope="col">Actualizar</th>
    </tr>
</thead>
<tbody>
    <?php
include('connection/connection.php');
$c =  1;

$consulta = "SELECT nombre_animal, descripcion_animal , nombre_clasificacion , tipo_alimento, nombre_habitat FROM animal  
INNER JOIN clasificacion 
ON animal.id_clasificacion_id = clasificacion.id_clasificacion
INNER JOIN 
alimentacion ON animal.id_alimentacion_id = alimentacion.id_alimentacion
INNER JOIN
habitat ON animal.id_habitat_id = habitat.id_habitat ORDER BY nombre_animal ASC;";

$resultado = mysqli_query($conn,$consulta);

while($fila = mysqli_fetch_array($resultado)){
?>

<tr class="table">
<th scope="row"><?php echo $c?></th>
<td><?php echo $fila['nombre_animal']?></td>
<td><?php echo $fila['descripcion_animal']?></td>
<td><?php echo $fila['nombre_clasificacion']?></td>
<td><?php echo $fila['tipo_alimento']?></td>
<td><?php echo $fila['nombre_habitat']?></td>
<td>
  <a href="Update\animal.php?id_animales=<?php echo $fila['id_animal']?>">
    <i class="bi bi-arrow-clockwise text-warning"></i>
  </a>
</td>
<td>
  <a href="Delete\eliminar_animal.php?id_animal=<?php echo$fila['id_animal']?>">
    <i class="bi bi-trash text-danger"></i>
  </a>
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