<?php

	interface IFabricable 
	{
		/**
		 * Pasos para reciclar el elemento
		 */
		public function metodoFabricacion();
		
		/**
		 * Aplicar al elemento según su fabricación
		 */
		public function metodoReciclado();
	}
