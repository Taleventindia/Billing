
<?php session_start(); ?>

<?php
    
    
     $_SESSION['email'] = null;
     $_SESSION['firstname'] = null;
     $_SESSION['lastname'] = null;
     $_SESSION['user_role'] = null;

    header("Location: ../index.php");


?>
    
     