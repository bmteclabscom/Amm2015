
/**semplicissima (e anche troppo) funzione ajax. Non sapevo in che altro modo integrarla
 * così si limita a caricare semplicemente un testo formattato in html*/

$(document).ready(function(){
    
    $("#plsClick").click(function(){

        $.ajax({ url: "views/dettagli.txt",     //scarica i dettagli dal file di testo
            
            success: function(result){
                //alert("WHY?!");
                $("#changeText").html(result);  //sostituisce il testo indicato con quello scaricato dal file txt
                $("#plsClick").hide();  //e nasconde il pulsante premuto
        }});
    
    });
    
});