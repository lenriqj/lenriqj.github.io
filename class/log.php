<?php 
include 'bd.php';

class user extends bd{
	public function registro($documento,$agente,$cda,$email){
		$cdahash=password_hash($cda, PASSWORD_DEFAULT);
        $sql="INSERT INTO usag(documento,agente, cda, email, ag_tipo) VALUES ('$documento','$agente','$cdahash','$email',1)";
        $stmt=$this->Con()->query($sql);
	}
	public function passver($email){
        $sql="SELECT * FROM usag WHERE email='$email'";
        $stmt=$this->Con()->query($sql);
        while ($fila=$stmt->fetch()) {
			$arr[]=$fila;
		}
		if (isset($arr)) {
			
		
		return $arr;
	}
	}
	
	public function login($email,$contraseña){
		$log=new user();
		$user=$log->passver($email);
		if (isset($user)) {
			
		foreach($user as $c){
			$verify=password_verify($contraseña, $c['cda']);
			if ($verify==1) {
				session_start();
				$_SESSION['user']=$c['agente'];
				if ($c['ag_tipo']=="0") {
					$_SESSION['admin']=$c['email'];
				}
				echo "<script type='text/javascript'>
           alert('Has iniciado Sesion Correctamente');  
            window.location = '../oba.php';
 		</script>";
			}else{
				echo "<script type='text/javascript'>
           alert('Contraseña incorrecta');  
           window.location = '../index.php';
 		</script>";
 		
			}
	



	}
}else{


echo "<script type='text/javascript'>
           alert('Usuario Incorrecto');  
           window.location = '../index.php';
 		</script>";
 	}	
}
}


 ?>