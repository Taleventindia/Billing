	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
	<script type="text/javascript" src="js/inwords.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- jQuery UI -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type='text/javascript' src='js/scripts.js'></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<?php include "includes/admin_header.php"; ?>

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
                <textarea name="custname" class="autocomplete" tabindex="1" rows="4" id="customer-title" onblur="if(this.value=='') this.value='Company Name';" onfocus="if(this.value=='Company Name') this.value='';"></textarea>
               
<!--                       <input class="autocomplete" name="firstname" size="10">-->
               
                <table id="meta">
                    <tr>
                        <td class="meta-head">Invoice #</td>
                        <td>
                        <textarea name="invnum" tabindex="1" rows="4" id="invnum"><?php echo sprintf('%05d',$invnum);?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="meta-head">Date</td>
                        <td><textarea name="invdate" id="date"><?php echo date("Y/m/d");?></textarea></td>
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
            
            <form action="" method="post" autocomplete="off">
<!--             <div class="autocomplete" style="width:300px;">-->
                	<style type="text/css">
	textarea:hover,textarea:focus, #items td.total-value textarea:hover, #items td.total-value textarea:focus, .delete:hover { background-color:#fff; }
	.item-row td{min-height:100px;border:1px solid #000!important; vertical-align:middle }
	</style>
              <tr class="item-row">
                  <td class="item-name"><div class="delete-wpr">
                      <textarea tabindex="2" onblur="if(this.value=='') this.value='Item';" onfocus="if(this.value=='Item') this.value='';" name="item[]">Item</textarea> 
<!--                      <input class="autocomplete" name="product_name" size="12">-->

                      </div>                
                  </td>
                  
                 <td class="description">
                      <textarea tabindex="3" onblur="if(this.value=='') this.value='Description';" onfocus="if(this.value=='Description') this.value='';" name="descr[]">Description</textarea>  
<!--                    <input type='text' id='autocompletee' name='product_name'>-->
                  </td>  
                     
                  <td><div class="demo">
                      <textarea tabindex="4"  class="qty" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="qty[]">0.00</textarea></div></td>
                  <td><div class="demo">
                      <textarea tabindex="5"  class="cost" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="cost[]">0.00</textarea></div>    
<!--                  <input type='text' id='autocomplete' name='product_cost'>-->
                  </td>
                  <td><textarea tabindex="6" class="vat" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="vat[]">0.00</textarea></td>
                  <td><textarea tabindex="7" class="discount" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="discount[]">0.00</textarea></td>
                  <td><span class="amount">0.00</span><input type="hidden" class="pr_amt"/></td>
                  <td><span class="price">0.00</span><input type="hidden" class="pr_hid" name="price[]" /></td>
              </tr>       
<!--             </div>        -->

                
               
   <?php    
                
     if(isset($_POST['search'])){
        $search = mysqli_real_escape_string($conection,$_POST['search']);

        $query = "SELECT * FROM stock WHERE product_name like'%".$search."%'";
        $result = mysqli_query($connection,$query);

        $response = array();
        while($row = mysqli_fetch_array($result) ){
//        $response[] = array("label"=>$row['product_name'],"label"=>$row['product_cost']);
        $data['stock_id'] = $row['stock_id']; 
        $data['value'] = $row['product_name'];    
        $data['value'] = $row['product_cost'];    
        array_push($response, $data);    
      }

       echo json_encode($response);
      }                   
  ?>   
                
   <?php    
                
     if(isset($_POST['search'])){
        $search = mysqli_real_escape_string($conection,$_POST['search']);

        $query = "SELECT * FROM customers WHERE firstname like'%".$search."%'";
        $result = mysqli_query($connection,$query);

        $response = array();
        while($row = mysqli_fetch_array($result) ){
        $data['customer_id'] = $row['customer_id']; 
        $data['value'] = $row['firstname'];       
        array_push($response, $data);    
      }

       echo json_encode($response);
      }                   
  ?>    
                
           
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
                  <td class="total-value"><div id="gsttotal">0.00</div>
                  <input type="hidden" id="discounttotal_h" name="discounttotal" /></td>
              </tr>
              <tr>
    
                  <td colspan="3" class="blank"> </td>
                  <td colspan="4" class="total-line">Total: Rs. </td>
                  <td class="total-value"><div id="total">0.00</div><input type="hidden" id="tot_hid" name="total" /></td>
              </tr>
              <tr>
                  <td colspan="3" class="blank"> </td>
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
       
                <!-- Custom Fonts -->
                <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

                <link rel='stylesheet' type='text/css' href='css/style.css' />

               <script type="text/javascript" src="js/loader.js"></script>        
            </div>
    <?php include "includes/admin_footer.php"; ?>