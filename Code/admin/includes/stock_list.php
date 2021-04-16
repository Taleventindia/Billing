<div class="content-wrapper">
<div class="row">
    <div class="col-md-4">
            <h6>Search Stock</h6>
            <form action="" method="post">
                <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-primary" type="submit">
                                <span class="glyphicon glyphicon-search">Search</span>
                        </button>
                        </span>
                        </div>
                         <br>
                 <?php   echo "<td><a class='btn btn-primary' href='inventory.php?source=stock_list.php'>Clear</a></td>";   ?> 
                 </form> 
              </div>
        </div>
    </div>
     <div class="card">
        <table  cellpadding="50" cellspacing="5" class="table table-bordered table-hover">
              <thead>
                    <tr>
                        <th>SNo</th>
                        <th>Barcode No</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product Type</th>
                        <th>Product Cost</th>
                        <th>Quantity</th>
                        <th>Supplier</th>
                        <th>Onhand Qty</th>
                        <th>Expiry Date</th>
                        <th>Date Arrival</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
             
                    
     <?php 
                 
            if (isset($_POST['submit'])){
                $search=$_POST['search'];
               
              $product="SELECT * FROM stock WHERE product_name LIKE '%$search%' ";  
              $search_product=mysqli_query($connection, $product); 
                
                 if(!$search_product){
                    die("QUERY FAILED" . mysqli_error($connection));
                }
                $count=mysqli_num_rows($search_product);
                if($count == 0){
                echo "<center><h3 style='color:#ffa500'>NO Stock Available</h3><center>";
                    
            } 
            else{
            
             while($row=mysqli_fetch_assoc($search_product)){

                    $stock_id=$row['stock_id'];
                    $barcode_no=$row['barcode_no'];
                    $product_name=$row['product_name'];
                    $product_category=$row['product_category'];
                    $product_type=$row['product_type'];
                    $product_cost=$row['product_cost'];
                    $quantity=$row['quantity'];
                    $supplier=$row['supplier'];
                    $onhand_qty=$row['onhand_qty'];
                    $expiry_date=$row['expiry_date'];
                    $date_arrival=$row['date_arrival'];
                 
                    echo "<tr>";
                 
                    echo "<td>$stock_id</td>";
                    echo "<td>$barcode_no</td>";
                    echo "<td>$product_name</td>";
                    echo "<td>$product_category</td>";
                    echo "<td>$product_type</td>";
                    echo "<td>$product_cost</td>";
                    echo "<td>$quantity</td>";
                    echo "<td>$supplier</td>";
                    echo "<td>$onhand_qty</td>";
                    echo "<td>$expiry_date</td>";
                    echo "<td>$date_arrival</td>";
                 
                 
    echo "<td><a class='btn btn-primary' href='inventory.php?source=edit_stock&edit_stock={$stock_id}'>Edit</a></td>";   
                 
    echo "<td><a class='btn btn-danger' onClick=\"javascript:return confirm('Are you Sure you want to delete');\"href='inventory.php?delete={$stock_id}'>Delete</a></td>";
                 
                    echo "</tr>";  
                    
                    } 
                  }
                }  
                 else{
                        
                    $query="SELECT * FROM stock ";
                    $select_query=mysqli_query($connection,$query);
                        
                    while($row=mysqli_fetch_assoc($select_query)){

                    $stock_id=$row['stock_id'];
                    $barcode_no=$row['barcode_no'];
                    $product_name=$row['product_name'];
                    $product_category=$row['product_category'];
                    $product_type=$row['product_type'];
                    $product_cost=$row['product_cost'];
                    $quantity=$row['quantity'];
                    $supplier=$row['supplier'];
                    $onhand_qty=$row['onhand_qty'];
                    $expiry_date=$row['expiry_date'];
                    $date_arrival=$row['date_arrival'];
                        
                    echo "<tr>";
               
                    echo "<td>$stock_id</td>";
                    echo "<td>$barcode_no</td>";
                    echo "<td>$product_name</td>";
                    echo "<td>$product_category</td>";
                    echo "<td>$product_type</td>";
                    echo "<td>$product_cost INR</td>";
                    echo "<td>$quantity</td>";
                    echo "<td>$supplier</td>";
                    echo "<td>$onhand_qty</td>";
                    echo "<td>$expiry_date</td>";
                    echo "<td>$date_arrival</td>";
                 
                 
                    echo "<td><a class='btn btn-primary' href='inventory.php?source=edit_stock&edit_stock={$stock_id}'>Edit</a></td>";                 
       echo "<td><a class='btn btn-danger' onClick=\"javascript:return confirm('Are you Sure you want to delete');\"href='inventory.php?delete={$stock_id}'>Delete</a></td>";
                    echo "</tr>";  
                    
                    }
      
                 }
                  
              
            ?> 
                    
        </tbody>      
    </table>
 </div>  

            <?php

               if(isset($_GET['delete'])){
                     $the_stock_id=$_GET['delete'];
                     $query="DELETE FROM stock WHERE stock_id={$the_stock_id}";
                     $delete_query=mysqli_query($connection,$query);
                     header("Location:inventory.php");
                 }
                  ?>   
                     

                 
                      
                     
                    
                   