<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Monitor de Energía</title>
		<link rel="stylesheet" href="../css/estilo.css">
		<script type="text/javascript" src="../js/jquery-1.7.1.min.js" ></script>
		<script type="text/javascript">
$(function() {
	$.getJSON('HTTP://localhost/cambio1/kpi/getkpi.php', function(data) {

		
		// create the chart
		$('#container').highcharts('StockChart', {
		    chart: {
		        alignTicks: false
		    },

		    rangeSelector: {
		        selected: 1
		    },

		    title: {
		        text: 'Consumo de Energia '
		    },
			subtitle: {
		        text: 'Servicio de Frio'
		    },

		    series: [{
		        type: 'column',
		        name: 'KWh',
			pointInterval: 24 * 3600 * 1000,
			pointStart: Date.UTC(2012, 11, 31),
		        data: data,
		        dataGrouping: {
					units: [[
						'week', // unit name
						[1] // allowed multiples
					], [
						'month',
						[1, 2, 3, 4, 6]
					]]
		        }
		    }]
		});
	});
});
		</script>
	</head>
	<body>
	<script src="../js/highstock.js"></script>
	<script src="../js/modules/exporting.js"></script>
	<script type="text/javascript" src="../js/themes/grid.js"></script>

	<div class="logo"><img alt="Pepsi" src="../imagen/AB.png" WIDTH=140 HEIGHT=60></img></div>
	<div class="logo2"><img alt="Pepsi" src="../imagen/CBN.png" WIDTH=110 HEIGHT=35></img></div>

	

	<section class="contenedor">
        <h1> CONTROL DE CONSUMO DE EE <br> SD EL ALTO </h1>
		<menu class="menuizq">
			
			<ul>
			<li><a href="empacar.htm">EMPACAR</a></li>
			<li><a href="frio.htm">Servicio de Frio</a></li>
			<li><a href="aire.htm">Servicio de Aire</a></li>
			<li><a href="vapor.htm">Servicio de Vapor</a></li>
			</ul>			

		</menu>
		<section class="canvas">
			<div id="container"></div>
		</section>
	</section>	
	<div class="volver"><a href="../principal.php"> <h5>Back</h5></a></div>

	</body>
</html>
