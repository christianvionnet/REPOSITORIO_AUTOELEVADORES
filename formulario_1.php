<?php

     $mpo1 = $_POST["mpo1"];
     $mpo2 = $_POST["mpo2"];

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
   $INSERT = "INSERT INTO TABLA_MPO_1 (mpo_1,mpo_2) VALUES(?,?)";

   $stmt=$conn->prepare($INSERT);
   $stmt->bind_param("ii",$mpo1,$mpo2);
   $stmt->execute();
  
   echo "<script>window.location = 'http://localhost/mpo_2.html'</script>";
   //~ echo "<script>window.location = 'http://192.168.205.126/mpo_2.html'</script>";


   $stmt->close();
   $conn->close();
 }

     

?>
