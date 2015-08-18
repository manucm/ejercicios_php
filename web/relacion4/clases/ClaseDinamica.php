<?php
	
	class ClaseDinamica
	{
		public function metodoExiste() {
			echo "Este método existe <br /> \n";
		}
		
		public function __call($nombre, $argumentos) {
			$cadena = implode(', ', $argumentos);
			
			echo "Se ha llamado al metodo $nombre con argumentos $cadena";
		}
		
		public static function __callStatic($nombre, $argumentos) {
			$cadena = implode($nombre, $argumentos);
			
			echo "Se ha llamado al método estático $nombre con argumentos $cadena";
		}
	}
