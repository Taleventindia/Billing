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
        <div id="wrapper">
                <!-- Navigation -->
                <?php include "includes/admin_navigation.php"; ?>
                    <div id="page-wrapper">
                        <div class="container-fluid">
	<h4>RETAIL INVOICE</h4>
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
                  <th>VAT %</th>
                  <th>Discount %</th>
                  <th>Amount</th>
                  <th>Price (with VAT)</th>
              </tr>
                                      
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
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
  /*position the autocomplete items to be the same width as the container:*/
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

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>

      
                <form autocomplete="off" action="">
                <div class="autocomplete" style="width:300px;"> 
                    
              <tr class="item-row">
                  <td class="item-name"><div class="delete-wpr">
                      <textarea id="myInput" type="text" tabindex="2" onblur="if(this.value=='') this.value='Item';" onfocus="if(this.value=='Item') this.value='';" name="myProduct">Item</textarea>
                      </div>
                  </td>
                  
                  <td class="description">
                      <textarea tabindex="3" onblur="if(this.value=='') this.value='Description';" onfocus="if(this.value=='Description') this.value='';" name="desc[]">Description</textarea></td>
                  <td>
                      <textarea tabindex="4" class="qty" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="qty[]">0.00</textarea></td>
                  <td><textarea tabindex="5" class="cost" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="cost[]">0.00</textarea></td>
                  <td><textarea tabindex="6" class="vat" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="vat[]">0.00</textarea></td>
                  <td><textarea tabindex="7" class="discount" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="discount[]">0.00</textarea></td>
                  <td><span class="amount">0.00</span><input type="hidden" class="pr_amt"/></td>
                  <td><span class="price">0.00</span><input type="hidden" class="pr_hid" name="price[]" /></td>
              </tr>       
            </div>  
            </form>
              
 <script>
    function autocomplete(inp, arr) {
      /*the autocomplete function takes two arguments,
      the text field element and an array of possible autocompleted values:*/
      var currentFocus;
      /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
//var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
        
        
var product =["Pen","Laptop","Computer","Keyboard","Tables"];                     

    autocomplete(document.getElementById("myInput"), product);
     
  <?php
     
//     if(isset($_GET['myProduct'])){
//         
//      $product_name=$_GET['myProduct']; 
//         
//      $product="SELECT product_name FROM stock WHERE product_name=$product_name ";
//  
//      $search_product=mysqli_query($connection, $product); 
//         
//       while($row=mysqli_fetch_assoc($search_product)){
//           $product_name=$row['product_name'];
//           
//        }
//       
//       }
//     
    ?>
//    autocomplete(document.getElementById("myInput"), $product);      
     
</script>
  
                
              <tr id="hiderow">
                <td colspan="8"><a tabindex="8" id="addrow" title="Add a row" onblur="return false;" style="color:#06F; text-decoration:underline; cursor:pointer">Add a row</a></td>
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
                  <td colspan="4" class="total-line">VAT: </td>
                  <td class="total-value"><div id="vattotal">0.00</div>
                  <input type="hidden" id="vattotal_h" name="vattotal" /></td>
              </tr>
              <tr>
                  <td colspan="3" class="blank"> </td>
                  <td colspan="4" class="total-line">Discount: </td>
                  <td class="total-value"><div id="vattotal">0.00</div>
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
                     <?php echo $product_name;  ?>    
            
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
            <center><input type="submit" class="btn btn-primary" value="SAVE INVOICE" name="saveinv"/></center> 
		</div>
                 
        <br />

                <!-- Custom Fonts -->
                <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

                <link rel='stylesheet' type='text/css' href='css/style.css' />

               <script type="text/javascript" src="js/loader.js"></script>        
            </div>
        </div>
    </div>
    <?php include "includes/admin_footer.php"; ?>