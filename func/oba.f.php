<?php 	
include '../class/query.php';

if (isset($_POST['submit-oba'])) {
    $ods=$_POST['ODS'];
	$cso=$_POST['CSO'];
	$sn=$_POST['SN'];
	$sku=$_POST['SKU'];
	$hallazgo=$_POST['Hallazgo'];
	$observaciones=$_POST['Observaciones'];
	$clasificacion=$_POST['Clasificacion'];
	$afectacion=$_POST['Nivel_De_Afectacion'];
	$auditoria=$_POST['Estado_Auditoria'];
	$tecnico=$_POST['Tecnico_Reparacion'];
	$inspector=$_POST['Inspector_Calidad'];
	$correccion=$_POST['Correccion'];
	if (!empty($cso) || !empty($sn)) {
		$oba=new query();
	    $oba->setOba($ods,$cso,$sn,$sku,$hallazgo,$observaciones,$clasificacion,$afectacion,$auditoria,$tecnico,$inspector,$correccion);
	    echo "<script type='text/javascript'>
           alert('Añadido');  
           window.location = '../oba.php';  
 		</script>";
	}else{
		echo "<script type='text/javascript'>
           alert('Campos Vacios(No se inserto!)');  
           window.location = '../oba.php';  
 		</script>";
	}

	
} 




 ?>