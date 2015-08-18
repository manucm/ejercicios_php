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
			<h1 class="centrar">Ejercicio1 <small>- Funciones matematicas -</small> </h1>
			
			<?php
			
			$numeric = 34.456;
			$entero  = 35;
			
			?>
			
			<table class="tabla">
				<thead>
					<tr>
						<th>Funcion</th>
						<th>Resultado</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Round</td><td><?php echo round($numeric,2); ?></td></tr>
					
					<tr><td>floor</td><td><?php echo floor($numeric); ?></td></tr>

					<tr><td>Pow</td><td><?php echo pow($numeric, 2); ?></td></tr>
					
					<tr><td>Sqrt</td><td><?php echo sqrt($numeric); ?></td></tr>					
					
					<tr><td>Hexadecimal</td><td><?php echo hexdec($entero); ?></td></tr>	
					
					<tr><td>Base4->Base8</td><td><?php echo base_convert($entero, 4, 8); ?></td></tr>
				</tbody>
			</table>
			
			
		
			
			
		</div>
		
		<a href="/index.php" class="enlaces_internos centrar">Inicio</a>
	</body>
</html>

<?php
