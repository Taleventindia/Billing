<?php include "includes/db.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>

    
    <?php 

     if(isset($_POST['submit'])){
         
         $user_firstname=  $_POST['user_firstname'];
         $user_lastname=  $_POST['user_lastname'];
         $user_phone =  $_POST['user_phone'];
         $email    = $_POST['user_email'];    
         $password = $_POST['user_password'];
         $confirmpassword =$_POST['user_password'];
         $user_address =  $_POST['user_address'];
        
//         $user_role=$_POST['role'];
         
      if(!empty($email) && !empty($password) && !empty($confirmpassword) && !empty($user_firstname) && !empty($user_lastname)){
          
         
         echo "Inside if statement";
          
//    $user_firstname = mysqli_real_escape_string($connection,$user_firstname);     
//    $user_lastname = mysqli_real_escape_string($connection,$user_lastname);     
//    $email = mysqli_real_escape_string($connection,$email);     
//    $password = mysqli_real_escape_string($connection,$password);  
//     $confirmpassword = mysqli_real_escape_string($connection,$confirmpassword);        
          
       
        $query = "INSERT INTO users (user_firstname,user_lastname,user_phone,user_email,user_password,user_confirmpassword,user_address,user_role) ";
        $query .= "VALUES ('{$user_firstname}','{$user_lastname}','{$user_phone}','{$email}','{$password}','{$user_confirmpassword}','{$user_address}','user') ";
             
        $register_user_query = mysqli_query($connection,$query);
             
        if(!$register_user_query) {
            
            die("Query Failed" . mysqli_error($connection) .' '. mysqli_error($connection));
            
            
        }
	    
       $message = "Your Registration has been Submitted";
          
       header("Location:index.php");
          
      } else {
          
          $message = "Fields cannot be Empty";
          
      }       
    } else {
         
         $message = "";  
    }
    

  ?>
  
    <!-- Navigation  -->
    
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0"> 
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="assets/images/logo.svg" alt="logo" class="logo">

              </div>
              <p class="login-card-description">Register your account</p>
                
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
			<input type="submit" name="submit" id="btn-login" class="btn btn-block login-btn mb-4" value="Register">
				</form> 
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
                
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
  </main> 
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
