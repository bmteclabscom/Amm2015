
$(document).ready(function(){
    
    $("button").click(function(){

        $.ajax({url: "README.md", success: function(result){
            $("#div1").html(result);
        }});
    
    });
    
});