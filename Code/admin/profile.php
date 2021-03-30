<?php include "includes/admin_header.php"; ?>
<?php
                        
    if(isset($_SESSION['firstname'])){
        
       $user_firstname =  $_SESSION['firstname'];
        
     $query="SELECT * FROM users WHERE user_firstname = '{$user_firstname}' ";
     $select_user_profile = mysqli_query($connection,$query);

         while($row=mysqli_fetch_array($select_user_profile)){

                $user_id=$row['user_id'];
                $email=$row['user_email'];
//                $user_password=$row['user_password'];
                $user_phone=$row['user_phone'];
                $user_firstname=$row['user_firstname'];
                $user_lastname=$row['user_lastname'];
                $user_role=$row['user_role'];
//                $user_image=$row['user_image'];


         }

    }

  ?>

  <?php
     
      if(isset($_POST['update_profile'])){
           
            $user_firstname =  $_POST['user_firstname'];
            $user_lastname =  $_POST['user_lastname'];
            $user_role =  $_POST['user_role'];
          
//            $user_image = $_FILES['image']['name'];
//            $user_image_tempname = $_FILES['image']['tmp_name'];
           
            
            $email =  $_POST['user_email'];
            $user_phone = $_POST['user_phone'];
//            $user_password =  $_POST['user_password'];

           
          
    $query="UPDATE users SET user_firstname= '{$user_firstname}', user_lastname= '{$user_lastname}', user_email= '{$email}', user_phone= '{$user_phone}',user_role='{$user_role}' WHERE user_firstname= '{$user_firstname}' ";  
                      
        $update_profile_query=mysqli_query($connection,$query);
           
        confirmQuery($update_profile_query);
           
      }

    ?>
   
   
    <div id="wrapper">

        <!-- Navigation -->
      <?php include "includes/admin_navigation.php"; ?>
       
        <div id="page-wrapper">

            <div class="container-fluid">                    
            
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    
                        <h1 class="page-header">
                            Profile
                           
                        </h1>
                       
                                        
   <form action=""method="post" enctype="multipart/form-data">
          
           
       <div class="form-group">
            <label for="title">Firstname</label>
            <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
        </div>
        
       <div class="form-group">
            <label for="title">Lastname</label>
            <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
        </div>
        
    
<!--
       <div class="form-group">
            <label for="user_image">Post Image</label>
            <input type="file" name="image">
       </div>
-->
     
<!--
       <div class="form-group"> 
            <label for="post_tags">Username</label>
            <input type="text" value="<?php //echo $username; ?>" class="form-control" name="username">
        </div>
-->
        
       <div class="form-group">
            <label for="user_email">Email</label>
           <input type="email" value="<?php echo $email; ?>" class="form-control" name="user_email">
        </div>
       
        <div class="form-group">
            <label for="phone">phone no</label>
           <input type="phone " value="<?php echo $user_phone; ?>" class="form-control" name="user_phone">
        </div>
       <div class="form-group">
            <label for="role">Role no</label>
           <input type="role " value="<?php echo 
        $user_role; ?>" class="form-control" name="user_role">
        </div>
        
        
<!--
        <div class="form-group">
            <label for="post_content">Password</label>
           <input type="password" value="<?php //echo $user_password; ?>" class="form-control" name="user_password">
        </div>
        
-->
       <div class="form-group">
            <input class="btn btn-primary" type="submit" name="update_profile" value="Update profile">
        </div>
        
       </form>
       
      
                    </div>
                </div>
                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include "includes/admin_footer.php"; ?>