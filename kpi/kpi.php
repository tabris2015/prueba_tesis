<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  	<title>Monitoreo de Energía</title>
  	<link rel="stylesheet" href="../css/estilo.css">
</head>
<div class="logo"><img alt="Pepsi" src="../imagen/AB.png" WIDTH=140 HEIGHT=60></img></div>
<div class="logo2"><img alt="Pepsi" src="../imagen/CBN.png" WIDTH=110 HEIGHT=35></img>C</div>


<body>

<!-- Contenido principal -->
<h1>KPI</h1>

<h2>Ingresar datos</h2>
			<nav>
				<ul class="navbar">
					<li><a href="kpi.php">Ingresar datos</a></li>
					<li><a href="graf_kpi.php">Gráficas</a></li>
					<li><a href="../principal.php">Volver</a></li>
				</ul>			
			</nav>

<section class="contenedor">

<form id="form1" name="form2" method="post" action="ingresar.php">

    <p>Fecha: <br />  <input name="fecha" type="date" value="<?php echo date("Y-m-d") ?>" /><br />
    <p> Volumen producido:  <br />  <input name="produccion" type="text" id="textfield" size="6" />
       </p>
    <p>
      <input type="submit" name="button" id="button" value="Enviar" />
      <br />
    </p>
  </form>
</section>	
	<div class="volver"><a href="../principal.php">Volver</a></div>
</body>

</body>
</html>

