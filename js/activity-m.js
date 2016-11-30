$(document).ready(function(){

var urlvideo;
var urlpresentacion;

// Configuracion de magistral - video
     
    $("#reproductor").click(function(){
        $(".admin-frame").attr("id", "video");
        $(".componentes").hide();
        $("#principal").attr("class","col s12");
        $(".adminurl").append($("<label/>", {

            "for": "urlvideo",
            html :"url del video"
        }));

        $(".adminurl").append($("<input/>", {

            "id": "urlvideo",
            "type":"text"
        }));

         $(".btnadmin").append($("<a/>", {
             "id": "prev-video",
            "class": "waves-effect waves-light btn",
            html :"Vista Previa"
        }));

        $("#prev-video").click(function(){
           urlvideo = $("#urlvideo").val();

           $.post('script.php', { url: urlvideo }, function(result) { 
               if(result = "01"){

                    //$("#prevcomponente").attr("src", "project/index.html");

               }
            
            });
       
       
    });

});
    
// Configuracion de magistral - presentacion

     $("#presentacion").click(function(){
        $(".admin-frame").attr("id", "documento");
        $(".componentes").hide()
        $("#principal").attr("class","col s12");
         $(".adminurl").append($("<label/>", {

            "for": "urlpresentacion",
            html :"url de la presentacion"
        }));

        $(".adminurl").append($("<input/>", {

            "id": "urlpresentacion",
            "type":"text"
        }));

        

         $(".btnadmin").append($("<a/>", {
             "id": "prev-presentacion",
            "class": "waves-effect waves-light btn",
            html :"Vista Previa"
        }));

       

        $("#prev-presentacion").click(function(){
           urlpresentacion = $("#urlpresentacion").val();
          

 
           $.post('presentacionScript.php', { url: urlpresentacion }, function(result) { 
               if(result = "01"){

                    $("#prevcomponente").attr("src", "project-activity/presentacion.html");

                   

               }
           });
            

            });




    });


     $("#generar").click(function(){

         switch( $(".admin-frame").attr("id")){
                 case "video": 
                     alert("vi");
                 break;

                 case "documento": 
                    alert("do");
                 break;
                 default: break;

         } 
        
        
       // $(this).hide();
    });
});