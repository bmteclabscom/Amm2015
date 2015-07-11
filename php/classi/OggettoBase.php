<?php

	class OggettoBase {
		
		private $nome;
		private $id;
		private $descrizione;
		private $prezzo;
		private $categoria;
		
		public function __construct($nome, $id, $descrizione, $prezzo, $categoria){
			
			$this->nome = $nome;
			$this->id = $id;
			$this->descrizione = $descrizione;
			$this->prezzo = $prezzo;
			$this->categoria = $categoria;
		
		}
		
		public function getNome(){
		
			return $this->nome;
		}
		
		public function getId(){
		
			return $this->id;
		}
		
		public function getDescrizione(){
		
			return $this->descrizione;
		}
		
		public function getPrezzo(){
		
			return $this->prezzo;
		}
		
		public function getCategoria(){
		
			return $this->categoria;
		}
	}

?>
