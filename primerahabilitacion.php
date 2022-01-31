<?php
 
 $host = "localhost";
 $dbusername = "admin";
 $dbpassword = "sysadmin";
 $dbname = "Autoelevadores";

 $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

 if(mysqli_connect_error())
 {
   die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
 }
 else
 {

   echo "Conecction established </br>";
   
   $SELECT = "SELECT * FROM HABILITACION ORDER BY id DESC LIMIT 1";
   
   $result=$conn->query($SELECT);
   //$result->execute();
   
   $row = $result->fetch_assoc();
   $habilitado = $row["habilitado"];
   
   if ($row) {
     
     echo "holis";
     
     $UPDATE = "UPDATE HABILITACION SET id = '1', habilitado = '1'";
     
     $result=$conn->query($UPDATE);
     //$result->execute()
     
   } else {
     
     $INSERT = "INSERT INTO HABILITACION (id,habilitado) VALUES (1,0)";
     
     $result=$conn->query($INSERT);
   }


   
   //$UPDATE = "UPDATE HABILITACION SET habilitado VALUES(1)";

   //$stmt=$conn->prepare($INSERT);
   //$stmt->bind_param("i",$enable);
   //$stmt->execute();
  
   echo "<script>window.location = 'http://localhost/mpo_1.html'</script>";
   //~ echo "<script>window.location = 'http://192.168.205.126/mpo_1.html'</script>";

   
   $result->close();
   $conn->close();
 }


?>
