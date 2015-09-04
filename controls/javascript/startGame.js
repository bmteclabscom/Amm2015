
    gameEnabled = false;    //permette l'inserimento delle monete a inizio partita
        
    /**funzione usata ricorrentemente per permettere di aggiornare il numero delle monete*/
    function aggiornaMonete(){
        
        /**per poter aggiornare il valore in html ho dovuto esegure molti passaggi
         * per convertire gli interi a stringa senza che desse come errore 'undefined'*/
        var stringCoins = totalCoins.toString();
        var coinstring = "Coins: ";

        document.getElementById('score').innerHTML = coinstring.concat(stringCoins);
        
                    
        /*aggiorno in sessione il valore delle monete, meglio questo che finalmente funziona rispetto alla
            soluzione orribile di prima 
         Ero indeciso se metterlo qui o nella funzione che fa muovere la leva
         ma dato che il conto delle monete è aggiornato qui ho deciso per la prima opzione */
        $.post("game.php", {moneteClick: totalCoins});  

    }