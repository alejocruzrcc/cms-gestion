 $(document).ready(function(){

 $(function() {
    
    $(".palette").click(function(){
      
        $("#video").click(function(event){  
          $("#video").attr("href", "activity-m.html");
           event.stopPropagation();
        });
        $("#perfil").click(function(){ 
           alert("perfil");
        });

        
        
    });

    $( "#sortable2" ).sortable({
    });
    $( ".ui-state-default" ).draggable({
     connectToSortable: "#sortable2",
     //helper: "clone",
     revert: "invalid"
    });
    $( "ul, li" ).disableSelection();
   

/*
    $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable"
    });
   */

    });

 });