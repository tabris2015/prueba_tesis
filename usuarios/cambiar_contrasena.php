<? include("../seguridad.php"); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  	<title>Usuarios</title>
  	<link rel="stylesheet" href="../css/estilo.css">
</head>
<div class="logo"><img alt="Pepsi" src="../imagen/AB.png" WIDTH=140 HEIGHT=60></img></div>
<div class="logo2"><img alt="Pepsi" src="../imagen/CBN.png" WIDTH=110 HEIGHT=35></img></div>


<body>

<!-- Contenido principal -->
<nav>
	<ul class="navbar">
		<li><a href="crear_usuario.php">crear usuario</a></li>
		<li><a href="cambiar_contrasena.php">cambiar contraseña</a></li>
		<li><a href="../kpi/kpi.php">kpi</a></li>
		<li><a href="">ayuda</a></li>
	</ul>			
</nav>
<h1>Usuarios</h1>
<h2>Ingrese sus datos</h2>
<section class="contenedor">
	<form id="formulario" name="form2" method="post" action="cambiar.php">
    	<p> Nombre de Usuario:  <br />  <input name="username" type="text" id="textfield" size="60" /></p>
    	<p> Contraseña:  <br />  <input name="password" type="password" id="textfield" size="60" /></p>
    	<p> Nueva Contraseña:  <br />  <input name="newPassword" type="password" id="textfield" size="60" /></p>
    	
    	
    	<p>
      		<input type="submit" name="button" id="button" value="Enviar" /><br />
    	</p>
  </form>
</section>	
	<div class="volver"><a href="../principal.php">VOLVER AL MENU</a></div>
</body>

</body>
</html>

