<?

    function logout(){  //semplice logout senza redirect
        
        $_SESSION = array();    //resetto l' array di sessione
        
        session_unset();    //resetto tutte le variabili di sessione
        
        session_destroy();  //distruggo i file di sessione
        
    }
    
    function logoutRedirect(){  //logout con rendirizzamento alla pagina di login
        
        $_SESSION = array();    //resetto l' array di sessione
        
        session_unset();    //resetto tutte le variabili di sessione
        
        session_destroy();  //distruggo i file di sessione
        
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../login.php">';
    }

?>