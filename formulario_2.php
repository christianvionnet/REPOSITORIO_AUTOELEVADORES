<?php

 $mpo3 = $_POST['mpo3'];
 $mpo4 = $_POST['mpo4'];
 $mpo5 = $_POST['mpo5'];
 $mpo6 = $_POST['mpo6'];
 $mpo7 = $_POST['mpo7'];

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
  $INSERT = "INSERT INTO TABLA_MPO_2 (mpo_3, mpo_4, mpo_5, mpo_6, mpo_7) VALUES(?,?,?,?,?)";

   $stmt=$conn->prepare($INSERT);
   $stmt->bind_param("iiiii",$mpo3,$mpo4,$mpo5,$mpo6,$mpo7);
   $stmt->execute();
  
   echo "<script>window.location = 'http://localhost/mpo_3.html'</script>";
   //~ echo "<script>window.location = 'http://192.168.205.126/mpo_3.html'</script>";


   $stmt->close();
   $conn->close();
 }


?>
