<?php  include "includes/db.php"; ?>
 <?php  include "includes/header.php"; ?>
 
 <?php 

     if(isset($_POST['submit'])){
         
//         $username = $_POST['username'];
         $email    = $_POST['user_email'];    
         $password = $_POST['user_password'];
         $confirmpassword =$_POST['user_password'];;
         $user_firstname=  $_POST['user_firstname'];
         $user_lastname=  $_POST['user_lastname'];
//         $user_role=$_POST['role'];
         
      if(!empty($email) && !empty($password) && !empty($confirmpassword) && !empty($user_firstname) && !empty($user_lastname)){
          
         
         
//    $user_firstname = mysqli_real_escape_string($connection,$user_firstname);     
//    $user_lastname = mysqli_real_escape_string($connection,$user_lastname);     
//    $email = mysqli_real_escape_string($connection,$email);     
//    $password = mysqli_real_escape_string($connection,$password);  
//     $confirmpassword = mysqli_real_escape_string($connection,$confirmpassword);        
          
              
//         $query = "SELECT randSalt FROM users";
//         $select_randSalt_query = mysqli_query($connection,$query);
         
//      if(!$select_randSalt_query){
//          
//          die("QUERY FAILED" . mysqli_error($connection));
//          
//      }
//         
//         $row = mysqli_fetch_array($select_randSalt_query);
//         $salt = $row['randSalt'];
//         $password = crypt($password,$salt);  
        
        $query = "INSERT INTO users (user_email,user_password,user_confirmpassword,user_firstname,user_lastname,user_role) ";
        $query .= "VALUES ('{$email}','{$password}','{$password}','{$user_firstname}','{$user_lastname}','subscriber') ";
             
        $register_user_query = mysqli_query($connection,$query);
             
        if(!$register_user_query) {
            
            die("Query Failed" . mysqli_error($connection) .' '. mysqli_error($connection));
            
            
        }
         
       $message = "Your Registration has been Submitted";  
          
      } else {
          
          $message = "Fields cannot be Empty";
          
      }
            
    } else {
         
         $message = "";
         
     }
         

  ?>


    <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; ?>
    
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="on">
                       
                       <h6 class="text-center"><?php echo $message; ?></h6>
                       
                            <div class="form-group">
                            <label for="title">Firstname</label>
                            <input type="text" class="form-control" name="user_firstname">
                            </div>

                            <div class="form-group">
                            <label for="title">Lastname</label>
                            <input type="text" class="form-control" name="user_lastname">
                            </div>
                        
                         <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="user_email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                         <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="user_password" id="password" class="form-control" placeholder="***********">
                        </div>
                          
                        <div class="form-group mb-4">
                    <label for="confirmpassword">ConfirmPassword</label>
                    <input type="password" name="user_confirmpassword" id="password" class="form-control" placeholder="***********">
                  </div>
                        
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                        
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
        
        
    </div> <!-- /.container -->
</section>


        



<?php include "includes/footer.php";?>
