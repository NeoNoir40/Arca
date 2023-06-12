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

$id_animal = $_GET['id_animal'];

include('../connection/connection.php');

$consulta = "call arc.a_verWhereAnimal('$id_animal')";
;

$query = mysqli_query($conn,$consulta);

$fila = mysqli_fetch_array($query);

?>
<!-- ========== Start FORM ========== -->
<form action="actualizar_animal.php" method="post">
<div class="mb-3">
  <label for="input_animal" class="form-label"> Animal </label>
    <input type="text" class="form-control" id="input_animal" name="nombre_animal" value ="<?php echo $fila['nombre_animal']?>" Required>

    <input type="hidden" class="form-control" id="input_animal" name="id_animal" value ="<?php echo $fila['id_animal']?>">


<div class="mb-3">
  <label for="input_animal" class="form-label">Descripcion</label>
      <input type="text" class="form-control" id="input_animal" name="descripcion_animal">
  <div class="form-text"  >(Opcional) Escribe algo acerca de este animal</div>
</div>
    
  <label class="form-label">Clasificacion</label>
      <select name="id_clasificacion" class="form-select">
        <?php
          include('../connection/connection.php');
            $consulta = "call a_verAllClasificacion()";
              $query = mysqli_query($conn,$consulta);
                while ($fila = mysqli_fetch_array($query)){
        ?>
          <option value="<?php echo $fila['id_clasificacion']?>"><?php echo $fila['nombre_clasificacion']?></option>
          <?php } ?>
      </select>                 
  <label class="form-label">Alimentacion</label>
      <select name="id_alimentacion" class="form-select">
        <?php
          include('../connection/connection.php');
            $consulta = "call a_verAllAlimentacion()";
              $query = mysqli_query($conn,$consulta);
                while ($fila = mysqli_fetch_array($query)) {
        ?>
          <option value="<?php echo $fila['id_alimentacion']?>"><?php echo $fila['tipo_alimento']?></option>
          <?php } ?>
      </select>
  <label class="form-label">Habitat</label>
      <select name="id_habitat" class="form-select">
        <?php
          include('../connection/connection.php');
            $consulta = "call a_verAllHabitat";
              $query = mysqli_query($conn,$consulta);
                while ($fila = mysqli_fetch_array($query)) {
        ?>
            <option value="<?php echo $fila['id_habitat']?>"><?php echo $fila['nombre_habitat']?></option>
            <?php } ?>
  </select>  
</div>

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