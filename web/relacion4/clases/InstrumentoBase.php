<?php

	abstract class InstrumentoBase
	{
		// Propiedades
		protected $descripcion;
		protected $edad;
		protected static $control;
		protected $numero;
		
		public function __construct($des, $e=10) {
			$this->descripcion = $des;
			$this->edad = $e;
			self::$control++;
			$this->numero=self::$control;
		}
		
		abstract public function sonido();
		
		abstract public function afinar();
		
		public function getEdad() {
			return $this->edad;
		}
		
		public function getDescripcion() {
			return $this->descripcion;
		}
		
		public function setEdad($valor) {
			$this->edad = $valor;
		}
		
		public function setDescripcion($valor) {
			$this->descripcion = $valor;
		}
		
		public function envejecer() {
			$this->edad++;
		}
		
		public function __toString() {
			return "Instrumento con descripcion {$this->descripcion}, número {$this->numero} de {$this->edad} años. La clase es ".get_class();
		}
	}
