
$(document).ready(function(){
    
    $("#plsClick").click(function(){

        $.ajax({url: "README.md", 
            
            success: function(result){
                alert("WHY?!");
                $("#changeText").html(result);
        }});
    
    });
    
});