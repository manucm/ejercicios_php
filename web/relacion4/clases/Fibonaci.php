<?php

	class Fibonaci implements Iterator
	{
		// Propiedades
		private $_limit;
		private $_pos = 0;
		
		// constructor
		public function __construct($li) {
			$this->_limit = $li;
		}
		
		public function rewind() {
			return $this->_pos = 0;
		}
		
		public function current() {
			return (1/sqrt(5))*pow(((1+sqrt(5))/2), $this->_pos)- (1/sqrt(5))*pow(((1-sqrt(5))/2), $this->_pos)." ";
					
		}
		
		public function next() {
			return $this->_pos++;
		}
		
		public function key() {
			return $this->_pos;
		}
		
		public function valid() {
			return $this->_pos <= $this->_limit;
		}
	}
