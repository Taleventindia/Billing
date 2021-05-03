<html>
<head>
<title>Autocomplete Textbox with Multiple Field using jQuery in PHP</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">    
    
   <link rel='stylesheet' type='text/css' href='css/style.css' />
   <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body>
        <div class="container mt-5" style="width:1024px;">
           <h3 align="center">Autocomplete Textbox  using jQuery in PHP and MySQl</h3>
            <label>Enter Customer Name</label>
             <input type="text" name="custname" id="custname" placeholder="Enter Customer Name" class="form-control" />
              <div id="custnameList"></div>           
        </div>
        
        <script>
            $(document).ready(function(){
               $('#custname').onkeyup(function(){
                  let query = $(this).val();
                   if(query !=''){
                       $.ajax({
                           url:"fetch.php",
                           method:"POST",
                           data:(query),
                           success:function(data){
                               $("#custnameList").fadeIn();
                               $("#custnameList").html(data);
                           }
                       });
                   }
               });
                
                $(document).on('click', 'li', function(){
                    $("#custname").val($(this).text());
                    $("#custnameList").fadeOut();
                });
                
            });
        
        </script>
        
    </body>
</html>