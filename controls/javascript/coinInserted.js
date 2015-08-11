    
    /**funzione che inserisce le monete per poter giocare
     * si attiva al click sull'immagine */
    function coinInserted() {
        
        if (totalCoins <= 0){   //se non hai soldi non puoi giocare!
            
            alert("You've got no money!");
        }
        
        if (gameEnabled === false && totalCoins > 0){   //se non hai già inserito monete e ne hai a disposizione, giochi
        
            /**collego i vari elementi del document */
            var image = document.getElementById('levaPic');
            var coins = document.getElementById('insertCoinPic');
            var casella1 = document.getElementById('casella1');
            var casella2 = document.getElementById('casella2');
            var casella3 = document.getElementById('casella3');

            image.src = "images/leva0.png";    //alzo la leva

            /**avvio l'animazione della slot machine*/
            casella1.src = "images/caselle/random.gif";
            casella2.src = "images/caselle/random.gif";
            casella3.src = "images/caselle/random.gif";

            gameEnabled = true;     //da adesso è possibile azionare la leva
            
            totalCoins--;   //giustamente ti prendo una moneta
            
            aggiornaMonete();   //e aggiorno il totale delle tue monete
        }
        
    }