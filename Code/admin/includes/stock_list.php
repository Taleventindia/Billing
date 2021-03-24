    <form action=""method='post'>       
  
            <table class="table table-bordered table-hover">
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

             $query="SELECT * FROM stock";
             $select_inventory=mysqli_query($connection,$query);
                    
             while($row=mysqli_fetch_assoc($select_inventory)){

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
                 
//                    echo "<td><a href='users.php?change_to_admin={$user_id}'>Admin</a></td>";
//                    echo "<td><a href='users.php?change_to_sub={$user_id}'>Subscriber</a></td>";
                 
                    echo "<td><a class='btn btn-primary' href='inventory.php?source=edit_stock&edit_stock={$stock_id}'>Edit</a></td>";                 
       echo "<td><a class='btn btn-danger' onClick=\"javascript:return confirm('Are you Sure you want to delete');\"href='inventory.php?delete={$user_id}'>Delete</a></td>";
                    echo "</tr>";

                    }

                    ?>

                                    
            </tbody>
        </table>

</form>
           
            <?php

//                 if(isset($_GET['change_to_admin'])){
//                     $the_user_id=$_GET['change_to_admin'];
//                     $query="UPDATE users SET user_role='admin' WHERE user_id=$the_user_id ";
//                     $change_to_admin_query = mysqli_query($connection,$query);
//                     header("Location:users.php");
//                 }


//                 if(isset($_GET['change_to_sub'])){
//                     $the_user_id=$_GET['change_to_sub'];
//                     $query="UPDATE users SET user_role='subscriber' WHERE user_id=$the_user_id ";
//                     $change_to_sub_query = mysqli_query($connection,$query);
//                     header("Location:users.php");
//                 }
//
//
                 if(isset($_GET['delete'])){
                     $the_stock_id=$_GET['delete'];
                     $query="DELETE FROM inventory WHERE stock_id={$the_stock_id}";
                     $delete_query=mysqli_query($connection,$query);
                     header("Location:inventory.php");
                 }
                  ?>   
                     

                 
                      
                     
                    
                   