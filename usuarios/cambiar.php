<? 
//Invocamos la cadena de conexión que se encuentra en el archivo conexion.php
$link = mysql_connect("localhost","pepe","pepe");
     mysql_select_db("pepe", $link);
//Recibimos los parametros enviados mediante POST por el Formulario

$username = $_POST["username"];
$password = $_POST["password"];
$newPassword= $_POST["newPassword"];

$usuario = mysql_query("select idusuario from datos_usuarios where idusuario =  '".htmlentities($_POST["username"])."'",$link);
$nmyusuario = mysql_num_rows($usuario);

//Si existe el usuario, verificamos pass
if($nmyusuario != 0)
{

  $sql = "select idusuario
          from datos_usuarios
          where estado = 1
          and idusuario = '".htmlentities($_POST["username"])."' 
          and password = '".md5(htmlentities($_POST["password"]))."'";
  $myclave = mysql_query($sql,$link);
  $nmyclave = mysql_num_rows($myclave);

  //Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), cambiamos la contraseña
  if($nmyclave != 0)
  {

    $insertar = mysql_query("UPDATE `datos_usuarios` SET `password` = '".md5($newPassword)."' WHERE `datos_usuarios`.`idusuario` = '".$username."';",$link);
    if (!$insertar) echo"<script>alert('Error al guardar!');window.location.href=\"cambiar_contrasena.php\"</script>";
    else  echo"<script>alert('La clave se ha cambiado exitosamente');window.location.href=\"cambiar_contrasena.php\"</script>";
    session_start();
    session_destroy();
    header("Location: index.php");
  }
  else  echo"<script>alert('La clave del usuario no es correcta.'); window.location.href=\"cambiar_contrasena.php\"</script>";
}

else
{
  echo"<script>alert('El nombre de usuario no existe.');window.location.href=\"cambiar_contrasena.php\"</script>";
}


//Cerramos la conexión
// mysqli_close() es el evivalente a mysql_close() sirve para finalizar la conexión.
mysql_close($link);
?>