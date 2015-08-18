<?php
	include_once("Autocarga.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Relacion 4</title>
		<link rel="stylesheet" href="/css/estilos.css"/>
		<script type="text/javascript" src="/js/personal.js"></script>
		<script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
	</head>
	<body>
		<div id="content-wrap">
			<h1 class="centrar">Relacion 4 <small>- Clases -</small> </h1>
			
			<?php
			
			$flauta = new InstrumentoViento();
			
			echo $flauta->sonido();
			echo $flauta->afinar();
			$flauta->envejecer();
			echo $flauta->getEdad()."<br/>";
			echo $flauta->getDescripcion()."<br>";
			printf($flauta);
			
			$flauta2 = new Flauta();
			
			echo $flauta2->sonido();
			echo $flauta2->afinar();
			$flauta2->envejecer();
			echo $flauta2->getEdad()."<br/>";
			echo $flauta2->getDescripcion()."<br>";
			printf($flauta2);
			
			$flauta3 = clone $flauta2;
			
			echo $flauta3->sonido();
			echo $flauta3->afinar();
			$flauta3->envejecer();
			echo $flauta3->getEdad()."<br/>";
			echo $flauta3->getDescripcion()."<br>";
			printf($flauta3);
			
			$obj = new ClaseDinamica();
			
			$obj->metodoNoExiste(34, "hola");
			
			$obj = new Fibonaci(10);
			
			foreach ($obj as $key => $value) {
				echo "F($key) = $value <br />";
			}
			
			  
			?>
			
			
		
			
			
		</div>
		
		<a href="/index.php" class="enlaces_internos centrar">Inicio</a>
	</body>
</html>
