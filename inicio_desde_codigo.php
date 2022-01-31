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
   $SELECT = "SELECT activo FROM NUEVO_TURNO";

   $stmt=$conn->query($SELECT);
   //~ $stmt->execute();
   
   $valor = $stmt->fetch_assoc();
   
   echo "activo = ";
   echo ($valor["activo"]);
  
   if($valor["activo"] == 0)
   {
	   echo "hola";
	  $sql = "SELECT * FROM TABLA_MPO_1, TABLA_MPO_2, TABLA_MPO_3 ORDER BY TABLA_MPO_1.id DESC, TABLA_MPO_2.id DESC, TABLA_MPO_3.id DESC LIMIT 1";
	  $result = $conn->query($sql);

	  if ($result->num_rows > 0) 
	  {
		echo "hola2";

		// output data of each row
		while($row = $result->fetch_assoc())
		{
		  if($row["mpo_1"] == 0)
		  {
			
			echo "<script>window.location = 'http://192.168.205.126/avisos/riesgoalto.html'</script>";
		  }
		  else if($row["mpo_2"] == 0)
		  {
			echo "<script>window.location = 'http://192.168.205.126/avisos/riesgoalto.html'</script>";
		  }
		  else if($row["mpo_3"] == 0)
		  {
			echo "<script>window.location = 'http://192.168.205.126/avisos/riesgoalto.html'</script>";
		  }
		  else if($row["mpo_4"] == 0)
		  {
			echo "<script>window.location = 'http://192.168.205.126/avisos/riesgobajo.html'</script>";
		  }
		  else if($row["mpo_5"] == 0)
		  {
			echo "<script>window.location = 'http://192.168.205.126/avisos/riesgobajo.html'</script>";
		  }
		  else if($row["mpo_6"] == 0)
		  {
			echo "<script>window.location = 'http://192.168.205.126/avisos/riesgobajo.html'</script>";
		  }
		  else if($row["mpo_7"] == 0)
		  {
			echo "<script>window.location = 'http://192.168.205.126/avisos/riesgoalto.html'</script>";
		  }
		  else if($row["mpo_8"] == 0)
		  {
			echo "<script>window.location = 'http://192.168.205.126/avisos/riesgoalto.html'</script>";
		  }
		  else if($row["mpo_9"] == 0)
		  {
			echo "<script>window.location = 'http://192.168.205.126/avisos/riesgoalto.html'</script>";
		  }
		  else if($row["mpo_10"] == 0)
		  {
			echo "<script>window.location = 'http://192.168.205.126/avisos/riesgoalto.html'</script>";
		  }
		  else if($row["mpo_11"] == 0)
		  {
			echo "<script>window.location = 'http://192.168.205.126/avisos/riesgobajo.html'</script>";
		  }
		  else if($row["mpo_12"] == 0)
		  {
			echo "<script>window.location = 'http://192.168.205.126/avisos/riesgobajo.html'</script>";
		  }
		  else
		  {
			  echo "<script>window.location = 'http://192.168.205.126/avisos/mpofinalizado.html'</script>";  
		  }
		}
	  }
	  else
	  {
		echo "0 results";
	  }
   }
   else
   {
	   echo "<script>window.location = 'http://192.168.205.126/index.html'</script>";  
   }

 $stmt->close();
 $conn->close();
 
}

?>
