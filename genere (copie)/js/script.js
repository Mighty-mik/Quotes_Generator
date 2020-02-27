$(document).ready(function(){
    $("#mk").click(function(){
     $.ajax({
            url :'function.php',
            success : function(reponse){ 
            $("#main-container").html(reponse);}
           
                    
        })
    })

});
