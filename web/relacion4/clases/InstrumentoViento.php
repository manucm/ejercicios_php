<?php

	class InstrumentoViento extends InstrumentoBase{
		
		protected $material = "madera";
		
		//Constructor
		public function __construct($material="madera"){
			
			parent::__construct("instrumento de viento");
			$this->material=$material;
			
			
			
		}
		
		//El método afinar no debe ser redefinible en las clases 
		//derivadas de esta.
		public final function afinar()
		{
			echo "El instrumento se afina por un profesional.<br />\n";
		} 
		
		public function sonido(){
			echo "El instrumento hace iiiiiiiiiiiiiiii<br />\n";
		}
	
		
		
		//Redefinimos el método toString(); de la clase padre
		function __toString(){
			
			return parent::__toString()."<br />".
			        "Instrumento de material: $this->material <br />";
			
		}
		
		
	}