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
			<h1 class="centrar">Relacion 3 <small>- Funciones -</small> </h1>
			
			<h3>Probamos ejercicio1 - cuentaVeces</h3>
			<?php
			
			include '../relacion3/libreria.php';
			
			  $array = array();
			  
			  cuentaVeces($array, "Hola", 12);
			  cuentaVeces($array, "segundo", 112);
			  cuentaVeces($array, "ter", 42);
			  cuentaVeces($array, "vamos", 12);
				
			  foreach ($array as $key => $value) {
				  echo "$key => $value <br />";
			  }
			
			 echo "<h3>ejercicio 2 - generarCadena </h3>";
			echo generarCadena();
			
			echo "<h3>ejercicio 3 - operaciones </h3>";
			
			echo "El resultado de la operacion es: ". operaciones(1,10,3,4,5)."<br />";
			echo "El resultado de la operacion es: ". operaciones(2,10,3,4,5)."<br />";
			echo "El resultado de la operacion es: ". operaciones(3,10,3,4,5)."<br />";
			echo "El resultado de la operacion es: ". operaciones(4,10,3,4,5)."<br />";
			
			echo "<h3>ejercicio 4 - devuelve </h3>";
			
			$valor = 10;
			$multi = devuelve($valor, 3, 6);
			
			echo "multiplicacion: $multi / suma: $valor";
			
			echo "<h3>ejercicio 5 - hacerOperacion </h3>";
			
			echo hacerOperacion('suma', 6, 2)."<br />";
			echo hacerOperacion('multiplicacion', 6, 2)."<br />";
			echo hacerOperacion('resta', 6, 2)."<br />";
			
			echo "<h3>ejercicio 6 - ordenadar usort y funciones anonimas </h3>";
			
			$vector = array('casa', 'coche', 'guarnicion', 'chucheria', 'si');
			
			ordenar($vector);
			
			var_dump($vector);
			?>
			
			
		
			
			
		</div>
		
		<a href="/index.php" class="enlaces_internos centrar">Inicio</a>
	</body>
</html>
