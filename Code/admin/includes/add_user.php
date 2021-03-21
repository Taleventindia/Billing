 <?php 
     
       if(isset($_POST['create_user'])){
           
            $user_firstname =  $_POST['user_firstname'];
            $user_lastname =  $_POST['user_lastname'];
            $user_role =  $_POST['user_role'];
          
//            $user_image = $_FILES['image']['name'];
//            $user_image_tempname = $_FILES['image']['tmp_name'];
           
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
//           
//         
//         $row = mysqli_fetch_array($select_randSalt_query);
//         $salt = $row['randSalt'];
//         $hashed_password = crypt($user_password,$salt);  
           
          
     $query="INSERT INTO users".
         '(user_firstname, user_lastname, user_role, user_email, user_password)'.   
    "VALUES('". $user_firstname ."', '". $user_lastname ."','". $user_role ."','". $user_email ."','". $user_password ."') ";
                      
        $create_user_query=mysqli_query($connection,$query);
           
        confirmQuery($create_user_query);
           
        echo "User Created:"." "."<a href='users.php'>View User</a>" ;   
           
//      move_uploaded_file($user_image_tempname,"../images/$user_image");

       
       }
      

   ?>      
                
   <form action=""method="post" enctype="multipart/form-data">
          
           
       <div class="form-group">
            <label for="title">Firstname</label>
            <input type="text" class="form-control" name="user_firstname">
        </div>
        
       <div class="form-group">
            <label for="post_status">Lastname</label>
            <input type="text" class="form-control" name="user_lastname">
        </div>
        
        

        <div class="form-group">
            <select name="user_role"id="user_role">
            
            <option value="User">select options</option>
            <option value="admin">admin</option>
            <option value="User">User</option>
            <option value="Customer">Customer</option>
            <option value="Supplier">Supplier</option>
         </select> 
      </div>
        
  
<!--
       <div class="form-group">
            <label for="user_image">Post Image</label>
            <input type="file" name="image">
       </div>
     
       <div class="form-group"> 
            <label for="post_tags">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
-->

        
       <div class="form-group">
            <label for="post_content">Email</label>
           <input type="email" class="form-control" name="user_email">
        </div>
        
        <div class="form-group">
            <label for="post_content">Password</label>
           <input type="password" class="form-control" name="user_password">
        </div>
        
       <div class="form-group">
            <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
        </div>
        
       </form>
       
      
     
    