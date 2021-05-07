<div class="card-body">            
      <h4 class="page-header">
         Add New Stock
      </h4>

     <?php 
 
          if(isset($_POST['create_stock'])){
           
                $barcode_no=$_FILES['image']['name'];
                $barcode_no_tempname = $_FILES['image']['tmp_name'];
                $product_name =  $_POST['product_name'];
                $product_category =  $_POST['product_category'];
                $product_type =  $_POST['product_type'];
                $product_cost =  $_POST['product_cost'];
                $quantity =  $_POST['quantity'];
                $supplier =  $_POST['supplier'];
                $onhand_qty =  $_POST['onhand_qty'];
                $expiry_date =  $_POST['expiry_date'];
                $date_arrival =  $_POST['date_arrival'];

          
    $query="INSERT into stock".
    '(barcode_no, product_name, product_category, product_type, product_cost,quantity, supplier, onhand_qty, expiry_date, date_arrival)'.
"VALUES('".$barcode_no."','".$product_name."','".$product_category."','".$product_type."','".$product_cost."','".$quantity."','".$supplier."','".$onhand_qty."','".$expiry_date."','".$date_arrival."') ";       
        
                    
        $add_stock_query=mysqli_query($connection,$query);
           
        confirmQuery($add_stock_query);
           
    echo "Stock Created:"." "."<a href='inventory.php'>View Stock?</a>";
          
            move_uploaded_file($barcode_no_tempname,"../images/$barcode_no");
       
       }
      
   ?>  

<div class="card-body">           
  <form action="" method="post" enctype="multipart/form-data" class="form-sample" autocomplete="off">                       
     
        <div class="row">
          <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="barcode_no">Barcode</label>
                <div class="col-sm-9">
                  <input type="file" name="image" />
                </div>
              </div>
            </div>
        </div>            
        <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="title">Product Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" size="115" maxlength="115" name="product_name">
                </div>
              </div>
            </div>
        </div>
        <div class="row">
           <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="category">Product Category</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="product_category"id="product_category"> 

                        <?php      

                            $query="SELECT * FROM categories";
                            $select_categories=mysqli_query($connection,$query);

                                confirmQuery($select_categories);  

                            while($row=mysqli_fetch_assoc($select_categories)){

                            $cat_title=$row['cat_title'];               

                            echo "<option value='$cat_title'>$cat_title</option>";
                            } 

                          ?>   
                    </select>
                  </div>
                </div>
            </div>
         </div>  
        <div class="row">
           <div class="col-md-6">
              <div class="form-group row">
                 <label class="col-sm-3 col-form-label" for="Product_type">Product Type</label>
                 <div class="col-sm-9">
                    <input type="text" class="form-control" size="100" maxlength="100" name="product_type" />
                 </div>
              </div>
           </div>
        </div> 
        <div class="row">
           <div class="col-md-6">
              <div class="form-group row">
                 <label class="col-sm-3 col-form-label" for="product_cost">Product Cost</label>
                 <div class="col-sm-9">
                    <input type="decimal" class="form-control" name="product_cost" />
                 </div>
              </div>
           </div>
        </div>
        <div class="row">
            <div class="col-md-6">
               <div class="form-group row">
                  <label class="col-sm-3 col-form-label" for="quantity">Quantity</label>
                  <div class="col-sm-9">
                     <input type="decimal" class="form-control" name="quantity" />
                  </div>
               </div>
            </div>
        </div>
        <div class="row">
           <div class="col-md-6">
              <div class="form-group row">
                 <label class="col-sm-3 col-form-label" for="Supplier">Supplier</label>
                 <div class="col-sm-9">
                    <input type="text" class="form-control" name="supplier" />
                 </div>
              </div>
           </div>
        </div>
        <div class="row">
           <div class="col-md-6">
              <div class="form-group row">
                 <label class="col-sm-3 col-form-label" for="onhand_qty">Onhand Qty</label>
                 <div class="col-sm-9">
                    <input type="decimal" class="form-control" name="onhand_qty" />
                 </div>
              </div>
           </div>
        </div>
        <div class="row">
           <div class="col-md-6">
              <div class="form-group row">
                 <label class="col-sm-3 col-form-label" for="date_arrival">Arrival Date</label>
                 <div class="col-sm-9">
                    <input type="date" class="form-control" name="date_arrival"/>
                 </div>
              </div>
           </div>
        </div>
        <div class="row">
           <div class="col-md-6">
              <div class="form-group row">
                 <label class="col-sm-3 col-form-label" for="expiry_date">Expiry Date</label>
                 <div class="col-sm-9">
                    <input type="date" class="form-control" name="expiry_date" />
                 </div>
              </div>
           </div>
        </div>
        <br>
               <div class="col-sm-9">
                  <input class="btn btn-primary" type="submit" name="create_stock" value="Add Stock">
               </div>
      
            </form>       
         </div>
      </div>

