<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicios</title>
		<link rel="stylesheet" href="/css/estilos.css"/>
		<script type="text/javascript" src="/js/personal.js"></script>
		<script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
	</head>
	<body>
		<h1>Relacion 1</h1>
		
		<a href="/index.php" class="enlaces_internos">Inicio</a>
		
		<h2>Ejercicio 1</h2>
		
		<?php
		
			$cadena = "Esto es una cadena";
			
			for ($i=0; $i<strlen($cadena); $i++) {
				for($j=0; $j<$i; $j++) {
					echo "&nbsp";
				}
				echo "$cadena[$i]<br>";
			}
		?>
		
		<h2>Ejercicio 2</h2>
		
		<?php
			$cadena = strrev($cadena);
			for ($i=0; $i<strlen($cadena); $i++) {
				for($j=0; $j<$i; $j++) {
					echo "&nbsp";
				}
				if ($i%2==0	)
					echo strtoupper($cadena[$i])."<br>";
				else {
					echo strtolower($cadena[$i])."<br>";
				}
			}
		?>
		
		<h3>Ejercicio 3</h3>
		
		<?php
		
			$cadena = strrev($cadena);
			
			$tok=strtok($cadena, "e");
			while($tok!=FALSE) {
				echo $tok."<br>";
				$tok=strtok("e");
			}
		?>
		
		<h3>Ejercicio 4</h3>
		
		<?php
			
			// localizamos la palabra una y le sumamos
			// el numero de caracteres de la palabra una 
			$num =  strpos($cadena, "una") + strlen("una");
			
			echo substr_replace($cadena, " especial ", $num, 1);
			
			// se podría hacer en una única linea
			// echo substr_replace($cadena, " especial ", strpos($cadena, "una") + strlen("una"), 1);
			
		?>
		
		<h3>Ejercicio 5</h3>
		
		<?php
		
			$float = 17.5;
			$float_2 = 379987.2375;
			$string = "cadena";
			
			
			printf("la cadena es: %s, el primer valor-%0'09.1f-, ".
	            "el segundo valor -%s-",$string,$float,
	            number_format($float_2,2));	
		
		?>
	</body>
</html>
