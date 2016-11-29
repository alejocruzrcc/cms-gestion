 $(document).ready(function(){

 $(function() {
    
    $("li").dblclick(function(){
        
    });


    $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
    $( ".connectedSortable" ).sortable( "option", "helper", "clone" );

    });

 });