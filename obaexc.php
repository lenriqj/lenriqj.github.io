<?php include 'class/query.php';
date_default_timezone_set('America/Bogota');
$oba=new query();
if (isset($_POST['submit-excel-todos'])) {
  header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
  header("content-Disposition: attachment; filename=oba TODO".date("y-m-d").".xls"); 
}

 ?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css.css">
<h1 class="text-center">OBA <?php echo date("y-m-d");?></h1>
<table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">ODS</th>
      <th scope="col">CSO</th>
      <th scope="col">SN</th>
      <th scope="col">SKU</th>
      <th scope="col">Hallazgo</th>
      <th scope="col">Observaciones</th>
      <th scope="col">Clasificación </th>
      <th scope="col">Nivel de afectación</th>
      <th scope="col">Estado de auditoria</th>
      <th scope="col">Tecnico de Reparación</th>
      <th scope="col">Inspector Calidad</th>
      <th scope="col">Correción</th>

    </tr>
  </thead>
  <tbody>
  	<?php 
        if (isset($_POST['submit-excel-todos'])) {
          
        
       $datos=$oba->oba();
       if (!isset($datos)) {
           echo "<script type='text/javascript'>
           alert('No hay datos');  
           window.location = 'oba.php';
    </script>";
        }
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
} ?>

<?php 
        if (isset($_POST['submit-excel-fecha'])) {
          
        
       $datos=$oba->obaExcelDate($_POST['fecha1'],$_POST['fecha2']);
       if (!isset($datos)) {
         echo "<script type='text/javascript'>
           alert('No hay datos para la/las fechas digitadas');  
           window.location = 'oba.php';
    </script>";
       }else{
        header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
        header("content-Disposition: attachment; filename=oba".$_POST['fecha1'].">>>>>".$_POST['fecha2'].".xls"); 
       }
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
} ?>


<?php 
        if (isset($_POST['submit-excel-tecnico'])) {
          
        
       $datos=$oba->obaTecnico($_POST['Tecnico']);
       if (!isset($datos)) {
           echo "<script type='text/javascript'>
           alert('No hay datos del tecnico');  
           window.location = 'oba.php';
    </script>";
        }else{
        header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
        header("content-Disposition: attachment; filename=oba".$_POST['Tecnico'].".xls");
        }
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
} ?>

<?php 
        if (isset($_POST['submit-excel-Inspector'])) {
          
        
       $datos=$oba->obaInspector($_POST['Inspector']);
       if (!isset($datos)) {
           echo "<script type='text/javascript'>
           alert('No hay datos del Inspector');  
           window.location = 'oba.php';
    </script>";
        }else{
        header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
        header("content-Disposition: attachment; filename=oba".$_POST['Inspector'].".xls");
        }
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
} ?>
   
  </tbody>
</table>
