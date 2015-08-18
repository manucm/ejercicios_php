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
			<h1 class="centrar">Ejercicio3 <small>- Vectores -</small> </h1>
			
			<?php
			
				$vector = array(1=>'Manolo', 16=>'Andasol', 54=>'Netpeople');
				$vector[] = 34;
				$vector['uno']='cadena';
				$vector['dos']=true;
				$vector['tres']=1.345;
				$vector[]=array(1.34, "nueva");
				
				
				var_dump($vector);
			
			
			?>
			
			
		
			
			
		</div>
		
		<a href="/index.php" class="enlaces_internos centrar">Inicio</a>
	</body>
</html>
