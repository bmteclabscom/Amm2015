<?
    session_start();

    include("logout.php");  //include il file che contiene la funzione logoutRedirect()

    logoutRedirect();   //chiude la sessione e reindirizza alla pagina di login

?>