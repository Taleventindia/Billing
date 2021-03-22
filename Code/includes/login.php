<?php include "db.php"; ?>
<?php session_start(); ?>

<?php

    if(isset($_REQUEST['submit'])){
        
        $email    = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        
//        $email=mysqli_real_escape_string($connection, $email);
//        $password=mysqli_real_escape_string($connection, $password);
        
//        if(preg_match(email, $db_user_email)) { 
        
        
        $query = "SELECT * FROM users WHERE user_email = '{$email}' ";
        $select_user_query = mysqli_query($connection, $query);
        
        if(!$select_user_query){
            
            die("Query Failed" . mysqli_error($connection));
            
        }
          
          while($row = mysqli_fetch_array($select_user_query)){
              
               $db_id = $row['user_id'];
               $db_user_email = $row['user_email'];
               $db_user_password = $row['user_password'];
               $db_user_firstname = $row['user_firstname'];
               $db_user_lastname = $row['user_lastname'];
               $db_user_role = $row['user_role'];
              
          }
                   
//        $password = crypt($password,$db_user_password);
        
        
        if(preg_match($email === $db_user_email && $password === $db_user_password)){
            
             $_SESSION['email'] = $db_user_email;
             $_SESSION['firstname'] = $db_user_firstname;
             $_SESSION['lastname'] = $db_user_lastname;
             $_SESSION['user_role'] = $db_user_role;

             header("Location: ../admin");
        
            }else{
           
            $message ="Invalid E-mail";
        
        
        }
//            else{
//            
//            header("Location: ../SignInPage.php");
//              
//        }
            
        
        
        }else{
           
            $message ="";
    }
     
   ?>  
    
     