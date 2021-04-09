<?php include "../includes/db.php"; ?>

<?php
    error_reporting(0);
		try 
		{
				 // connect to SQLite from PDO database
				 $dbh = new PDO("sqlite:omelec.db");

		}
		catch(PDOException $e)
		{
				 echo $e->getMessage();//this getMessage throws an exception if any 
			  
		}
		
		
		$sql = $dbh->query("select MAX(invnum) from register");
		$invnum = $sql->fetchColumn();
		$invnum+=1; 
?>

<?php include "includes/admin_header.php"; ?>
<div class="main-panel">
    <div class="card">
<div class="content-wrapper">
    <h4>Create Invoice</h4>
        <div style="border:1px solid #000">
            <div id="customer">
                Consignee,<br />
                <textarea name="custname" tabindex="1" rows="4" id="customer-title" onblur="if(this.value=='') this.value='Company Name';" onfocus="if(this.value=='Company Name') this.value='';"></textarea>
    
                <table id="meta">
                    <tr>
                        <td class="meta-head">Invoice #</td>
                        <td>
                        <textarea name="invnum" tabindex="1" rows="4" id="invnum"><?php echo sprintf('%05d',$invnum);?></textarea>
                        </td>
                    </tr>
                    <tr>
    
                        <td class="meta-head">Date</td>
                        <td><textarea name="invdate" id="date">December 15, 2009</textarea></td>
                    </tr>
    
                </table>
            
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
              
            <form autocomplete="off" action="">
                <div class="autocomplete" style="width:300px;"> 
                 
              <tr class="item-row">
                  <td class="item-name"><div class="delete-wpr">
                      <textarea id="myInput" type="text" tabindex="2" onblur="if(this.value=='') this.value='Item';" onfocus="if(this.value=='Item') this.value='';" name="item">Item</textarea>
                      </div>
                  </td>
                  
                  <td class="description">
                      <textarea tabindex="3" onblur="if(this.value=='') this.value='Description';" onfocus="if(this.value=='Description') this.value='';" name="desc[]">Description</textarea></td>
                  <td>
                      <textarea tabindex="4" class="qty" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="qty[]">0.00</textarea></td>
                  <td><textarea tabindex="5" class="cost" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="cost[]">0.00</textarea></td>
                  <td><textarea tabindex="6" class="gst" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="gst[]">0.00</textarea></td>
                  <td><textarea tabindex="7" class="discount" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="discount[]">0.00</textarea></td>
                  <td><span class="amount">0.00</span><input type="hidden" class="pr_amt"/></td>
                  <td><span class="price">0.00</span><input type="hidden" class="pr_hid" name="price[]" /></td>
              </tr>       
            </div>  
            </form>

              <tr id="hiderow">
                <td colspan="8"><a tabindex="8" id="addrow" name="addrow" title="Add a row" onblur="return false;" style="color:#06F; text-decoration:underline; cursor:pointer">Add a row</a></td>
              </tr>    
              
              <tr>
                  <td colspan="3" class="blank"> </td>
                  <td colspan="4" class="total-line">Subtotal: Rs.</td>
                  <td class="total-value"><div id="subtotal">0.00</div>
                  <input type="hidden" id="subt_hid" name="subtotal" /></td>
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
                  <td colspan="3" class="total-value" id="inwords" style="text-transform:capitalize"> </td><input type="hidden" id="towords" name="towords" />
                  <td colspan="4" class="total-line balance">Round Total: Rs.</td>
                  <td class="total-value balance"><div class="rtot">0.00</div><input type="hidden" id="round_hid" name="rbdf" /></td>
              </tr>
            
            </table>   
            
            <div id="terms" style="float:left;width:53%;border:1px solid #000; min-height:156px">
              <h4 style="border-bottom: 1px solid black; text-align:left; padding:5px 7px; font-weight:normal">TIN No. : <strong>24050704200</strong>&emsp;&emsp;&emsp;&emsp;&emsp;Dt.: 06-Aug-2013</h4>
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
       </div>

        <br>
            <center><input type="submit" class="btn btn-primary" value="Save Invoice" name="saveinv"/></center>  

       
                <!-- Custom Fonts -->
                <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

                <link rel='stylesheet' type='text/css' href='css/style.css' />

               <script type="text/javascript" src="js/loader.js"></script>        
            </div>
        </div>
    </div>
    <?php include "includes/admin_footer.php"; ?>