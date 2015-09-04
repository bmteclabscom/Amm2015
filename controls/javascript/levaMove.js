
    /**abbassa la leva al click*/
    function levaMove() {
        
        if (gameEnabled === true) {     //se il gioco non è avviato non puoi azionare la leva
        
            var image = document.getElementById('levaPic');

            if (image.src.match("images/leva0.png")) {
                image.src = "images/leva1.png";
            } 

            var casella1, casella2, casella3;   //variabili che definiscono il valore random

            //genero valori casuali
            casella1 = Math.floor((Math.random() * 5) + 1 );
            casella2 = Math.floor((Math.random() * 5) + 1 );
            casella3 = Math.floor((Math.random() * 5) + 1 );

            //collego il codice all' html
            var pic1 = document.getElementById('casella1');
            var pic2 = document.getElementById('casella2');
            var pic3 = document.getElementById('casella3');

            /**a seconda dei numeri estratti posiziono le immagini nelle caselle*/
            switch (casella1) {

                case 1: pic1.src = "images/caselle/gianni.png";
                    break;
                case 2: pic1.src = "images/caselle/todor.png";
                    break;
                case 3: pic1.src = "images/caselle/riccardone.png";
                    break;
                case 4: pic1.src = "images/caselle/massimo.jpg";
                    break;
                case 5: pic1.src = "images/caselle/maurizio.png";
                    break;
            }

            switch (casella2) {

                case 1: pic2.src = "images/caselle/gianni.png";
                    break;
                case 2: pic2.src = "images/caselle/todor.png";
                    break;
                case 3: pic2.src = "images/caselle/riccardone.png";
                    break;
                case 4: pic2.src = "images/caselle/massimo.jpg";
                    break;
                case 5: pic2.src = "images/caselle/maurizio.png";
                    break;
            }

            switch (casella3) {

                case 1: pic3.src = "images/caselle/gianni.png";
                    break;
                case 2: pic3.src = "images/caselle/todor.png";
                    break;
                case 3: pic3.src = "images/caselle/riccardone.png";
                    break;
                case 4: pic3.src = "images/caselle/massimo.jpg";
                    break;
                case 5: pic3.src = "images/caselle/maurizio.png";
                    break;
            }
        
            /**se dovessero esserci delle caselle uguali verranno assegnate delle monete
             * come premio e in alcuni casi un easter egg*/
            if (casella1 == casella2 && casella2 == casella3){
                
                switch (casella1) {

                    case 1:  $("div.homepage").css("background-color", " #1560BD"); //fenu rimette tutto a posto!
                        alert("Fenu gives you 15 coins!");
                        totalCoins += 15;
                        aggiornaMonete();
                        break;
                        
                    case 2: $("div.homepage").css("background-color", "white");
                        alert("OMG IT'S TODOR! He just whitelized your blackboard and stole you 5 coins!");
                        totalCoins -= 5;
                        aggiornaMonete();
                        break;
                        
                    case 3:  
                        alert("Scateni wants to play Pong! But he gives you 10 coins");
                        totalCoins += 10;
                        aggiornaMonete();
                        break;
                        
                    case 4:  
                        alert("OMG Bartoletti just hacked the system and gives you 200 coins!");
                        totalCoins += 200;
                        aggiornaMonete();
                        break;
                        
                    case 5:  
                        alert("Atzori won the Google Prize! And gives you 5 coins");
                        totalCoins += 5;
                        aggiornaMonete();
                        break;
                        
                }
                
            }

            
            if (totalCoins === 0){  //se finisci le monete, game over
                
                alert("GAME OVER\nIl gioco \xE8 vietato ai minori e pu\xF2 causare dipendenza patologica");
            }

            gameEnabled = false;    //per continuare a giocare devi inserire monete!
            
            }
    }
