<!DOCTYPE html>
<html>
    <head>
        <title>AutoComplete Textbox with Multiple Field </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    </head>
<body>
       
    <div class="container">
       <h1 align="center">AutoComplete Textbox with Multiple Field using jQuery in PHP</h1>
           
         <div class="row">
         <div class="col-md-2">

         </div>
         <div class="col-md-8">
         <div class="form-group">
         <label>Enter Multiple subjects Name</label>
             <div class="input-group">
              <input type="text" id="search_data" placeholder="" autocomplete="off" class="form-control input-lg" />
         <div class="input-group-btn">
             <button type="button" class="btn btn-primary btn-lg" id="search">Get Value</button>
         </div>
         </div>
       <br >
      <span id="subject_name"></span>
      </div>
     </div>
       <div class="col-md-2">
       </div>
     </div>
        </div>
    </body>
</html>
<script>
  $(document).ready(function(){
      
    $('#search_data').tokenfield({
        autocomplete :{
            source: function(request, response)
            {
                jQuery.get('fetch.php', {
                    query : request.term
                }, function(data){
                    data = JSON.parse(data);
                    response(data);
                });
            },
            delay: 100
        }
    });

    $('#search').click(function(){
        $('#subject_name').text($('#search_data').val());
    });

  });
</script>