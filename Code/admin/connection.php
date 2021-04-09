<?php include "../includes/db.php"; ?>

<?php
         function stock(){
         global $connection; 
            
         $product="SELECT product_name FROM stock WHERE stock_id=$stock_id ";
         $search_product=mysqli_query($connection,$product);
            
          while($row=mysqli_fetch_assoc($search_product)){
              
            $stock_id=$row['stock_id'];  
            $product_name=$row['product_name'];
              
            echo "<tr>";  
             echo "<td> {$product_name} </td>";
            echo"</tr>";  
                }
             }
          echo "$product_name";
         ?>
 