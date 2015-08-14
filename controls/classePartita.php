<?

	/**la classe Partita gestisce in un' unica variabile tutte le impostazioni della partita
	 * Grazie alla confusione generata dal php sto capende l'importanza della programmazione ad oggetti
	 * al posto di quella procedurale*/

	class Partita {
		
		private $caselle;	//gestisce le caselle dello schermo
		private $coins;		//gestisce le monete
		
		//inizializza la partita al primo accesso
		public function __construct($user){		
		
			if ($user == "admin"){	//se sei admin, c'è un motivo!
                            $this->coins = 999;
                        }
			else {
				$this->coins = 3;	//altrimenti rimani pezzente e giochi con tre monete
                        }
                        
			$this->caselle = array(-1, -1, -1); //inizializza lo schermo con le immagini di default
			
		}
		
		//reinizializza le caselle
		public function inizializzaCaselle(){	
		
			$this->caselle = array(-1, -1, -1);
		}
		
		//reinizializza la partita
		public function inizializzaGioco(){	
		
			if ($user == "admin")	//se sei admin, c'è un motivo!
				$this->coins = 999;
			else
				$this->coins = 3;	//altrimenti rimani pezzente e giochi con tre monete
				
			$this->caselle = array(-1, -1, -1); //inizializza lo schermo con le immagini di default
		}
		
		/**appena inserisci un gettone, lo sottrae dai totali*/
		public function inserisciGettone(){
			
			if ($this->coins != 0)
				$this->coins =- 1;
		}
		
		/**mostra i gettoni a disposizione*/
		public function getCoins(){
		
			return $this->coins;
		}
		
		/***esegue la partita e sceglie dei numeri random da 0 a 4 corrispondenti a ogni immagine
		 * per decidere quali caselle possono uscire */
		public function gioco(){
			
                        $this->caselle[0] = rand(0, 4);
			$this->caselle[1] = rand(0, 4);
			$this->caselle[2] = rand(0, 4);
			
		}
		
		/**le prossime funzioni reagiscono a seconda delle figure simili che usciranno*/
		// 0
		public function fenoo(){
			
			$this->coins += 15;
		}
		
		//1
		public function tothor(){
			
			$this->coins -= 5;
		}
		
		//2
		public function scatenee(){
			
			$this->coins += 10;
		}
		
		//3
		public function bartawlettee(){
			
			$this->coins += 200;
		}
		
		//4
		public function atsawree(){
			
			$this->coins += 5;
		}
		
		/***è giusto tornare il risultato della caselle dato che sono una variabile privata*/
		public function getCaselle(){
			
			return $this->caselle;
		}
	}

?>
