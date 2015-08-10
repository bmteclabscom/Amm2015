<?php

	$partita->gioco();	//estrae i numeri a caso

	$checkCaselle = $partita->getCaselle();		//passo i risultati per l'analisi

	if($checkCaselle[0] == $checkCaselle[1] && $checkCaselle[1] == $checkCaselle[2]){	//se sono uscite caselle tutte uguali
		
		switch ($checkCaselle[0]) {		//confronto solo la prima con i possibili risultati ottenibili
			
			case 0: $partita->fenoo();
				break;
			case 1: $partita->tothor();
				break;
			case 2: $partita->scatenee();
				break;
			case 3: $partita->bartawlettee();
				break;
			case 4:	$partita->atsawree();
				break;
		}
		
	}

?>
