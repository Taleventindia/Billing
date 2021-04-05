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

    <sript src="https://kit.fontawesome.com/b99e675b6e.js"></sript>
    
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

</head>

<body>
<div class="wrapper">
    
      <!-- Navigation -->
      <?php include "includes/admin_navigation.php"; ?>
    
    <div class="left">
    <img class='img-circle profile-image' height=120 width=130 src ="'../images/<?php echo $user_image; ?>'" alt=""> 
               
         <h3>  
             <?php echo $_SESSION['firstname']; ?>
         </h3>       
    </div>
    
    </div>
    <div class="right">
       
    <div class="info_data">
        <div class="data">
           <h4>Email</h4>
            <p>ramya@gmail.com</p>
        </div>
        <div class="data">
           <h4>Phone</h4>
            <p>xxxxxxxxxx</p>
        </div>
        </div>
    
    </div>
          
 
    <?php include "includes/admin_footer.php"; ?>