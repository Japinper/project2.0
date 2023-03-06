<?php
function ruta(){
        echo '<meta http-equiv="refresh" content="0; url=http://192.168.125.129:8080">';
}
//validamos datos del servidor
$user = "root";
$pass = "root";
$host = "172.17.0.2";

//conetamos al base datos
$conexion = mysqli_connect($host, $user, $pass);
$tabla = "registros";

//formuario
$nombre = $_POST["nombreusuario"] ;
$email = $_POST["email"] ;
$passw = $_POST["pass"] ;


//verificamos la conexion a base datos
if(!$conexion)
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "Hemos conectado al servidor" ;
        }
        //indicamos el nombre de la base datos
        $datab = "registro";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($conexion,$datab);

        if (!$db)
        {
        echo "Error al Registrar";
        }
        else
        {
        echo "<h1>Registro completado</h1>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO $tabla (nombreusuario, email, pass)
                             VALUES ('$nombre','$email','$passw')";
        ruta();
        $resultado = mysqli_query($conexion,$instruccion_SQL);
mysqli_close( $conexion );
?>
