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
			<h1 class="centrar">Ejercicio2 <small>- Lanzamiento de dados -</small> </h1>
			
			<?php
			
			$numeric = 34.456;
			$entero  = 35;
			
			?>
			
			<table class="tabla">
				<thead>
				</thead>
				<tbody>
					
					<?php
						
						for($i=0; $i<6; $i++) {
							echo "<tr>";
							
							echo "<td>lanzamiento ".($i + 1)." del dado:</td>";
							echo "<td>".rand(1, 6)."</td>";
						}
					
					 ?>
				</tbody>
			</table>
			
			<?php
				
				$dado = array(1=>0, 2=>0, 3=>0, 4=>0, 5=>0, 6=>0);
				
				for ($i=0; $i<1000; $i++) {
					$dado[rand(1, 6)]++;
				}
			
				// var_dump($dado);
			?>
			
			<table class="tabla">
				<thead>
				</thead>
				<tbody>
					
					<?php
						
						foreach ($dado as $key => $value) {
							
						 
							echo "<tr>";
							
							echo "<td>el dado ".$key." ha salido:</td>";
							echo "<td>".$value."</td>";
							echo "<td>con un porcentaje de ".( $value/10) ."% </td>";
							echo "</tr>";
						}
					
					 ?>
				</tbody>
			</table>
		
			
			
		</div>
		
		<a href="/index.php" class="enlaces_internos centrar">Inicio</a>
	</body>
</html>
