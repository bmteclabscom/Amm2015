<?php

	class Libri extends OggettoBase {
		
		private $autore;
		private $genere;
		private $pagine;
		
		public function __construct($nome, $id, $descrizione, $prezzo, $categoria, $autore, $genere, $pagine){

			parent::__construct($nome, $id, $descrizione, $prezzo, $categoria);
			
			$this->autore = $autore;
			$this->genere = $genere;
			$this->pagine = $pagine;
		}
			
		public function getAutore(){
			
			return $this->autore;
		}
		
		public function getGenere(){
			
			return $this->genere;
		}
		
		public function getPagine(){
			
			return $this->pagine;
		}
	}

?>
