<?php 
            
      function confirmQuery($result){

          global $connection;

          if(!$result){
              die("Query Failed" . mysqli_error($connection));

          }

      }  


        function insert_categories() {
           global $connection;   

     if(isset($_POST['submit'])){
          $cat_title=$_POST['cat_title'];

          if($cat_title == "" || empty($cat_title)){
            echo "This field should not be empty";

            }else{

           $query="INSERT INTO categories".
           '(cat_title)'.
           "VALUES('". $cat_title ."')";

           $create_category_query=mysqli_query($connection,$query);

        if(!$create_category_query){
        die('QUERY FAILED' . mysqli_error($connection));

           } 

        }

     } 
                
  }
                    
              // Find All Categories Query 

            function findAllCategories(){
               global $connection;
                 
                        
                    $query="SELECT * FROM categories";
                    $select_all_categories = mysqli_query($connection,$query);
                          
                    while($row=mysqli_fetch_assoc($select_all_categories)){
                        $cat_id=$row['cat_id'];     
                        $cat_title=$row['cat_title'];
                        echo "<tr>";    
                        echo "<td> {$cat_id} </td>";
                        echo "<td> {$cat_title} </td>";
                        echo "<td><a class='btn btn-primary' href='categories.php?edit={$cat_id}'>Edit</a></td>";
                        echo "<td><a class='btn btn-danger' href='categories.php?delete={$cat_id}'>Delete</a></td>";
                        echo "</tr>";    
                    }
                      
            }


                   // DELETE QUERY

          function deleteCategories(){
             global $connection;
        
              if(isset($_GET['delete'])){
                                  
               $the_cat_id=$_GET['delete'];
                                  
                 $query="DELETE FROM categories WHERE cat_id={$the_cat_id}";
                 $delete_query=mysqli_query($connection,$query);
                   header("Location:categories.php");
                  
               }        
             }


        function stock(){
         global $connection; 
            
           $product="SELECT * FROM stock ";
           $search_product=mysqli_query($connection,$product);
            
           while($row=mysqli_fetch_assoc($search_product)){
           
            $product_name=$row['product_name'];
       
         }
       }

     ?>

<!--        <select class="form-control"  name="item"id="item"> -->
                   
            <?php      
//                      function stocklist(){  
//                         global $connection; 
//                          
//                        $product="SELECT * FROM stock";
//                        $search_product=mysqli_query($connection,$product);
//
//                        confirmQuery($search_product);  
//
//                        while($row=mysqli_fetch_assoc($search_product)){
//                        $product_name=$row['product_name'];
//                
//                        echo "<option value='$product_name'>$product_name</option>";
//             
//                         }     
//                        } 
//                        
//                      }
                ?>   
<!--         </select>  -->

 
                
         
                      
                           