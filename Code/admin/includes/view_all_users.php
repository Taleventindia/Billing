<?php 

   if(isset($_POST['CheckBoxArray'])){
       
       foreach($_POST['CheckBoxArray'] as $uservalueId){
        
          $bulk_options = $_POST['bulk_options'];
           
          
  switch($bulk_options){
          
          case 'Super Admin':

             $query = "UPDATE users SET user_role='{$bulk_options}' WHERE user_id={$uservalueId} " ;                  
             $update_to_superadmin_status = mysqli_query($connection,$query);

                   confirmQuery($update_to_superadmin_status);

             break; 
                   
           case 'Admin':

             $query = "UPDATE users SET user_role='{$bulk_options}' WHERE user_id={$uservalueId} " ;                  
             $update_to_admin_status = mysqli_query($connection,$query);

                   confirmQuery($update_to_admin_status);

             break; 


            case 'User':

              $query = "UPDATE users SET user_role='{$bulk_options}' WHERE user_id={$uservalueId} " ;                  
              $update_to_supplier_status = mysqli_query($connection,$query);

                   confirmQuery($update_to_supplier_status);

             break; 

            case 'delete':

              $query = "DELETE FROM users WHERE user_id={$uservalueId} " ;   

              $update_to_delete_status = mysqli_query($connection,$query);

                   confirmQuery($update_to_delete_status);

             break;  
                 
          }
           
       }
       
   }

?>
 <form action="" method='post'>
    <div class="card">
      <div id="bulkOptionContainer" class="col-xs-4">
          <select class="form-control" name="bulk_options" id="">
                   
                <option value="">Select Options</option>
                <option value="Super Admin">Super Admin</option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
                <option value="delete">Delete</option>
                     
          </select>
        <input type="submit" name="submit" class="btn btn-success" value="Apply">
       </div> 
    </div>

 <div class="card">
 
        <table class="table table-bordered table-hover">
               <div class="col-xs-4">
                   
                
                   
               </div>
              
               
                <thead>
                    <tr>
                        <th><input id="SelectAllBoxes" type="CheckBox"></th>
                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Image</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                            
     <?php 

             $query="SELECT * FROM users";
             $select_users=mysqli_query($connection,$query);
                    
             while($row=mysqli_fetch_assoc($select_users)){

                    $user_id=$row['user_id'];
                    $user_firstname=$row['user_firstname'];
                    $user_lastname=$row['user_lastname'];
                    $user_image = $row['user_image'];
                    $user_phone=$row['user_phone'];
                    $user_email=$row['user_email'];
                    $user_password=$row['user_password'];
                    $user_role=$row['user_role'];
                   

                    echo "<tr>";
                 
                 ?>
                 
                 <td><input class='CheckBoxes' type="CheckBox" name='CheckBoxArray[]' value='<?php echo $user_id; ?>'></td>
                  
             <?php
                 
                    echo "<td>$user_id</td>";
                    echo "<td>$user_firstname</td>";
                    echo "<td>$user_lastname</td>";
                    echo "<td>$user_image</td>";
                    echo "<td>$user_phone</td>";
                    echo "<td>$user_email</td>";
                    echo "<td>$user_role</td>";

                    echo "<td><input type='image' src='assets/icons/edit.svg' width='13' height ='13'><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
                    echo "<td><input type='image' src='assets/icons/delete.svg' width='15' height ='15'><a onClick=\"javascript:return confirm('Are you Sure you want to delete');\"href='users.php?delete={$user_id}'>Delete</a></td>";
                    echo "</tr>";

                    }

                    ?>
                   
            </tbody>
         </table>
      </div>
  </form>
            <?php

                 if(isset($_GET['delete'])){
                     $the_user_id=$_GET['delete'];
                     $query="DELETE FROM users WHERE user_id={$the_user_id}";
                     $delete_query=mysqli_query($connection,$query);
                     header("Location:users.php");
                 }
                  ?>   
                     

                 
                      
                     
                    
                   