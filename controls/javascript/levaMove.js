
    /**abbassa la leva al click*/
    function levaMove() {
        
        var image = document.getElementById('levaPic');
        
        if (image.src.match("images/leva0.png")) {
            image.src = "images/leva1.png";
        } 
    }
