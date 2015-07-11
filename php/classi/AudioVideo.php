<?php

	class AudioVideo extends Libri {
		
		
		public function __construct($nome, $id, $descrizione, $prezzo, $categoria, $autore, $genere, $durata){

			parent::__construct($nome, $id, $descrizione, $prezzo, $categoria, $autore, $genere, $durata);
			
		}
	
		public function getDurata(){
			
			return $this->pagine;
		}
		
	}
			

?>
