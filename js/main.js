 $(document).ready(function(){

 $(function() {
    
    $("li").dblclick(function(){
        
    });

    $( "#sortable2" ).sortable({
    });
    $( ".ui-state-default" ).draggable({
     connectToSortable: "#sortable2",
     helper: "clone",
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