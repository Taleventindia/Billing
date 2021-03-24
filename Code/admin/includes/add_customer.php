 <?php 
     
       if(isset($_POST['create_customer'])){
           
            $user_firstname =  $_POST['user_firstname'];
            $user_lastname =  $_POST['user_lastname'];
            $user_phone =  $_POST['user_phone'];
            $user_email =  $_POST['user_email'];
            $user_password =  $_POST['user_password'];
            $user_confirmpassword =  $_POST['user_confirmpassword'];
            $user_address =  $_POST['user_address'];
            $user_role =  $_POST['user_role'];
      `
          
     $query="INSERT INTO users".
         '(user_firstname, user_lastname, user_phone, user_role, user_email, user_password, user_confirmpassword, user_address)'.   
    "VALUES('". $user_firstname ."', '". $user_lastname ."', '". $user_phone ."','". $user_role ."','". $user_email ."','". $user_password ."','". $user_confirmpassword ."','". $user_address ."') ";
                      
        $create_user_query=mysqli_query($connection,$query);
           
        confirmQuery($create_user_query);
           
        echo "User Created:"." "."<a href='customers.php'>View Customer</a>" ;   
     
       
       }
      

   ?>      
                
   <form action="" method="post" enctype="multipart/form-data">
          
           
       <div class="input-group">
            <label for="title">Firstname</label>  
           <br>
            <input type="text" class="form-control" name="user_firstname">
           
<!--
        </div>
        
       <div class="input-group">
-->
            <br>
            <label for="title">Lastname</label>
            <br>
            <input type="text" class="form-control" name="user_lastname">
        </div>
        
        <div class="input-group">
            <label for="user_phone">Phone No</label>
            <input type="integer" class="form-control" name="user_phone">
        </div>
       
        <div class="input-group">
            <label for="user_role">Role</label>
           <br>
            <select class="form-control" name="user_role"id="user_role">
            
            <option value="User">select options</option>
            <option value="admin">admin</option>
            <option value="User">User</option>
            <option value="Customer">Customer</option>
            <option value="Supplier">Supplier</option>
         </select> 
      </div>
        
  
<!--
       <div class="input-group">
            <label for="user_image">Post Image</label>
            <input type="file" name="image">
       </div>
     
       <div class="input-group"> 
            <label for="post_tags">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
-->

        
       <div class="input-group">
            <label for="post_content">Email</label>
           <input type="email" class="form-control" name="user_email">
        </div>
        
        <div class="input-group">
            <label for="post_content">Password</label>
           <input type="password" class="form-control" name="user_password">
        </div>
       
        <div class="input-group">
            <label for="user_address">Address</label>
<!--           <input type="text" class="form-control" name="user_address"> -->
         <textarea class="form-control" name="user_address" id="body" cols="25" rows="5"></textarea>
        </div>
       <br>
       <div class="input-group">
            <input class="btn btn-primary" type="submit" name="create_customer" value="Add Customer">
        </div>
        
       </form>
       
      
     
    