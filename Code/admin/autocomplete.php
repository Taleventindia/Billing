<?php ob_start (); ?>
<?php session_start(); ?>
<?php include "../includes/db.php"; ?>
<?php include "functions.php"; ?>

   <?php

      if(!isset($_SESSION['user_role'])){
          
//      if($_SESSION['user_role']!=="Admin"){

        header("Location:../SignInPage.php");  

      }
    ?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Talevent Tech</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    
    
    
   <link rel='stylesheet' type='text/css' href='css/style.css' />
   <link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
   <script type="text/javascript" src="js/inwords.js"></script>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 
    <script type='text/javascript' src='js/jquery-3.1.0.min.js'></script>
	<script type="text/javascript" src="js/bootstrap-3.3.7.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
    <script type='text/javascript' src='js/example.js'></script>
    
    <link rel='stylesheet' type='text/css' href='css/bootstrapcdn-3.3.6.min.css' />
    <link rel='stylesheet' type='text/css' href='css/bootstrap-tokenfield.css' />
    <link rel='stylesheet' type='text/css' href='css/jquery-ui.min.css' />
    
<!--
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">   
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script> 
-->
  
    

</head>

<body>
      
    
    <div class="container-scroller">  
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php">
            <img src="assets/images/logo.svg" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="../images/<?php echo $_SESSION['image'] ?>" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../images/<?php echo $_SESSION['image'] ?>" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">
                      <?php
                      
                      if(isset($_SESSION['firstname'])){
                          
                        echo $_SESSION['firstname']; 
                         
                      }
                      
                      ?>
                      
                    </p>
                  <p class="font-weight-light text-muted mb-0">
                      <?php
                   
                      if(isset($_SESSION['email'])){
                          
                        echo $_SESSION['email']; 
                         
                      }
                      ?>
                      
                    </p>
                </div>
                <a class="dropdown-item" href="./profile.php">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                  
                <a class="dropdown-item"href="../includes/logout.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        </nav>
        
    <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
              <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Inventory</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                      <a class="nav-link" href="./categories.php">
                      <i class="menu-icon typcn typcn-shopping-bag"></i>
                    <span class="menu-title">categories</span>
                      </a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link" href="inventory.php">Stock List</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link" href="inventory.php?source=add_stock">Add Stock</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth1">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Invoice</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth1">
                <ul class="nav flex-column sub-menu">     
                  <li class="nav-item">
                    <a class="nav-link" href="reports.php">View All Invoices</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="invoice.php">Create Invoice</a>
                  </li>
                </ul>
              </div>
            </li> 
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth2" aria-expanded="false" aria-controls="auth2">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Customers</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth2">
                <ul class="nav flex-column sub-menu">   
                  <li class="nav-item">
                    <a class="nav-link" href="customers.php">View All Customers</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="customers.php?source=add_customer">Add Customer</a>
                  </li>
                </ul>
              </div>
            </li> 
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth3" aria-expanded="false" aria-controls="auth3">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Supplier</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth3">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="suppliers.php">View All Suppliers</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="suppliers.php?source=add_supplier">Add Suppliers</a>
                  </li>
                </ul>
              </div>
            </li>
              
                <?php

                   if($_SESSION['user_role']!=="User"){

                ?> 
              
            <li class="nav-item">
              <a class="nav-link" href="users.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Users</span>
              </a>
            </li>

             <?php 
              
                }
              
             ?>  
              
              
            <li class="nav-item">
              <a class="nav-link" href="./profile.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Profile</span>
              </a>
            </li>
           
          </ul>
        </nav>   
  
  
        
        <?php
	    $query="SELECT MAX(invnum) FROM register";
        $select_invoice=mysqli_query($connection,$query);
        $row=mysqli_fetch_array($select_invoice);
        $invnum=$row[0];
        $invnum+=1;
?>

<style>
     
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}


.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}


.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}


.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
  
</style>
 
<div class="main-panel">
    <div class="card">
<div class="card-body">
    <h4>Create Invoice</h4>
    <div style="clear:both"></div>
            <form action="bill.php" method="post">
                 <div style="border:1px solid #000"> 

           <div id="customer">
                Consignee,<br />
<!--                <textarea name="custname" class="autocomplete" tabindex="1" rows="4" id="customer-title" onblur="if(this.value=='') this.value='Company Name';" onfocus="if(this.value=='Company Name') this.value='';"></textarea>-->
                       
<!--
                        <input id="search_data" placeholder="" class="form-control " size="20" />
                                <div class="input-group btn"> 
                                    <button type="button" class="btn btn-primary btn-lg" id="search">Get Value</button>
                                </div> 
                            <br />
                            <span id="custname"></span>       
-->
               
             <input id="search_data" style="height:90px" class="input_control" name="custname" size="20" />
               
                <table id="meta">
                    <tr>
                        <td class="meta-head">Invoice #</td>
                        <td>
                        <textarea name="invnum" tabindex="1" rows="4" id="invnum"><?php echo sprintf('%05d',$invnum);?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="meta-head">Date</td>
                        <td><textarea name="invdate" id="invdate"><?php echo date("Y/m/d");?></textarea></td>
                    </tr>
    
                </table>
            </div>
            
            </div>
            <table id="items">
              <tr>
                  <th>Item</th>
                  <th>Description</th>
                  <th>Quantity</th>
                  <th>Rate</th>
                  <th>GST %</th>
                  <th>Discount %</th>
                  <th>Amount</th>
                  <th>Price (with GST)</th>
              </tr>
            
            <form action="" method="post" >
                	<style type="text/css">
	textarea:hover,textarea:focus, #items td.total-value textarea:hover, #items td.total-value textarea:focus, .delete:hover { background-color:#fff; }
	.item-row td{min-height:100px;border:1px solid #000!important; vertical-align:middle }
	</style>
                
              <tr class="item-row">
                  <td class="item-name"><div class="delete-wpr">
                      <textarea tabindex="2" onblur="if(this.value=='') this.value='Item';" onfocus="if(this.value=='Item') this.value='';" name="item[]">Item</textarea> 
<!--                      <input style="height:50px" onblur="if(this.value=='') this.value='Item';" onfocus="if(this.value=='Item') this.value='';" name="product_name" size="13">-->

                      </div>                
                  </td>
                  
                 <td class="description">
                      <textarea tabindex="3" onblur="if(this.value=='') this.value='Description';" onfocus="if(this.value=='Description') this.value='';" name="descr[]">Description</textarea>  
<!--                    <input style="height:50px" onblur="if(this.value=='') this.value='Description';" onfocus="if(this.value=='Description') this.value='';" name='product_name' size="28">-->
                     
                  </td>  
                     
                  <td><div class="demo">
                      <textarea tabindex="4" class="qty" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="qty[]">0.00</textarea></div></td>
                  
                  <td><div class="demo">
                      <textarea tabindex="5"  class="cost" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="cost[]">0.00</textarea></div>    
<!--                  <input type='text' id='autocomplete' name='product_cost'>  -->
                  </td>
                  
                  <td><textarea tabindex="6" class="vat" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="vat[]">0.00</textarea></td>
                  
                  <td><textarea tabindex="7" class="discount" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="discount[]">0.00</textarea></td>
                  
                  <td><span class="amount">0.00</span><input type="hidden" class="pr_amt"/></td>
                  
                  <td><span class="price">0.00</span><input type="hidden" class="pr_hid" name="price[]" /></td>
              </tr>       

                
            <tr id="hiderow"> 
                  <td colspan="8"><a tabindex="8" id="addrow" name="addrow" title="Add a row" onblur="return false;" style="color:#06F; text-decoration:underline; cursor:pointer">Add a row</a></td>
              </tr>    
              
              <tr>
                  <td colspan="3" class="blank"> </td>
                  <td colspan="4" class="total-line">Subtotal: Rs.</td>
                  <td class="total-value"><div id="subtotal">0.00</div>
                  <input type="hidden" id="subt_hid" class="subt_hid" name="subtotal" /></td>
              </tr>
              <tr>
                  <td colspan="3" class="blank"> </td>
                  <td colspan="4" class="total-line">TAX: %</td>
                  <td class="total-value"><textarea name="tax" tabindex="8" id="tax" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';">0.00</textarea>
                  </td>
              </tr>
              <tr>
                  <td colspan="3" class="blank"> </td>
                  <td colspan="4" class="total-line">GST: </td>
                  <td class="total-value"><div id="gsttotal">0.00</div>
                  <input type="hidden" id="gsttotal_h" name="gsttotal" /></td>
              </tr>
              <tr>
                  <td colspan="3" class="blank"> </td>
                  <td colspan="4" class="total-line">Discount: </td>
                  <td class="total-value"><div id="discount">0.00</div>
                  <input type="hidden" id="discount" name="discount" /></td>
              </tr>
              <tr>
    
                  <td colspan="3" class="">
                    <label for="billtype">Bill Type:</label>
                      
                     <select name="bill_type"id="bill_type">
            
         <?php 
                if($user_role == 'Cash Bill'){
                    
                    echo "<option value='Credit Bill'>Credit Bill</option>";
                    
                }else{
                    echo "<option value='Cash Bill'>Cash Bill</option>";
                    echo "<option value='Credit Bill'>Credit Bill</option>";

                }      

            ?>

         </select>   
                  </td>
                  <td colspan="4" class="total-line">Total: Rs. </td>
                  <td class="total-value"><div id="total">0.00</div><input type="hidden" id="tot_hid" name="total" /></td>
              </tr>
              <tr>
                  <td colspan="3" class="">
                      <label for="paymentmode">Payment Mode</label>

                      <select name="payment_mode"id="payment_mode">
            
         <?php 
                if($user_role == 'Cash'){
                    
                    echo "<option value='Credit Card'>Credit Card</option>";
                    
                }else{
                    echo "<option value='Cash'>Cash</option>";
                    echo "<option value='Credit Card'>Credit Card</option>";
                    echo "<option value='Credit'>Credit</option>";
                    echo "<option value='Credit'>UPI</option>";

                }      

            ?>

         </select>  
                      
                    </td>
                  <td colspan="4" class="total-line">Balance Due: Rs.</td>
                  <td class="total-value"><div class="due">0.00</div><input type="hidden" id="due_hid" name="due" /></td>
              </tr>
              <tr>
                  <td colspan="3" class="total-value" id="inwords" style="text-transform:capitalize"> </td>
                  <input type="hidden" id="towords" name="towords" />
                  <td colspan="4" class="total-line balance">Round Total: Rs.</td>
                  <td class="total-value balance"><div class="rtot">0.00</div><input type="hidden" id="round_hid" name="rbdf" /></td>
              </tr>
                            
                </form> 
            </table> 
                
                
            <div id="terms" style="float:left;width:54%;border:1px solid #000; min-height:156px">
              <h4 style="border-bottom: 1px solid black; text-align:left; padding:5px 7px; font-weight:normal">TIN No. : <strong>24050704200</strong>&emsp;&emsp;&emsp;&emsp;&emsp;Date.: <?php echo date("d/m/Y");?></h4>
              <h5>Terms</h5>
              <div>
              2% CD if payment within 7 days Strictly.<br />
              Price can change without prior notice during the scheme.<br />
              Higher wattage 6 month guarantee. No Breakage guarantee.
              </div>
            </div>
            <div style="float:left; text-align:center;width:19%;border:1px solid #000; min-height:156px; margin:20px 0 0 0;"> 
             <span style="display:block;height:115px;"></span>
             <span>Received Signature</span>
            </div>
            <div style="float:left;width:27%;border:1px solid #000; min-height:156px; margin:20px 0 0 0;"> 

              <span style="display:block;height:25px;"></span>
              <span style="margin:10px 10px; display:block">
              For, <strong>Talevent Tech</strong>
              <br />
              <br />
              <br />
              <br />
              &emsp;&nbsp;Authorized Signatory
              </span>
            </div>
             
            <br>
            <center><input type="submit" class="btn btn-primary" value="Save Invoice" name="saveinv"/></center>  
            </form>
    </div>
    </div>
       

                <link rel='stylesheet' type='text/css' href='css/style.css' />

               <script type="text/javascript" src="js/loader.js"></script>        
            </div>
        
        
        
<!--
      <br />
      <br />
        <div class="container">
           <h1 align="center">Autocomplete Textbox using jQuery in PHP</h1>
            <br />
            <br />
            <br />
            <div class="row">
                 <div class="col-md-2">
                
                </div>
                <form action="" method="post">
                <div class="col-md-8">
                    <div class="form-group">
                       <center> <label>Enter Multiple Country Name</label></center>
                       <center> <div class="input-group">
                            <input type="text" id="search_data" placeholder="" autocomplete="off" class="form-control input-lg" />
                            <div class="input-group btn"> 
                                <button type="button" class="btn btn-primary btn-lg" id="search">Get Value</button>
                            </div> 
                        </div> </center>
                        <br />
                        <span id="custname"></span>
                    </div>
                </div>
                </form>
                <div class="col-md-2">
                
                </div>
            </div>
        </div>
-->


           <script src="assets/js/shared/off-canvas.js"></script>
           <script src="assets/js/shared/misc.js"></script>
           <script src="assets/js/demo_1/dashboard.js"></script>

        </div>
        
    </div>
        
</body>

</html>

    <?php //include "includes/admin_footer.php"; ?>
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
       $('#custname').text($('#search_data').val());
    });  
      
  });

</script>


