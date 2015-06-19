<? 
//Invocamos la cadena de conexión que se encuentra en el archivo conexion.php
$link = mysql_connect("localhost","pepe","pepe");
     mysql_select_db("pepe", $link);
//Recibimos los parametros enviados mediante POST por el Formulario

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$username = $_POST["username"];
$password = $_POST["password"];


$nuevoUsuario = mysql_query("select idusuario from datos_usuarios where idusuario =  '".htmlentities($_POST["username"])."'",$link);
     $nmyusuario = mysql_num_rows($nuevoUsuario);

     //Si no existe el usuario, creamos uno
     if(!$nmyusuario){
     	$insertar = mysql_query("INSERT INTO datos_usuarios (idusuario, password, nombres, apellidos, estado) VALUES ('$username','".md5($password)."','$nombres','$apellidos', '1')",$link);
		if (!$insertar){echo"<script>alert('Error al guardar!');window.location.href=\"crear_usuario.php\"</script>";}
		else{echo"<script>alert('Usuario creado con éxito');window.location.href=\"crear_usuario.php\"</script>";}
      
     }else{

          echo"<script>alert('El nombre de usuario ya existe.');window.location.href=\"crear_usuario.php\"</script>";
      }


//Cerramos la conexión
// mysqli_close() es el evivalente a mysql_close() sirve para finalizar la conexión.
mysql_close($link);
?>