
$(document).ready(function(){
    
    $("button").click(function(){
        
        $.ajax({url: "", 
            
            success: function(result){
                 $("#div1").html(result);
        }});
    });
});