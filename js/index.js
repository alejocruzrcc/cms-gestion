 $(document).ready(function(){

    $("#start").click(function(){


            $.post('create.php', { }, function(result) { 
               if(result = "01"){
                   
                    $("#start").attr("href", "activity.html");                
               }  
             });

    });
 });