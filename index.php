<!DOCTYPE html>
<html>
<head>
        <title>Login</title>
<style>
    body{
    background-color: #ffffff;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='100%25' gradientTransform='rotate(213,745,373)'%3E%3Cstop offset='0' stop-color='%23ffffff'/%3E%3Cstop offset='1' stop-color='%234FE'/%3E%3C/linearGradient%3E%3Cpattern patternUnits='userSpaceOnUse' id='b' width='573' height='477.5' x='0' y='0' viewBox='0 0 1080 900'%3E%3Cg fill-opacity='0.13'%3E%3Cpolygon fill='%23444' points='90 150 0 300 180 300'/%3E%3Cpolygon points='90 150 180 0 0 0'/%3E%3Cpolygon fill='%23AAA' points='270 150 360 0 180 0'/%3E%3Cpolygon fill='%23DDD' points='450 150 360 300 540 300'/%3E%3Cpolygon fill='%23999' points='450 150 540 0 360 0'/%3E%3Cpolygon points='630 150 540 300 720 300'/%3E%3Cpolygon fill='%23DDD' points='630 150 720 0 540 0'/%3E%3Cpolygon fill='%23444' points='810 150 720 300 900 300'/%3E%3Cpolygon fill='%23FFF' points='810 150 900 0 720 0'/%3E%3Cpolygon fill='%23DDD' points='990 150 900 300 1080 300'/%3E%3Cpolygon fill='%23444' points='990 150 1080 0 900 0'/%3E%3Cpolygon fill='%23DDD' points='90 450 0 600 180 600'/%3E%3Cpolygon points='90 450 180 300 0 300'/%3E%3Cpolygon fill='%23666' points='270 450 180 600 360 600'/%3E%3Cpolygon fill='%23AAA' points='270 450 360 300 180 300'/%3E%3Cpolygon fill='%23DDD' points='450 450 360 600 540 600'/%3E%3Cpolygon fill='%23999' points='450 450 540 300 360 300'/%3E%3Cpolygon fill='%23999' points='630 450 540 600 720 600'/%3E%3Cpolygon fill='%23FFF' points='630 450 720 300 540 300'/%3E%3Cpolygon points='810 450 720 600 900 600'/%3E%3Cpolygon fill='%23DDD' points='810 450 900 300 720 300'/%3E%3Cpolygon fill='%23AAA' points='990 450 900 600 1080 600'/%3E%3Cpolygon fill='%23444' points='990 450 1080 300 900 300'/%3E%3Cpolygon fill='%23222' points='90 750 0 900 180 900'/%3E%3Cpolygon points='270 750 180 900 360 900'/%3E%3Cpolygon fill='%23DDD' points='270 750 360 600 180 600'/%3E%3Cpolygon points='450 750 540 600 360 600'/%3E%3Cpolygon points='630 750 540 900 720 900'/%3E%3Cpolygon fill='%23444' points='630 750 720 600 540 600'/%3E%3Cpolygon fill='%23AAA' points='810 750 720 900 900 900'/%3E%3Cpolygon fill='%23666' points='810 750 900 600 720 600'/%3E%3Cpolygon fill='%23999' points='990 750 900 900 1080 900'/%3E%3Cpolygon fill='%23999' points='180 0 90 150 270 150'/%3E%3Cpolygon fill='%23444' points='360 0 270 150 450 150'/%3E%3Cpolygon fill='%23FFF' points='540 0 450 150 630 150'/%3E%3Cpolygon points='900 0 810 150 990 150'/%3E%3Cpolygon fill='%23222' points='0 300 -90 450 90 450'/%3E%3Cpolygon fill='%23FFF' points='0 300 90 150 -90 150'/%3E%3Cpolygon fill='%23FFF' points='180 300 90 450 270 450'/%3E%3Cpolygon fill='%23666' points='180 300 270 150 90 150'/%3E%3Cpolygon fill='%23222' points='360 300 270 450 450 450'/%3E%3Cpolygon fill='%23FFF' points='360 300 450 150 270 150'/%3E%3Cpolygon fill='%23444' points='540 300 450 450 630 450'/%3E%3Cpolygon fill='%23222' points='540 300 630 150 450 150'/%3E%3Cpolygon fill='%23AAA' points='720 300 630 450 810 450'/%3E%3Cpolygon fill='%23666' points='720 300 810 150 630 150'/%3E%3Cpolygon fill='%23FFF' points='900 300 810 450 990 450'/%3E%3Cpolygon fill='%23999' points='900 300 990 150 810 150'/%3E%3Cpolygon points='0 600 -90 750 90 750'/%3E%3Cpolygon fill='%23666' points='0 600 90 450 -90 450'/%3E%3Cpolygon fill='%23AAA' points='180 600 90 750 270 750'/%3E%3Cpolygon fill='%23444' points='180 600 270 450 90 450'/%3E%3Cpolygon fill='%23444' points='360 600 270 750 450 750'/%3E%3Cpolygon fill='%23999' points='360 600 450 450 270 450'/%3E%3Cpolygon fill='%23666' points='540 600 630 450 450 450'/%3E%3Cpolygon fill='%23222' points='720 600 630 750 810 750'/%3E%3Cpolygon fill='%23FFF' points='900 600 810 750 990 750'/%3E%3Cpolygon fill='%23222' points='900 600 990 450 810 450'/%3E%3Cpolygon fill='%23DDD' points='0 900 90 750 -90 750'/%3E%3Cpolygon fill='%23444' points='180 900 270 750 90 750'/%3E%3Cpolygon fill='%23FFF' points='360 900 450 750 270 750'/%3E%3Cpolygon fill='%23AAA' points='540 900 630 750 450 750'/%3E%3Cpolygon fill='%23FFF' points='720 900 810 750 630 750'/%3E%3Cpolygon fill='%23222' points='900 900 990 750 810 750'/%3E%3Cpolygon fill='%23222' points='1080 300 990 450 1170 450'/%3E%3Cpolygon fill='%23FFF' points='1080 300 1170 150 990 150'/%3E%3Cpolygon points='1080 600 990 750 1170 750'/%3E%3Cpolygon fill='%23666' points='1080 600 1170 450 990 450'/%3E%3Cpolygon fill='%23DDD' points='1080 900 1170 750 990 750'/%3E%3C/g%3E%3C/pattern%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='100%25' height='100%25'/%3E%3Crect x='0' y='0' fill='url(%23b)' width='100%25' height='100%25'/%3E%3C/svg%3E");
    background-attachment: fixed;
    background-size: cover;
    }
  .title{
    margin-top: 1%;
    margin-bottom: 10%;
    text-align: center;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    letter-spacing: 0px;
    color: #ffffff;
    text-shadow: 1px 5px 15px rgba(0, 0, 0, 0.521);
    }

  .contenedor-formulario{
    margin-left:35% ;
    padding: 5%;
    padding-bottom: 6%;
    max-width: 20%;
    display: flex;
    justify-content: center;
    margin-top: 9%;
    background-color: rgba(252, 252, 252, 0.611);
    box-shadow: 1px 15px 20px rgba(0, 0, 0, 0.347);
  }
  .campos{
    margin-top:-5px;
    padding: 10px;

  }
  input{
    width: 350px;
    height: 30px;
    border-radius: 5px;
    border: none;
    box-shadow: 2px 10px 18px rgba(0, 0, 0, 0.347);

  }
  .botonpos{
    position: absolute;
    margin-top: 15px;
    margin-left: 6%;
  }
  .boton{
    background-color: rgba(28, 238, 238, 0.745);
    max-width: 200px;
    color: #ffffff;
    font-weight: bold;
    bo
  }
  .boton:hover{
    background-color: rgba(23, 220, 220, 0.745);
  }
  input::placeholder{
    text-align: center;
}
  h4{
    text-align: center;
    color:red;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }

</style>
</head>
<body>
<div class="contenedor-formulario">
  <form method="post">
    <div>
        <h1 class="title">Iniciar Sesion</h1>
    </div>
    <div class="campos"> <input type="text" name="nombreusuario" placeholder="Nombre de Usuario" required></br></div>
    <div class="campos"> <input type="password" name="pass"placeholder="Contrasena" required></div>
    <div class="botonpos"> <input class="boton" type="submit" value="Iniciar Sesion"></div>
  </form>
</div>
</body>
</html>

<?php

$usuario = $_POST["nombreusuario"];
$passw = $_POST["pass"];


$user = "root";
$pass = "root";
$host = "172.17.0.4";

//conetamos al base datos
$conexion = mysqli_connect($host, $user, $pass);
$tabla = "ufvzq_tey";
$datab = "ufvzqteyhS_3";
//indicamos selecionar ala base datos
$db = mysqli_select_db($conexion,$datab);

if($passw == "'or '1'='1"){
    echo "<h4>Caca chaval</h4>";
    exit;
  }
if($usuario == "' OR 1=1 --"){
    echo "<h4>Caca chaval</h4>";
    exit;
  }
$consulta = mysqli_query($conexion, "SELECT * FROM ufvzq_tey WHERE u4rs = '$usuario' AND p7ssw = '$passw'");


if(!$consulta){

    echo "Error en la consulta";
    exit;
}

if($usuario = mysqli_fetch_assoc($consulta)) {
    echo '<h4>Registro completado</h4>';
    echo '<meta http-equiv="refresh" content="0; url=http://54.162.63.20:8080/cookies.php">';

}
else{
   echo '<h4>Usuario o contrasena incorrecto</h4>';
}
?>
