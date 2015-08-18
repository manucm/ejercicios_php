<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Relacion 2 - ejer 1</title>
		<link rel="stylesheet" href="/css/estilos.css"/>
		<script type="text/javascript" src="/js/personal.js"></script>
		<script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
	</head>
	<body>
		<div id="content-wrap">
			<h1 class="centrar">Ejercicio 6 <small>- Vectores -</small> </h1>
			
			<?php
			
				$vector = array("primera"=>12.56, 24=>true, 67=>23.76);
				
				$claves = array_keys($vector);
				$valores = array_values($vector);
				
				for ($i=0; $i < count($claves); $i++) {
					echo $claves[$i]. " => " .$valores[$i]. "<br />";
				}
				
			
			
			?>
			
			
		
			
			
		</div>
		
		<a href="/index.php" class="enlaces_internos centrar">Inicio</a>
	</body>
</html>
