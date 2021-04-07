<?php ob_start (); ?>
<?php session_start(); ?>
<?php include "../includes/db.php"; ?>
<?php include "functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   <link href="css/styles.css" rel="stylesheet">
   
   <script type="text/javascript" src="../js/loader.js"></script>

    <style type="text/css">
    
    .container-fluid
        {
            width:1356px;  
            height:710px;
            margin: 0 auto;
            background-color:darkgrey;
            
        }
    
    </style>
   
</head>

<body>


    <div id="wrapper">

        <!-- Navigation -->
      <?php include "includes/admin_navigation.php"; ?>
       
        <div id="page-wrapper">

            <div class="container-fluid">                    
            
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
             
                        
    <div class="container">
        
            <form action="" method="post">
                 <br>
                <button class="btn btn-default" style="float: right; width:70px; background-color: #adff2f;" name="submit"><a href="edit_profile.php">Edit</a></button>
                
            </form>   
        
                <div class="wrapper">
                   <br>
                <?php
                    
                    if(isset($_SESSION['firstname'])){
        
                     $user_firstname =  $_SESSION['firstname'];       
        
     $query="SELECT * FROM users WHERE user_firstname = '{$user_firstname}' ";
     $select_user_profile = mysqli_query($connection,$query);
                        
             ?>
                
            <h3 style="text-align: center;">Profile</h3>   
                    
        <?php            
                        
         while($row=mysqli_fetch_array($select_user_profile)){

                $user_id=$row['user_id'];
                $email=$row['user_email'];
                $user_password=$row['user_password'];
                $user_confirmpassword=$row['user_confirmpassword'];
                $user_phone=$row['user_phone'];
                $user_firstname=$row['user_firstname'];
                $user_lastname=$row['user_lastname'];
                $user_role=$row['user_role'];
                $user_image=$row['user_image'];
                
               }
             }

      ?>
                    
       <div style='text-align: center'>          
           <img class='img-circle profile-image' height=130 width=140 src ='../images/<?php echo $user_image; ?>' alt="">           
          </div>          
          <div  style="text-align: center;">
                    
                 <h3>  
                     <?php echo $_SESSION['firstname']; ?>
                 </h3>       
            </div>      
                <?php
                  echo "<b>";   
                  echo "<h2><table class='table table-bordered'>";
                    echo "<tr>";
                        echo "<td>";
                          echo "<b> First Name: </b>";
                        echo "</td>";
                        echo "<td>";
                          echo $user_firstname;
                        echo "</td>";
                    echo "</tr>";
                    
                    echo "<tr>";
                        echo "<td>";
                          echo "<b> Last Name: </b>";
                        echo "</td>";
                        echo "<td>";
                          echo $user_lastname;
                        echo "</td>";
                    echo "</tr>";
                    
                    echo "<tr>";
                        echo "<td>";
                            echo "<b> E-mail: </b>";
                        echo "</td>";
                        echo "<td>";
                            echo $email;
                        echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                      echo "<td>";
                        echo "<b> Phone no: </b>";
                      echo "</td>";
                      echo "<td>";
                        echo $user_phone;
                      echo "</td>";
                    echo "</tr>";
               
                    echo "<tr>";
                      echo "<td>";
                        echo "<b> Role: </b>";
                      echo "</td>";
                      echo "<td>";
                        echo $user_role;
                      echo "</td>";
                    echo "</tr>";
                   
                  echo "</table></h2>";   
                   echo "</b>"; 
                ?>

            </div>       
          </div>           
        </div>
      </div>   
    </div>
  </div>
</div>         
    <?php include "includes/admin_footer.php"; ?>
                    
                    