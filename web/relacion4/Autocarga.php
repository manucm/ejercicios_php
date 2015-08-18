<?php
	
	function cargaClase($clase) {
		
		$ruta = $_SERVER['DOCUMENT_ROOT'];
		
		
		$fichero=$ruta."/relacion4/clases/".$clase.".php";
		
		if (file_exists($fichero))
			include_once($fichero);
		
		
	}
	spl_autoload_register("cargaClase");
