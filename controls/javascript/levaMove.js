
    function levaMove() {
        var image = document.getElementById('levaPic');
        if (image.src.match("images/leva0.png")) {
            image.src = "images/leva1.png";
        } else {
            image.src = "images/leva0.png";
        }
    }
