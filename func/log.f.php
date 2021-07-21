<?php 

include '../class/log.php';

if (isset($_POST['submit-login'])) {
	$email=$_POST['email'];
	$contraseña=$_POST['contraseña'];
        
    
    
	$log=new user();
	$log->login($email,$contraseña);
      
}

		
   
        

if (isset($_POST['submit-registro'])) {
        $documento=$_POST['documento'];
        $agente=$_POST['agente'];
        $contraseña=$_POST['contraseña'];
        $email=$_POST['email'];
       
        $log=new user();
        $log->registro($documento,$agente,$contraseña,$email);
       echo "<script type='text/javascript'>
           alert('Registrado Correctamente');  
           window.location = '../oba.php';
                </script>";
    
}




 ?>