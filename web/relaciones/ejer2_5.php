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
			<h1 class="centrar">Ejercicio 5 <small>- Vectores -</small> </h1>
			
			<?php
			
				 $vector=array();
				 $vector[1]="esto es una cadena";
				 $vector["posi1"]=25.67;
				 $vector[]=false;
				 $vector["ultima"]=array(2,5,96);
				 $vector[56]=23;
				 
				 foreach ($vector as $clave => $valor) {
				 	 $cadena = "";
					 $cadena .= "posicion $clave contenido ";
					 
					 $tipo = gettype($valor);
					 $cadena .= "$tipo: <br /><br>";
					 echo $cadena;
					 switch ($tipo) {
						 case 'array':
							 foreach ($valor as $key => $value) {
								 echo "$value <br />";
							 }
							 break;
							 
						 case 'integer':
							 echo "entero bonito valor $value en binario ".decbin($valor);
							 break;
						 case 'string':
							 echo "-$valor-";
							 break;
						 case 'double':
							 echo "Un real $valor que al cuadrado es ".pow($valor, 2);
							 break;
						 case 'boolean':
								echo "Un booleano $valor y su opuesto ".!$valor; 
							 break;
							 
							
						 
						 default:
							 
							 break;
					 }
					 
					 echo "<br />--------------------------------------------------<br />";
				 }
			
			
			?>
			
			
		
			
			
		</div>
		
		<a href="/index.php" class="enlaces_internos centrar">Inicio</a>
	</body>
</html>
