<?php include "../includes/db.php"; ?>

<?php
echo "product";

           $product="SELECT product_name FROM stock";

           $search_product=mysqli_query($connection,$product);
 echo "$search_product";
          while($row=mysqli_fetch_assoc($search_product)){

                $product_name=$row['product_name'];
        echo "product3";
                }

                // autocomplete(document.getElementById("myInput"), $product);

     
?>