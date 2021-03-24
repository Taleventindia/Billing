 <?php 
     
       if(isset($_GET['edit_stock'])){
           
        $the_stock_id = $_GET['edit_stock'];
           
           $query="SELECT * FROM stock WHERE stock_id = $the_stock_id ";
           $select_stock=mysqli_query($connection,$query);
                    
             while($row=mysqli_fetch_assoc($select_stock)){

                   $stock_id =  $row['stock_id'];
                    $barcode_no =  $row['barcode_no'];
                    $product_name =  $row['product_name'];
                    $product_category =  $row['product_category'];
                    $product_type =  $row['product_type'];
                    $product_cost =  $row['product_cost'];
                    $quantity =  $row['quantity'];
                    $supplier =  $row['supplier'];
                    $onhand_qty =  $row['onhand_qty'];
                    $expiry_date =  $row['expiry_date'];
                    $date_arrival =  $row['date_arrival'];
                 
             }
           
           
       }

       if(isset($_POST['edit_stock'])){
           
            $product_name =  $_POST['product_name'];
            $product_category =  $_POST['product_category'];
            $product_type =  $_POST['product_type'];
            $product_cost =  $_POST['product_cost'];
            $quantity =  $_POST['quantity'];
            $supplier =  $_POST['supplier'];
            $onhand_qty =  $_POST['onhand_qty'];
            $expiry_date =  $_POST['expiry_date'];
            $date_arrival =  $_POST['date_arrival'];
        
          
    $query="UPDATE stock SET product_name= '{$product_name}', product_category= '{$product_category}', product_type= '{$product_type}', product_cost= '{$product_cost}', quantity= '{$quantity}', supplier= '{$supplier}', onhand_qty= '{$onhand_qty}', expiry_date= '{$expiry_date}', date_arrival= '{$date_arrival}' WHERE stock_id= {$stock_id} ";  
                      
        $edit_stock_query=mysqli_query($connection,$query);
           
        confirmQuery($edit_stock_query);
           
    echo "Stock Updated" . "<a href='inventory.php'>View Stock list?</a>";

       
       }
      

   ?>      
                
   <form action="" method="post" enctype="multipart/form-data">
          
           
       <div class="input-group">
            <label for="title">Product Name</label>
            <input type="text" value="<?php echo $product_name; ?>" class="form-control" name="product_name">
        </div>
       
        <br>
       
         <div class="input-group">
            <label for="category">Product Category</label>
           <br>
           <select name="product_category"id="product_category"> 
            
               
<?php      

        $query="SELECT * FROM categories";
        $select_categories=mysqli_query($connection,$query);
                
            confirmQuery($select_categories);  
              
    while($row=mysqli_fetch_assoc($select_categories)){
        $cat_id=$row['cat_id'];
        $cat_title=$row['cat_title'];   
        
         if($cat_id == $product_category) {
              
//                $query="SELECT * FROM categories WHERE cat_id= '{$post_category_id}' ";
//                $select_specific_categories=mysqli_query($connection,$query); 
//              
//                $cat_id=$row['cat_id'];
//                $cat_title=$row['cat_title'];  
              
        echo "<option selected value='$cat_id'>$cat_title</option>"; 

          }
        
         else {
       
        echo "<option value='$cat_id'>$cat_title</option>";
             
        } 
      }
               
     ?>   
        
         </select>
        </div>
       
        <br>
       
        <div class="input-group">
           <label for="Product_type">Product Type</label>
            <input type="text" value="<?php echo $product_type; ?>" class="form-control" name="product_type">
      </div>
        
  
       <div class="input-group">
            <label for="product_cost">Product Cost</label>
            <input type="decimal" value="<?php echo $product_cost; ?>" class="form-control" name="product_cost">
       </div>
     
       <div class="input-group"> 
            <label for="quantity">Quantity</label>
            <input type="decimal" value="<?php echo $quantity ?>" class="form-control" name="quantity">
        </div>
        
       <div class="input-group">
            <label for="supplier">Supplier</label>
           <input type="text" value="<?php echo $supplier; ?>" class="form-control" name="supplier">
        </div>
        
        <div class="input-group">
            <label for="onhand_qty">Onhand Qty</label>
           <input type="decimal" value="<?php echo $onhand_qty; ?>" class="form-control" name="onhand_qty">
        </div>
       
       <div class="input-group">
            <label for="expiry_date">Expiry Date</label>
           <input type="date" value="<?php echo $expiry_date; ?>" class="form-control" name="expiry_date">
        </div>
       
       <div class="input-group">
            <label for="date_arrival">Date arrival</label>
           <input type="date" value="<?php echo $date_arrival; ?>" class="form-control" name="date_arrival">
        </div>
        
       <div class="form-group">
            <input class="btn btn-primary" type="submit" name="edit_stock" value="Update Stock">
        </div>
        
       </form>
       
      
     
    