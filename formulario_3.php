<?php

 $mpo8 = $_POST['mpo8'];
 $mpo9 = $_POST['mpo9'];
 $mpo10 = $_POST['mpo10'];
 $mpo11 = $_POST['mpo11'];
 $mpo12 = $_POST['mpo12'];

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
   $INSERT = "INSERT INTO TABLA_MPO_3 (mpo_8, mpo_9, mpo_10, mpo_11, mpo_12) VALUES(?,?,?,?,?)";

   $stmt=$conn->prepare($INSERT);
   $stmt->bind_param("iiiii",$mpo8,$mpo9,$mpo10,$mpo11,$mpo12);
   $stmt->execute();
   $stmt->close();

   $UPDATE = "UPDATE HABILITACION SET id = '1', habilitado = 1";
   $stmt=$conn->prepare($UPDATE);
   $stmt->execute();
   $stmt->close();
   
   $UPDATE = "UPDATE FIN_DE_MPO SET finalizado = 1";
   $stmt=$conn->prepare($UPDATE);
   $stmt->execute();
   $stmt->close();
   
   $UPDATE = "UPDATE NUEVO_TURNO SET activo = 0";
   $stmt=$conn->prepare($UPDATE);
   $stmt->execute();
  
   echo "<script>window.location = 'http://localhost/formulariofinal_1.php'</script>";
   //~ echo "<script>window.location = 'http://192.168.205.126/formulariofinal_1.php'</script>";


   $stmt->close();
   $conn->close();
 }


?>
