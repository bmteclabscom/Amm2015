<?

    function logout(){
        
        $_SESSION = array();
        
        session_unset(); 
        
        session_destroy();
        
    }
    
    function logoutRedirect(){
        
        $_SESSION = array();
        
        session_unset(); 
        
        session_destroy();
        
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../login.php">';
    }

?>