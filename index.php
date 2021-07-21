<?php date_default_timezone_set('America/Bogota'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css.css">
  <link rel="shorcut icon" href="img/w.jfif">
  <title>Woden SAS OBA</title>
</head>
<body>
  

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">OBAWorkplace</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sistema de información para el tratamiento de datos del Proceso OBA, la sistematización de la inserción de nuevas entradas a una base de datos MYSQL InnoBD(Motor de Procesamiento) con capacidad de generar los datos que requiera el usuario en formato excel, para un mejor control de datos mas seguro y mas eficiente. <br>





        Autor: Johan Clavijo &copy
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
  
  <nav class="nav-woden">
  <ul class="nav flex-column">
    <li class="nav-item">
      <img src="img/w.jfif" width="200">
    </li>
  <li class="nav-item">
    <a class="nav-link active" href="#exampleModal" data-bs-toggle="modal">Informacion Del Programa</a>
  </li>
  <li class="nav-item">
     <a class="nav-link disabled" href="#">Johan Clavijo &copy <?php echo date("Y"); ?></a>
  </li>
</ul>
</nav>
<main>

<form action="func/log.f.php" method="post" class="form-log">
  <h1>Inicia Sesión</h1>  
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa el agente" REQUIRED>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="contraseña" REQUIRED>
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="submit-login">Entrar</button>
</form>
</main>
















<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 </body>
 </html>