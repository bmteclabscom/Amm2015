<?

    /**se ho già mandato monete durante la partita prendo il valore e torno a giocare*/

    if (isset($_POST["moneteClick"])){
        $_SESSION["monete"] = $_POST["moneteClick"];
    }
        
?>