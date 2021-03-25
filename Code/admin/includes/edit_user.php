 <?php 
     
       if(isset($_GET['edit_user'])){
           
        $the_user_id = $_GET['edit_user'];
           
           $query="SELECT * FROM users WHERE user_id = $the_user_id ";
           $select_users=mysqli_query($connection,$query);
                    
             while($row=mysqli_fetch_assoc($select_users)){

                    $user_id =  $row['user_id'];
                    $user_password =  $row['user_password'];
                    $user_firstname =  $row['user_firstname'];
                    $user_lastname =  $row['user_lastname'];
                    $user_phone =  $row['user_phone'];
                    $user_email =  $row['user_email'];
                    $user_address =  $row['user_address'];
                    $user_role =  $row['user_role'];
//                    $username=$row['username'];                
//                    $user_image=$row['user_image'];
             }
           
           
       }

       if(isset($_POST['edit_user'])){
           
            $user_firstname =  $_POST['user_firstname'];
            $user_lastname =  $_POST['user_lastname'];
            $user_phone=$_POST['user_phone'];
            $user_role =  $_POST['user_role'];        
            $user_email =  $_POST['user_email'];
            $user_password =  $_POST['user_password'];
            $user_address=$_POST['user_address'];       
    
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
           
          
    $query="UPDATE users SET user_firstname= '{$user_firstname}', user_lastname= '{$user_lastname}', user_phone= '{$user_phone}', user_role= '{$user_role}', user_email= '{$user_email}', user_password= '{$user_password}', user_address= '{$user_address}' WHERE user_id= {$the_user_id} ";  
                      
        $edit_user_query=mysqli_query($connection,$query);
           
        confirmQuery($edit_user_query);
           
    
           echo "User Updated" . "<a href='users.php'>View Users?</a>";

       
       }
      

   ?>      
                
   <form action="" method="post" enctype="multipart/form-data">
<!--       <div class="column no-gutters">   -->
           
       <div class="input-group">
            <label for="title">Firstname</label>
            <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
        </div>
        <br>
       <div class="input-group">
            <label for="title">Lastname</label>
            <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
        </div>
        <br>
        <div class="input-group">
            <label for="user_phone">Phone No</label>
            <input type="varchar" value="<?php echo $user_phone; ?>" class="form-control" name="user_phone">
        </div>
         <br>
        <div class="input-group">
            <label for="user_role">Role</label>
            <select class="form-control" name="user_role"id="user_role">
            
            <option value="<?php echo $user_role;?>"><?php echo $user_role; ?></option> 
            
         <?php 
                if($user_role == 'admin'){
                    
                    echo "<option value='user'>user</option>";
                    
                }else{
                    
                    echo "<option value='admin'>admin</option>";
                    echo "<option value='user'>user</option>";
                    echo "<option value='customer'>customer</option>";
                }
             
            
            ?>
            
            
         </select> 
      </div>
        <br>
     
       <div class="input-group">
            <label for="user_email">Email</label>
           <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
        </div>
         <br>
        <div class="input-group">
            <label for="user_password">Password</label>
           <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
        </div>
         <br>
        <div class="input-group">
            <label for="user_address">Address</label>
<!--           <input type="text" value="<?php echo $user_address; ?>" class="form-control" name="user_address">-->
           <textarea type="text" value="<?php echo $user_address; ?>" class="form-control" name="user_address" id="body" cols="25" rows="4"></textarea>
        </div>
        <br>
       <div class="input-group">
            <input class="btn btn-primary" type="submit" name="edit_user" value="Update User">
<!--        </div>-->
       </div>
       </form>
       
      
     
    