 <?php 
     
       if(isset($_GET['edit_user'])){
           
        $the_user_id = $_GET['edit_user'];
           
           $query="SELECT * FROM users WHERE user_id = $the_user_id ";
           $select_users=mysqli_query($connection,$query);
                    
             while($row=mysqli_fetch_assoc($select_users)){

                    $user_id=$row['user_id'];
//                    $username=$row['username'];
                    $user_password=$row['user_password'];
                    $user_firstname=$row['user_firstname'];
                    $user_lastname=$row['user_lastname'];
                    $user_email=$row['user_email'];
//                    $user_image=$row['user_image'];
                    $user_role=$row['user_role'];
                 
             }
           
           
       }

       if(isset($_POST['edit_user'])){
           
            $user_firstname =  $_POST['user_firstname'];
            $user_lastname =  $_POST['user_lastname'];
            $user_role =  $_POST['user_role'];
//          
//            $user_image = $_FILES['image']['name'];
//            $user_image_tempname = $_FILES['image']['tmp_name'];
//           
//            $username =  $_POST['username'];
            $user_email =  $_POST['user_email'];
            $user_password =  $_POST['user_password'];
           
           
    
//         $query = "SELECT randSalt FROM users";
//         $select_randSalt_query = mysqli_query($connection,$query);
//         
//              if(!$select_randSalt_query){
//          
//             die("QUERY FAILED" . mysqli_error($connection));
//           
//         }
           
         
//         $row = mysqli_fetch_array($select_randSalt_query);
//         $salt = $row['randSalt'];
//         $hashed_password = crypt($user_password,$salt);  
           
          
    $query="UPDATE users SET user_firstname= '{$user_firstname}', user_lastname= '{$user_lastname}', user_role= '{$user_role}', user_email= '{$user_email}', user_password= '{$user_password}' WHERE user_id= {$the_user_id} ";  
                      
        $edit_user_query=mysqli_query($connection,$query);
           
        confirmQuery($edit_user_query);
           
//      move_uploaded_file($user_image_tempname,"../images/$user_image");
           
           
           echo "User Updated" . "<a href='users.php'>View Users?</a>";

       
       }
      

   ?>      
                
   <form action="" method="post" enctype="multipart/form-data">
          
           
       <div class="form-group">
            <label for="title">Firstname</label>
            <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
        </div>
        
       <div class="form-group">
            <label for="post_status">Lastname</label>
            <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
        </div>
        
        
        <div class="form-group">
            <select name="user_role"id="user_role">
            
            <option value="<?php echo $user_role;?>"> 
                <?php echo $user_role; ?>
                </option> 
            
         <?php 
                if($user_role == 'admin'){
                    
                    echo "<option value='subscriber'>subscriber</option>";
                    
                }else{
                    
                    echo "<option value='admin'>admin</option>";
                }
             
            
            ?>
            
            
         </select> 
      </div>
        
  
<!--
       <div class="form-group">
            <label for="user_image">Post Image</label>
            <input type="file" name="image">
       </div>
     
       <div class="form-group"> 
            <label for="post_tags">Username</label>
            <input type="text" value="<?php 
// echo $username; 
?>" class="form-control" name="username">
        </div>
-->
        
       <div class="form-group">
            <label for="post_content">Email</label>
           <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
        </div>
        
        <div class="form-group">
            <label for="post_content">Password</label>
           <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
        </div>
        
       <div class="form-group">
            <input class="btn btn-primary" type="submit" name="edit_user" value="Update User">
        </div>
        
       </form>
       
      
     
    