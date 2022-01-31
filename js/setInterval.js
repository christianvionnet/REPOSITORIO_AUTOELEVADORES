window.setInterval(function () {
  //This will trigger every X miliseconds

  let date = new Date(); //Creates a date that is set to the actual date and time

  let hours = date.getHours(); //Get that date hours (from 0 to 23)
  //console.log("Hora: "+hours);
  let minutes = date.getMinutes(); //Get that date minutes (from 0 to 59)
  //onsole.log("Minutos: "+minutes);

  if ((hours == 7 && minutes == 00)) {
    window.location.assign("http://192.168.100.25/inicio_desde_codigo.php");
    //~ console.log("opcion 1");
  } else if ((hour = 6 && minutes == 52)) {
    window.location.assign("http://192.168.100.25/inicio_desde_codigo.php");
    //~ console.log("opcion 2");
  } else if ((hour = 6 && minutes == 54)) {
    window.location.assign("http://192.168.100.25/inicio_desde_codigo.php");
    //~ console.log("opcion 3");
  }
}, 3000); //In that case 1000 miliseconds equals to 1 second
