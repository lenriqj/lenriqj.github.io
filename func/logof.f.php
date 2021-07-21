<?php 
if (isset($_GET['close'])) {
   

session_start();
session_unset();
session_destroy();
echo "<script type='text/javascript'>
           window.location = '../index.php';
 		</script>";
    }
session_start();
session_unset();
session_destroy();
echo "<script type='text/javascript'>
           alert('Sesion Finalizada');  
           window.location = '../index.php';
        </script>";
 ?>