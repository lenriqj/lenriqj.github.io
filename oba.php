<?php 
date_default_timezone_set('America/Bogota');
session_start();
if (!isset($_SESSION['user'])) {
  echo "<script type='text/javascript'>
           window.location = 'index.php';
           alert('No has iniciado sesion');  
                </script>";
}


include 'class/query.php';
$oba=new query();


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css.css">
  <link rel="shorcut icon" href="img/w.jfif">
	<title>Oba registro <?php echo date("y-m-d");?></title>
</head>
<body>
  <!--Modal Usuario-->
	<div class="modal fade bd" id="UModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Control usuarios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="func/log.f.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Documento agente</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="documento">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Usuario Agente</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="agente">
    <small id="emailHelp" class="form-text text-muted">Lo usaras mas tarde para Iniciar Sesión</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email">
  </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success" name="submit-registro">Nuevo Usuario</button>
   </form>

      </div>
    </div>
  </div>
</div>
<!--Modal Usuario-->
<!--Modal Generar excel-->
<div class="modal fade bd" id="ExcelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Generar Excel <img src="img/Excel_2013_23480.ico" width="30"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

       <form action="obaexc.php" method="post" class="f-exc-todos">
         <button type="submit" name="submit-excel-todos" class="btn btn-success">Generar Excel(Todo)</button>
       </form>

        <form action="obaexc.php" method="post" class="f-exc-fecha">
          <h1 class="text-center">Generar Excel por fecha</h1>
          <label>Desde</label>
          <input type="date" name="fecha1" class="form-control">
          <label>Hasta</label>
          <input type="date" name="fecha2" class="form-control">
         <button type="submit" name="submit-excel-fecha" class="btn btn-success">Generar Excel Por Fecha</button>
       </form>

       <form action="obaexc.php" method="post" class="f-exc-tecnico">
          <h1 class="text-center">Generar Excel por Tecnico</h1>
           <select name="Tecnico" class="form-control">
             <?php  
                $arr=$oba->getTecnico();
                foreach($arr as $t){           ?>
               <option value="<?php echo $t['tecnico']?>"><?php echo $t['tecnico']?></option>
            <?php } ?>
           </select>
         <button type="submit" name="submit-excel-tecnico" class="btn btn-success">Generar Excel Por Tecnico</button>
       </form>

       <form action="obaexc.php" method="post" class="f-exc-Inspector">
          <h1 class="text-center">Generar Excel por Inspector De Calidad</h1>
         <select name="Inspector" class="form-control">
           <?php  
              $arr=$oba->getInspector();
              foreach($arr as $t){
            ?>
             <option value="<?php echo $t['inspector']?>"><?php echo $t['inspector']?></option>
          <?php } ?>
         </select>
         <button type="submit" name="submit-excel-Inspector" class="btn btn-success">Generar Excel Por Inspector</button>
       </form>


      </div>
    </div>
  </div>
</div>
<!--Modal Generar Excel-->
<!--Modal OBA-->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">OBAWorkplace</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="func/oba.f.php" method="post" class=""> 
        <div class="form-group">
         <label>ODS</label>
         <input type="text" name="ODS" value="6" class="form-control">
         <label>CSO</label>
         <input type="text" name="CSO" value="BR" class="form-control">
         <label>SN</label>
         <input type="text" name="SN" class="form-control">
         <label>SKU</label>
         <input type="text" name="SKU" value="LA" class="form-control">

       </div>
         <label>Hallazgo</label>
         <input type="text" name="Hallazgo" value="N/A" class="form-control">
         <label>Observaciones</label>
         <input type="text" name="Observaciones" value="No se encontraron incidencias" class="form-control">
         <label>Clasificacion</label>
         <input type="text" name="Clasificacion" value="N/A" class="form-control">
         <label>Nivel De afectacion</label>
         <input type="text" name="Nivel_De_Afectacion" value="N/A" class="form-control">
         <label>Estado de Auditoria</label>
         <input type="text" name="Estado_Auditoria" value="Aprobada" class="form-control">
         <label>Tecnico Reparacion</label>
         <select name="Tecnico_Reparacion" class="form-control">
           <?php  
              $arr=$oba->getTecnico();
              foreach($arr as $t){           ?>
             <option value="<?php echo $t['tecnico']?>"><?php echo $t['tecnico']?></option>
          <?php } ?>
         </select>
         <label>Inspector Calidad</label>
         <select name="Inspector_Calidad" class="form-control">
           <?php  
              $arr=$oba->getInspector();
              foreach($arr as $t){
            ?>
             <option value="<?php echo $t['inspector']?>"><?php echo $t['inspector']?></option>
          <?php } ?>
         </select>
         <label>Correcion</label>
         <input type="text" name="Correccion" value="N/A" class="form-control">
         <br>
         <button type="submit" name="submit-oba" class="btn btn-success">Añadir</button>

       </form>





        Autor: Johan Clavijo &copy
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!--Modal OBA-->



<!--Seccion de triggers de los modales-->
<div class="a-modal-añadir">
<?php if (!isset($_GET['USAG'])) { ?>
  <a class="btn btn-success" href="#exampleModal" data-bs-toggle="modal">Añadir Oba</a>
  <?php if (isset($_SESSION['admin'])) {?>
  <a class="btn btn-warning" href="oba.php?USAG">Ver Usuarios</a>
<?php } ?>
    <a href="func/logof.f.php" class="btn btn-danger">Cerrar Sesión</a> 
<?php } ?>
 
 <?php if (isset($_GET['USAG'])) {
   ?>
  <a class="btn btn-warning" href="#UModal" data-bs-toggle="modal">Añadir Usuarios</a>
  <?php } ?>





</div>
<!--Seccion de triggers de los modales-->



<?php if (!isset($_GET['USAG'])) {?>
<a href="func/logof.f.php?close"><img src="img/w.jfif" width="100"></a>
<?php } ?>
<?php if (isset($_GET['USAG'])) {?>
<a href="oba.php" class="flecha"><img src="img/flecha-izquierda.ico" width="50"></a>
<?php } ?>

<?php if (!isset($_GET['USAG'])) {
  ?>
<form action="oba.php" method="post" class="search-form">

  <input type="text" name="busqueda" class="search-input">
  <button type="submit" name="submit-search" class="btn btn-secondary">Buscar</button>
</form>
<?php } ?>






<!-- Tabla Oba-->
<?php if (!isset($_GET['USAG'])) {?>
<h1 class="text-center">OBA <?php echo date("y-m-d");?></h1>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">ODS</th>
      <th scope="col">CSO</th>
      <th scope="col">SN</th>
      <th scope="col">SKU</th>
      <th scope="col">Hallazgo</th>
      <th scope="col">Observaciones</th>
      <th scope="col">Clasificación</th>
      <th scope="col">Nivel de afectación</th>
      <th scope="col">Estado de auditoria</th>
      <th scope="col">Tecnico de Reparación</th>
      <th scope="col">Inspector Calidad</th>
      <th scope="col">Correción</th>
      <th scope="col">
        <a href="#ExcelModal" data-bs-toggle="modal" class="a-excel"> <img src="img/Excel_2013_23480.ico" width="20"></a>
      </th>

    </tr>
  </thead>
 
  <tbody>
  <?php } ?>
    <?php 
        if (!isset($_POST['submit-search'])) {
          
        if (isset($_GET['All'])) {
          
        
       $datos=$oba->oba();
       if (isset($datos)) {
           
          
       foreach ($datos as $o) {
 
     ?>
    <tr>
      <td><?php echo $o['fecha']; ?></td>
      <td><?php echo $o['ODS']; ?></td>
      <td><?php echo $o['CSO']; ?></td>
      <td><?php echo $o['SN']; ?></td>
      <td><?php echo $o['SKU']; ?></td>
      <td><?php echo $o['hallazgo']; ?></td>
      <td><?php echo $o['observaciones']; ?></td>
      <td><?php echo $o['clasificacion']; ?></td>
      <td><?php echo $o['afectacion_lvl']; ?></td>
      <td><?php echo $o['estado_auditoria']; ?></td>
      <td><?php echo $o['tecnico_reparacion']; ?></td>
      <td><?php echo $o['inspector_calidad']; ?></td>
      <td><?php echo $o['correccion']; ?></td>
    </tr>
<?php } 
}
}
else{
  
}
}?>

  	<?php 
        if (!isset($_POST['submit-search'])) {
          
        
       $datos=$oba->obaCurrentDate();
       if (isset($datos)) {
           
          
       foreach ($datos as $o) {
 
  	 ?>
    <tr>
      <td><?php echo $o['fecha']; ?></td>
      <td><?php echo $o['ODS']; ?></td>
      <td><?php echo $o['CSO']; ?></td>
      <td><?php echo $o['SN']; ?></td>
      <td><?php echo $o['SKU']; ?></td>
      <td><?php echo $o['hallazgo']; ?></td>
      <td><?php echo $o['observaciones']; ?></td>
      <td><?php echo $o['clasificacion']; ?></td>
      <td><?php echo $o['afectacion_lvl']; ?></td>
      <td><?php echo $o['estado_auditoria']; ?></td>
      <td><?php echo $o['tecnico_reparacion']; ?></td>
      <td><?php echo $o['inspector_calidad']; ?></td>
      <td><?php echo $o['correccion']; ?></td>
    </tr>
<?php } 
}
else{
  if (!isset($_GET['All']) && !isset($_GET['USAG'])) {
 
  
   echo "<h2>No hay datos para la fecha de hoy<a href='oba.php?All' class='nav-link active'>Ver todos</a></h2>";
 }else{
  if (!isset($_GET['USAG'])) {
   
  
  echo "<h2><a href='oba.php' class='nav-link active'>Ver de hoy</a></h2>";
   }
 }
}
}?>
<?php 
        if (isset($_POST['submit-search'])) {
          
        
       $datos=$oba->obaSearchODS($_POST['busqueda']);
       if (isset($datos)) {
         
       
       foreach ($datos as $o) {
 
     ?>
    <tr>
      <td><?php echo $o['fecha']; ?></td>
      <td><?php echo $o['ODS']; ?></td>
      <td><?php echo $o['CSO']; ?></td>
      <td><?php echo $o['SN']; ?></td>
      <td><?php echo $o['SKU']; ?></td>
      <td><?php echo $o['hallazgo']; ?></td>
      <td><?php echo $o['observaciones']; ?></td>
      <td><?php echo $o['clasificacion']; ?></td>
      <td><?php echo $o['afectacion_lvl']; ?></td>
      <td><?php echo $o['estado_auditoria']; ?></td>
      <td><?php echo $o['tecnico_reparacion']; ?></td>
      <td><?php echo $o['inspector_calidad']; ?></td>
      <td><?php echo $o['correccion']; ?></td>
    </tr>
<?php } 
}
else{
  echo "<h2>No se encuentra su busqueda</h2>";

}
echo "<h2><a href='oba.php' class='nav-link active'>Ver de hoy</a></h2>";
}?>
    
  </tbody>
</table>
<!-- Tabla OBA-->



<!-- Tabla Usuarios-->
<?php if (isset($_GET['USAG'])) { ?>
<h1 class="text-center">Usuarios  </h1>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Documento Agente</th>
      <th scope="col">Agente</th>
      <th scope="col">Email</th>
      <th scope="col">Regimen_Agente</th>
      

    </tr>
  </thead>
  <tbody>
    <?php 
        
       $datos=$oba->usuarios();
       foreach ($datos as $u) {
 
     ?>
    <tr>
      <td><?php echo $u['documento']; ?></td>
      <td><?php echo $u['agente']; ?></td>
      <td><?php echo $u['email']; ?></td>
      <td><?php echo $u['ag_tipo']; ?></td>
    </tr>
<?php } ?>
    
  </tbody>
</table>
<!-- Tabla Usuarios-->
<?php } ?>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
