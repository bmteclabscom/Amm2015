<?php

	class Elettronica extends OggettoBase {
		
		private $marca;
		private $memoriaPrincipale;
		private $memoriaSecondaria;
		private $voltaggio;
		
		public function __construct($nome, $id, $descrizione, $prezzo, $categoria, $marca, 
											$memoriaPrincipale, $memoriaSecondaria, $voltaggio){

			parent::__construct($nome, $id, $descrizione, $prezzo, $categoria);
			
			$this->marca = $marca;
			$this->memoriaPrincipale = $memoriaPrincipale;
			$this->memoriaSecondaria = $memoriaSecondaria;
			$this->voltaggio = $voltaggio;
		}
			
		public function getMarca(){
			
			return $this->marca;
		}
		
		public function getMemoriaPrincipale(){
			
			return $this->memoriaPrincipale;
		}
		
		public function getMemoriaSecondaria(){
			
			return $this->memoriaSecondaria;
		}
		
		public function getVoltaggio(){
			
			return $this->voltaggio;
		}
	}

?>
