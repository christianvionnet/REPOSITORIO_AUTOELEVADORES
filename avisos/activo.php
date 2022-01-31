<?php
 
 $activo = $_POST['activo'];

 $host = 'localhost';
 $dbusername = 'admin';
 $dbpassword = 'sysadmin';
 $dbname = 'Autoelevadores';

 $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
 if(mysqli_connect_error())
 {
   die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
 }
 else
 {
   $UPDATE = "UPDATE NUEVO_TURNO SET activo = 1";

   $stmt=$conn->prepare($UPDATE);
   $stmt->execute();
  
   echo "<script>window.location = 'http://localhost/index.html'</script>";

   $stmt->close();
   $conn->close();
 }


?>
