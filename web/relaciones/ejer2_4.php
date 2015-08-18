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
			<h1 class="centrar">Ejercicio 4 <small>- Vectores -</small> </h1>
			
			<?php
			
				 $array = array();
				 
				 for ($i=1; $i <= 5; $i++) {
				 	for ($j=1; $j<=$i; $j++) {
				 		$array[$i][]=$i;
				 	}
				 } 
				
				echo '<div class="centrar">';
				
				foreach ($array as $clave => $valor) {
					foreach ($valor as $clave2 => $valor2) {
						echo "$valor2 ";
					}
					echo "<br />";
				}
				echo '</div>';
			
			
			?>
			
			
		
			
			
		</div>
		
		<a href="/index.php" class="enlaces_internos centrar">Inicio</a>
	</body>
</html>
