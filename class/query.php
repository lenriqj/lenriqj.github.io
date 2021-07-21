<?php include 'bd.php';
date_default_timezone_set('America/Bogota');
class query extends bd{



	public function oba(){	
		$sql="SELECT * FROM obajulio2021";
		$stmt=$this->Con()->query($sql);
		while ($fila=$stmt->fetch()) {
			$arr[]=$fila;
		}
		if (isset($arr)) {
			
		return $arr;
	 }
	}
	public function obaCurrentDate(){
		$limit=15;
		$date=date("y-m-d");	
		$sql="SELECT * FROM obajulio2021  WHERE fecha='$date' ORDER BY id_oba DESC LIMIT $limit";
		$stmt=$this->Con()->query($sql);
		while ($fila=$stmt->fetch()) {
			$arr[]=$fila;
		}
		if (isset($arr)) {
			
		return $arr;
	 }
	}
	public function obaSearchODS($busqueda){
		$sql="SELECT * FROM obajulio2021 WHERE ODS LIKE '%$busqueda%' OR tecnico_reparacion LIKE '%$busqueda%' OR SKU LIKE '%$busqueda%' OR inspector_calidad LIKE '%$busqueda%' OR estado_auditoria LIKE '%$busqueda%' OR fecha LIKE '%$busqueda%'  ";
		$stmt=$this->Con()->query($sql);
		while ($fila=$stmt->fetch()) {
			$arr[]=$fila;
		}
		if (isset($arr)) {
		return $arr;
	 }
	}
	public function obaExcelDate($fecha1,$fecha2){
		$sql="SELECT * FROM obajulio2021 WHERE fecha BETWEEN '$fecha1' AND '$fecha2'";
		$stmt=$this->Con()->query($sql);
		while ($fila=$stmt->fetch()) {
			$arr[]=$fila;
		}
		if (isset($arr)) {
		return $arr;
	 }
	}
	public function obaTecnico($tecnico){
		$sql="SELECT * FROM obajulio2021 WHERE tecnico_reparacion='$tecnico'";
		$stmt=$this->Con()->query($sql);
		while ($fila=$stmt->fetch()) {
			$arr[]=$fila;
		}
		if (isset($arr)) {
		return $arr;
	 }
	}
	public function obaInspector($inspector){
		$sql="SELECT * FROM obajulio2021 WHERE inspector_calidad='$inspector'";
		$stmt=$this->Con()->query($sql);
		while ($fila=$stmt->fetch()) {
			$arr[]=$fila;
		}
		if (isset($arr)) {
		return $arr;
	 }
	}

	public function usuarios(){
		$sql="SELECT * FROM usag";
		$stmt=$this->Con()->query($sql);
		while ($fila=$stmt->fetch()) {
			$arr[]=$fila;
		}
		return $arr;

	}
	public function getTecnico(){
		$sql="SELECT * FROM tecnicor";
		$stmt=$this->Con()->query($sql);
		while ($fila=$stmt->fetch()) {
			$arr[]=$fila;
		}
		return $arr;
	}
	public function getInspector(){
		$sql="SELECT * FROM inspectorc";
		$stmt=$this->Con()->query($sql);
		while ($fila=$stmt->fetch()) {
			$arr[]=$fila;
		}
		return $arr;
	}


	public function setOba($ods,$cso,$sn,$sku,$hallazgo,$observaciones,$clasificacion,$afectacion,$auditoria,$tecnico,$inspector,$correcion){
        $sql="INSERT INTO obajulio2021(ODS,CSO, SN, SKU, hallazgo, observaciones, clasificacion, afectacion_lvl, estado_auditoria, tecnico_reparacion, inspector_calidad, correccion) VALUES ('$ods','$cso','$sn','$sku','$hallazgo','$observaciones','$clasificacion','$afectacion','$auditoria','$tecnico','$inspector','$correcion')";
        $stmt=$this->Con()->query($sql);
	}
}



 ?>