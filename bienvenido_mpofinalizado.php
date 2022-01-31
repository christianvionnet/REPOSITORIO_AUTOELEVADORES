<?php
	$conexion=mysqli_connect('localhost','admin','sysadmin','Autoelevadores');
?>

<!DOCTYPE html>

<html>
  <head>
    <title>MPO LINDE R-20 Bienvenida - MPO finalizado</title>

    <meta charset="utf-8" />
    <meta name="author" content="Christian Vionnet" />
    <meta
      name="description"
      content="Mantenimiento por operario autoelevador"
    />
    <meta
      name="keywords"
      content="mantenimiento, operario, autoelevador, linde, scania"
    />
    <meta
      name="viewport"
      content="widht=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta
      http-equiv="refresh"
      content="7;URL=http://localhost/avisos/mpofinalizado.html"
    />

    <link rel="icon" href="/imagen/scania_symbol.png" />
    <link rel="stylesheet" href="style4.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://static.scania.com/resources/fonts/scania-sans/scania-sans.css"
    />
  </head>
  <body class="body-container">
      <header class="header">
          <h1 class="title">MPO LINDE R-20</h1>
          <img class="mobile-logo " alt="logo scania" src="/imagen/scania2.png" />
      </header>

      <main class="">
        <div class="main">
          <h2 class="welcomeMessage">
            ¡HOLA
            <?php
            $sql="SELECT nombre FROM USUARIO_ACTIVO";
            $result=mysqli_query($conexion,$sql);
            
            while($mostrar=mysqli_fetch_array($result)) {
          ?>
            <p><?php echo $mostrar['nombre'] ?>!</p>
            </br>
            <p class="h2__p">TENÉS 2 MINUTOS PARA REALIZAR EL MPO</p>
            <P class="h2__p">Pasado ese tiempo, si no se completó el proceso se volverá a pedir.</P>
          <?php
            }
          ?>
          </h2>
        </div>
      </main>

      <footer>
        <div class="footer">Scania Argentina © 2021</div>
      </footer>
      <script src="setInterval.js">
      </script>
  </body>
</html>
