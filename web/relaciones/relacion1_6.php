<?php

	global $cadena;
	
	$cadena = <<<fin
	Mi querida amiga <br />
	escribo estas líneas esperando que me leas. <br />
	Firmado: Manuel <br />
fin;



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
		<h1>Relacion 1 <small> - Ejercicio6 -</small></h1>
		<fieldset>
			<legend>formulario</legend>
			<form action="" method="GET">
				<div>
					<label for="in_1">Introduzca patron de busqueda</label>
					<input id="in_1" type="text" name="cadena" value="<?php echo isset($_GET['cadena'])?$_GET['cadena']:"" ?>"/>
				</div>
				
				<input type="submit" value="Comprobar" />
			</form>
		</fieldset>
		
		<?php
		
			if (isset($_GET['cadena'])) {
				$cad = $_GET['cadena'];
				$patron = "/$cad/";
				preg_match_all($patron, $cadena, $repeticiones);
				
				
				?>
				<div>
					<h2>El resultado de la búsqueda es:</h2>
					
					
						<?php
						$resultado = "";
						var_dump($repeticiones);
							foreach ($repeticiones as $key => $value) {
								foreach ($value as $subkey => $subvalue) {
									$resultado .= $subvalue." ";
								}
							}
						?>
					<textarea><?php echo $resultado; ?></textarea>
					
					<p>El texto donde buscar es:</p>
					<?php echo "<p>$cadena</p>"; ?>
				</div>
				
				<?php
				
			}
			
		?>
	</body>
</html>





