 <?php 

   if(isset($_POST['CheckBoxArray'])){
       
       foreach($_POST['CheckBoxArray'] as $uservalueId){
        
          $bulk_options = $_POST['bulk_options'];
           
          
  switch($bulk_options){
                   
           case 'admin':

             $query = "UPDATE users SET user_role='{$bulk_options}' WHERE user_id={$uservalueId} " ;                  
             $update_to_admin_status = mysqli_query($connection,$query);

                   confirmQuery($update_to_admin_status);

             break; 


            case 'subscriber':

              $query = "UPDATE users SET user_role='{$bulk_options}' WHERE user_id={$uservalueId} " ;                  
              $update_to_subscriber_status = mysqli_query($connection,$query);

                   confirmQuery($update_to_subscriber_status);

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
   
        <form action=""method='post'>       
  
            <table class="table table-bordered table-hover">
               
               <div id="bulkOptionContainer" class="col-xs-4">
               <select class="form-control" name="bulk_options" id="">
                   
                <option value="">Select Options</option>
                <option value="admin">Admin</option>
                <option value="subscriber">Subscriber</option>
                <option value="delete">Delete</option>
<!--                <option value="clone">Clone</option>-->
                     
               </select>
            </div>  
              
               <div class="col-xs-4">
                   
                <input type="submit" name="submit" class="btn btn-success" value="Apply"> <a class ="btn btn-primary" href="users.php?source=add_user">Add New</a>   
                   
               </div>
              
               
                <thead>
                    <tr>
                        <th><input id="SelectAllBoxes" type="CheckBox"></th>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Admin</th>
                        <th>Subscriber</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                            
     <?php 

             $query="SELECT * FROM users";
             $select_users=mysqli_query($connection,$query);
                    
             while($row=mysqli_fetch_assoc($select_users)){

                    $user_id=$row['user_id'];
                    $username=$row['username'];
                    $user_password=$row['user_password'];
                    $user_firstname=$row['user_firstname'];
                    $user_lastname=$row['user_lastname'];
                    $user_email=$row['user_email'];
                    $user_image=$row['user_image'];
                    $user_role=$row['user_role'];
                   

                    echo "<tr>";
                 
                 ?>
                 
                 <td><input class='CheckBoxes' type="CheckBox" name='CheckBoxArray[]' value='<?php echo $user_id; ?>'></td>
                  
             <?php
                 
                    echo "<td>$user_id</td>";
                    echo "<td>$username</td>";
                    echo "<td>$user_firstname</td>";
                    echo "<td>$user_lastname</td>";
                    echo "<td>$user_email</td>";
                    echo "<td>$user_role</td>";
                 
                  
                    echo "<td><a href='users.php?change_to_admin={$user_id}'>Admin</a></td>";
                    echo "<td><a href='users.php?change_to_sub={$user_id}'>Subscriber</a></td>";
                    echo "<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
 echo "<td><a onClick=\"javascript:return confirm('Are you Sure you want to delete');\"href='users.php?delete={$user_id}'>Delete</a></td>";
                    echo "</tr>";

                    }

                    ?>

                                    
            </tbody>
        </table>

</form>
           
            <?php

                 if(isset($_GET['change_to_admin'])){
                     $the_user_id=$_GET['change_to_admin'];
                     $query="UPDATE users SET user_role='admin' WHERE user_id=$the_user_id ";
                     $change_to_admin_query = mysqli_query($connection,$query);
                     header("Location:users.php");
                 }


                 if(isset($_GET['change_to_sub'])){
                     $the_user_id=$_GET['change_to_sub'];
                     $query="UPDATE users SET user_role='subscriber' WHERE user_id=$the_user_id ";
                     $change_to_sub_query = mysqli_query($connection,$query);
                     header("Location:users.php");
                 }


                 if(isset($_GET['delete'])){
                     $the_user_id=$_GET['delete'];
                     $query="DELETE FROM users WHERE user_id={$the_user_id}";
                     $delete_query=mysqli_query($connection,$query);
                     header("Location:users.php");
                 }
                  ?>   
                     

                 
                      
                     
                    
                   