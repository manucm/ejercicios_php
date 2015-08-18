<?php

	function cuentaVeces(&$array, $cadena, $numero) {
		static $x = 1;
		$array[$cadena]=$numero;
		
		echo "Llamada numero $x <br />";
		
		$x++;
	}
	
	function generarCadena($parametro=10) {
		$cadena ="";
		
		for($i=0; $i<$parametro;$i++) {
			$cadena .= chr(rand(0, 127));
		}
		return $cadena;
	}
	
	function operaciones($tipo, $oper1=1, $oper2=1) {
		
		$valores = func_get_args();
		$resultado = 0;
		
		
		
		switch ($tipo) {
			case 1:
				
				for ($i=1;$i<count($valores);$i++) {
					$resultado += $valores[$i];
				}
				
				break;
				
			case 2:
				
				$resultado = $valores[1];
				
				for ($i=2;$i<count($valores);$i++) {
					$resultado -= $valores[$i];
				}
				
				break;
				
			case 3:
				$resultado=1;
				for ($i=1;$i<count($valores);$i++) {
					$resultado *= $valores[$i];
				}
				
				break;
			
			default:
				$impares = 0;
				$pares = 0;
				
				for ($i=1;$i<count($valores);$i++) {
					
					if ($i%2==0)
						$pares += $valores[$i];
					else 
						$impares +=$valores[$i];
					$resultado = $pares-$impares;
				}
				
				break;
		}
		
		return $resultado;
	} 
	
	function devuelve(&$valor, $a, $b) {
		$suma = $valor + $a + $b;
		$multi = $valor*$a*$b;
		
		$valor = $suma;
		
		return $multi;
	}
	
	function suma($a, $b) {
		return $a+$b;
	}
	
	function resta($a, $b) {
		return $a-$b;
	}
	
	function multiplicacion($a, $b) {
		return $a*$b;
	}
	
	function hacerOperacion($cadena, $a, $b) {
		if ($cadena=='suma' || $cadena=='resta' || $cadena=='multiplicacion')
			return $cadena($a, $b);
		else {
			return false;
		}
	}
	
	function ordenar(array &$vector) {
		return usort($vector, function($a, $b) {
			if (strlen($a)==strlen($b)) 
				return 0;
			else if (strlen($a) > strlen($b)) {
				return -1;
			}
			else {
				return 1;
			}
		});
	}
