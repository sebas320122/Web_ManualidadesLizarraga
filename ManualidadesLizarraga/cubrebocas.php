<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <script src="https://kit.fontawesome.com/dcee0302ab.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Manualidades Lizarraga</title>
    <link rel="icon" href="imagenes/logo.png">
    <link rel="stylesheet" type="text/css" href="normalize/n_inicio.css">
    <link rel="stylesheet" type="text/css" href="estilos/e_cubrebocas.css">
<!--Google fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cantarell&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
</head>

<body>
  <!--Menu-->
  <div class="container-fluid">
  <nav>
    <ul>
      <img src="imagenes/logo.png" id="logo" alt="logo">
      <li><a href="inicio.html" class="not-current">•INICIO</a></li>
      <li><a href="" class="current">•CUBREBOCAS</a></li>
      <li><a href="contacto.html" class="not-current">•CONTACTO</a></li>
      <li><a href="sobre_nosotros.html" class="not-current">•SOBRE NOSOTROS</a></li>
    </ul>
  </nav>
  </div>
<!--Catalogo-->

<div class="contenedor_titulo">
<h2 id="title">Cubrebocas disponibles</h2>
</div>

<div class="container">
<?php
include("conexion.php");
  $query = "SELECT * FROM cubrebocas";
  $resultado = $conexion->query($query);
  while ($row = $resultado->fetch_assoc()) {
    ?>

    <div class="card">
      <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>">
      <h4> <?php echo $row['nombre'];?></h4>
      <p> $<?php echo $row['precio'];?></p>    
  </div>

  <?php  
  }
  ?>
</div>
<!--footer-->
<footer class="pie_pagina">
  Copyright © 2022 Manualidades Lizarraga. Todos los derechos reservados
 </footer>
  
</html>