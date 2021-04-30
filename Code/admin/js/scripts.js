$( function() {

 // Single Select
 $( "#autocomplete" ).autocomplete({
  source: function( request, response ) {
   // Fetch data
   $.ajax({
    url: "invoice.php",
    type: 'post',
    dataType: "json",
    data: {
     search: request.term
    },
    success: function( data ) {
     response( data );
    }
   });
  },
  select: function (event, ui) {
     // Set selection
     $('#autocomplete').val(ui.item.label); // display the selected text
//     $('#selectuser_id').val(ui.item.value); // save selected id to input
     return false;
  },
  focus: function(event, ui){
     $( "#autocomplete" ).val( ui.item.label );
     $( "#custname" ).val( ui.item.value );
//     $( "#selectuser_id" ).val( ui.item.value );
     return false;
   },
 });

 // Multiple select
 $( "#multi_autocomplete" ).autocomplete({
    source: function( request, response ) {
                
      var searchText = extractLast(request.term);
      $.ajax({
         url: "invoice.php",
         type: 'post',
         dataType: "json",
         data: {
           search: searchText
         },
         success: function( data ) {
           response( data );
         }
       });
    },
    select: function( event, ui ) {
        var terms = split( $('#multi_autocomplete').val() );
                
        terms.pop();
                
        terms.push( ui.item.label );
                
        terms.push( "" );
        $('#multi_autocomplete').val(terms.join( ", " ));

        // Id
//        terms = split( $('#selectuser_ids').val() );
                
        terms.pop();
                
        terms.push( ui.item.value );
                
//        terms.push( "" );
        $('#custname').val(terms.join( ", " ));
//        $('#selectuser_ids').val(terms.join( ", " ));

        return false;
     }
           
 });

});
function split( val ) {
   return val.split( /,\s*/ );
}
function extractLast( term ) {
   return split( term ).pop();
}



