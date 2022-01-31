<?php

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
  $sql = "SELECT * FROM TABLA_MPO_1 ORDER BY id DESC LIMIT 1";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) 
  {
    // output data of each row
    while($row = $result->fetch_assoc())
    {
      if($row["mpo_1"] == 0)
      {
        echo "<script>window.location = 'http://localhost/avisos/riesgoalto.html'</script>";
        //~ echo "<script>window.location = 'http://192.168.205.126/avisos/riesgoalto.html'</script>";

      }
      else if($row["mpo_2"] == 0)
      {
          echo "<script>window.location = 'http://localhost/avisos/riesgoalto.html'</script>";
          //~ echo "<script>window.location = 'http://192.168.205.126/avisos/riesgoalto.html'</script>";
      }
      else
      {
        echo "<script>window.location = 'http://localhost/formulariofinal_2.php'</script>";
        //~ echo "<script>window.location = 'http://192.168.205.126/formulariofinal_2.php'</script>";
      }
    }
  }
  else
  {
    echo "0 results";
  }
}

$conn->close();

?>
