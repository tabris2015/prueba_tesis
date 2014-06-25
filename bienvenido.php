<? include("seguridad.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  	<title>Ingreso al Sistema</title>
  	<link rel="stylesheet" href="css/estilo.css">
</head>
<div class="logo"><img alt="Pepsi" src="imagen/AB.png" WIDTH=140 HEIGHT=60></img></div>
<div class="logo2"><img alt="Pepsi" src="imagen/CBN.png" WIDTH=110 HEIGHT=35></img></div>

<body>
<div class="contenedor">
	<h1>Bienvenido al sistema!</h1>
	<h2>Usuario: <? echo $_SESSION["usuarioactual"]; ?> </h2><br>
	<p>Entro correctamente al sistema.</p><br><br>
</div>

<ul class="navbar">
	<li><a href="principal.php">CONTINUAR</a><br></li>
	<li><a href="salir.php">Salir</a></li>
</ul>
</body>
</html>
