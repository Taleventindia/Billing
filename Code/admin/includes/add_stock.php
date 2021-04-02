        <h2 class="page-header">
        New Stock
        </h2>

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
   <form action="" method="post" enctype="multipart/form-data">
          
        <div class="form-group">
            <label for="barcode_no">Barcode No</label>
            <input type="file" name="image">
        </div>
       
       <div class="input-group">
            <label for="title">Product Name</label>
            <input type="text" class="form-control" name="product_name">
        </div>
      <br>
       <div class="input-group">
            <label for="category">Product Category</label>
           <br>
           <select class="form-control" name="product_category"id="product_category"> 
               
<?php      

        $query="SELECT * FROM categories";
        $select_categories=mysqli_query($connection,$query);
                
            confirmQuery($select_categories);  
              
    while($row=mysqli_fetch_assoc($select_categories)){
//        $cat_id=$row['cat_id'];
        $cat_title=$row['cat_title'];               
       
        echo "<option value='$cat_title'>$cat_title</option>";
        } 
                
      ?>   
        
         </select>
        </div>
       
       <br>
        
        <div class="input-group">
           <label for="Product_type">Product Type</label>
            <input type="text" class="form-control" name="product_type">
       </div>
        <br>
       <div class="input-group">
            <label for="product_cost">Product Cost</label>
            <input type="decimal" class="form-control" name="product_cost">
       </div>
       <br>
       <div class="input-group"> 
            <label for="quantity">Quantity</label>
            <input type="decimal" class="form-control" name="quantity">
        </div>
        <br>
       <div class="input-group">
            <label for="supplier">Supplier</label>
           <input type="text" class="form-control" name="supplier">
        </div>
        <br>
        <div class="input-group">
            <label for="onhand_qty">Onhand Qty</label>
           <input type="decimal" class="form-control" name="onhand_qty">
        </div>
        <br>
       <div class="input-group">
            <label for="expiry_date">Expiry Date</label>
           <input type="date" class="form-control" name="expiry_date">
        </div>
        <br>
       <div class="input-group">
            <label for="date_arrival">Date arrival</label>
           <input type="date" class="form-control" name="date_arrival">
        </div>
        <br>
       <div class="form-group">
            <input class="btn btn-primary" type="submit" name="create_stock" value="Add Stock">
        </div>
        
       </form>
       
      
     
    