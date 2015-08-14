<?
    
    if (!isset($_SESSION["user"])){     //se l'user non è loggato non puoi accedere alla pagina
        
        exit("Non hai i permessi per accedere a questa pagina");

    }

?>