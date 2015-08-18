<?php
	
	final class Flauta extends InstrumentoViento implements IFabricable
	{
		public function metodoFabricacion() {
			echo "El método de fabricación de la Flauta";
		}
		
		public function metodoReciclado() {
			echo "Método de reciclado de la Flauta";
		}
		
		public function __clone() {
			$this->edad=0;
		}
	}
