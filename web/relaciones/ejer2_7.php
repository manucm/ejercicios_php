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
			<h1 class="centrar">Ejercicio7 <small>- Fechas -</small> </h1>
			
			<?php
				
				$fecha_actual = new DateTime();
				
				echo  "fecha en formato 'd/m/Y' => ". $fecha_actual->format('d/m/Y')."<br />";
				echo  "fecha en formato 'd/m/Y' => ". date("\d\i\a d \d\e \l\a \s\e\m\a\n\a w")."<br />";
				echo date("\d\i\a d \d\e M \d\e Y, \d\i\a \d\e \l\a \s\e\m\a\n\a w")."<br />\n";
				echo "hora actual en el formato hh:mm:ss.mmm => ". $fecha_actual->format('H:i:s');
			?>
			
			
		
			
			
		</div>
		
		<a href="/index.php" class="enlaces_internos centrar">Inicio</a>
	</body>
</html>
