    
    
    function coinInserted() {
        
        if (gameEnabled === false && totalCoins > 0){
        
            var image = document.getElementById('levaPic');
            var coins = document.getElementById('insertCoinPic');
            var casella1 = document.getElementById('casella1');
            var casella2 = document.getElementById('casella2');
            var casella3 = document.getElementById('casella3');

            image.src = "images/leva0.png";

            casella1.src = "images/caselle/random.gif";
            casella2.src = "images/caselle/random.gif";
            casella3.src = "images/caselle/random.gif";

            gameEnabled = true;
            
            totalCoins--;
        }
    }