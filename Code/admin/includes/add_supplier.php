 <?php 
     
       if(isset($_POST['create_supplier'])){
           
            $user_firstname =  $_POST['user_firstname'];
            $user_lastname =  $_POST['user_lastname'];
            $user_phone =  $_POST['user_phone'];
            $user_email =  $_POST['user_email'];
            $user_password =  $_POST['user_password'];
            $user_confirmpassword = $_POST['user_confirmpassword'];
            $user_address =  $_POST['user_address'];
            $user_role =  $_POST['user_role'];
           
//   if(!empty($email) && !empty($password) && !empty($confirmpassword) && !empty($user_firstname) && !empty($user_lastname) && !empty($user_phone) && !empty($user_address)){
          
     $query="INSERT INTO users".
         '(user_firstname, user_lastname, user_phone, user_role, user_email, user_password, user_confirmpassword, user_address)'.   
    "VALUES('". $user_firstname ."', '". $user_lastname ."', '". $user_phone ."','". supplier ."','". $user_email ."','". $user_password ."','". $user_confirmpassword ."','". $user_address ."') ";
                      
        $create_user_query=mysqli_query($connection,$query);
           
        confirmQuery($create_user_query);
           
        echo "User Created:"." "."<a href='suppliers.php'>View supplier</a>" ;   
     
       
//       }
//           else {
//          
//          $message = "Invalid supplier details";
//          
//      } 
//           
//    } else {
//         
//         $message = "";  
      
    }

   ?>      
                
   <form action="" method="post" enctype="multipart/form-data">
          
<!--          <h6 class="text-center" style="color:#ff0000"><?php //echo $message; ?></h6>-->
       
       <div class="input-group">
            <label for="title">Firstname</label>  
           <input type="text" class="form-control" name="user_firstname">
        </div>
        <br>
       <div class="input-group">
            <label for="title">Lastname</label>
            <input type="text" class="form-control" name="user_lastname">
        </div>
        <br>
        <div class="input-group">
            <label for="phone">Phone no</label>
            <input type="phone no" class="form-control" name="user_phone">
        </div> 
       <br>
<!--
        <div class="input-group">
            <label for="user_role">Role</label>
            <select class="form-control" name="user_role"id="user_role">
            <option value="User">select options</option>
            <option value="admin">admin</option>
            <option value="User">User</option>
            <option value="supplier">supplier</option>
            <option value="Supplier">Supplier</option>
         </select> 
      </div>
-->
        
       <div class="input-group">
            <label for="email">E-mail</label>
           <input type="email" class="form-control" name="user_email">
        </div>
        <br>
        <div class="input-group">
            <label for="password">Password</label>
           <input type="password" class="form-control" name="user_password">
        </div>
       <br>
       <div class="input-group">
            <label for="confirmpassword">confirmPassword</label>
           <input type="password" class="form-control" name="user_confirmpassword">
        </div>
       <br>
        <div class="input-group">
            <label for="user_address">Address</label>
<!--           <input type="text" class="form-control" name="user_address"> -->
         <textarea class="form-control" name="user_address" id="body" cols="25" rows="4"></textarea>
        </div>
       <br>
       <div class="input-group">
            <input class="btn btn-primary" type="submit" name="create_supplier" value="Add supplier">
        </div>
        
       </form>
       
      
     
    