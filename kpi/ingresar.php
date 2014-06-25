<? 
//Invocamos la cadena de conexión que se encuentra en el archivo conexion.php
$enlace = mysqli_connect('localhost', 'pepe', 'pepe', 'pepe');
//La condiciona que permite verificar que se logro conectar y envia el respective mensaje en cualquiera de los casos
if (!$enlace) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
//Recibimos los parametros enviados mediante POST por el Formulario

$fecha = $_POST["fecha"];
$produccion = $_POST["produccion"];

$insertar = mysqli_query($enlace,"INSERT INTO kpi (fecha, produccion) VALUES ('$fecha','$produccion')");
if (!$insertar){echo "Error al guardar";}else{echo "Guardado con exito";}
//Cerramos la conexión









// mysqli_close() es el evivalente a mysql_close() sirve para finalizar la conexión.
mysqli_close($enlace);
?>