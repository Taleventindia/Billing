<?php include "includes/admin_header.php"; ?>
<?php
                        
    if(isset($_SESSION['firstname'])){
        
       $user_firstname =  $_SESSION['firstname'];
        
     $query="SELECT * FROM users WHERE user_firstname = '{$user_firstname}' ";
     $select_user_profile = mysqli_query($connection,$query);

         while($row=mysqli_fetch_array($select_user_profile)){

                $user_id=$row['user_id'];
                $email=$row['user_email'];
                $user_password=$row['user_password'];
                $user_confirmpassword=$row['user_confirmpassword'];
                $user_phone=$row['user_phone'];
                $user_firstname=$row['user_firstname'];
                $user_lastname=$row['user_lastname'];
                $user_image=$row['user_image'];
                $user_role=$row['user_role'];
                


         }

    }

  ?>

  <?php
     
      if(isset($_POST['update_profile'])){
           
            $user_firstname =  $_POST['user_firstname'];
            $user_lastname =  $_POST['user_lastname'];
            $user_role =  $_POST['user_role'];
            $user_image = $_FILES['image']['name'];
            $user_image_tempname = $_FILES['image']['tmp_name'];
            $email =  $_POST['user_email'];
            $user_phone = $_POST['user_phone'];
            $user_password =  $_POST['user_password'];
            $user_confirmpassword =  $_POST['user_confirmpassword'];

          
        move_uploaded_file($user_image_tempname,"../images/$user_image");
        
        if(empty($user_image)){
            
            $query = "SELECT * FROM users WHERE user_id = $user_id ";
            $select_image = mysqli_query($connection,$query);
                
            while($row = mysqli_fetch_array($select_image)){
                
            $user_image = $row['user_image'];
              
               }
            
          } 
         
        $uppercase = preg_match('@[A-Z]@', $user_password);
        $lowercase = preg_match('@[a-z]@', $user_password);
        $number    = preg_match('@[0-9]@', $user_password);
        $character = preg_match('/[\'^£!$%&*()}{@#~?><>,|=_+-]/', $user_password);
            
        if($uppercase && $lowercase && $number && $character) {

        if(strlen($user_password) >= 8) { 
          
        if($user_password==$user_confirmpassword){
              
    $query="UPDATE users SET user_firstname= '{$user_firstname}', user_lastname= '{$user_lastname}',user_image= '{$user_image}', user_email= '{$email}',user_password='{$user_password}', user_confirmpassword='{$user_confirmpassword}',user_phone= '{$user_phone}',user_role='{$user_role}' WHERE user_firstname= '{$user_firstname}' ";  
                      
        $update_profile_query=mysqli_query($connection,$query);
           
        confirmQuery($update_profile_query);
              
         }else{
             
           $message_confirm="password did not match";
             
         }
         }else{
              $message_strnpassworad = "password contain atleast 8 characters";
              
       }
            
         }else{
              $message_password = "Password must contain a special character";
            
       }    
            
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
                    
                        <h1 class="page-header" style="color:#8a2be2">
                            Profile
                            <small>
                        <h2  style="color:#1e90ff"> 
<?php 
                             if(isset($_SESSION['firstname'])){ 
                             echo $_SESSION['firstname'];   
                             } 
                           
                            ?></h2></small>
                           
                        </h1>
                       
                                        
   <form action=""method="post" enctype="multipart/form-data" >
          
       
        <div class="form-group">
       <img width='100' src ='../images/<?php echo $user_image; ?>' alt="">

            <input type="file" name="image">
       </div>
       
       <div class="input-group">
            <label for="title">Firstname</label>
            <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
        </div>
       <br>
        
       <div class="input-group">
            <label for="title">Lastname</label>
            <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
        </div>
       <br>
       
       <div class="input-group">
            <label for="user_email">E-mail</label>
           <input type="email" value="<?php echo $email; ?>" class="form-control" name="user_email">
        </div>
       <br>
       <div class="input-group">
            <label for="password">Password</label>
           <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
        </div>
          <h6 class="" style="color:#ff0000"><?php echo $message_strnpassworad; ?></h6>
          <h6 class="" style="color:#ff0000"><?php echo $message_password; ?></h6>
       <br>
        <div class="input-group">
            <label for="password">Confirm</label>
           <input type="password" value="<?php echo $user_confirmpassword; ?>" class="form-control" name="user_confirmpassword">
        </div>
          <h6 class="" style="color:#ff0000"><?php echo $message_confirm; ?></h6>
       <br>
       
       
        <div class="input-group">
            <label for="phone">phone no</label>
           <input type="phone " value="<?php echo $user_phone; ?>" class="form-control" name="user_phone">
        </div>
       <br>
       <div class="input-group">
            <label for="role">Role </label>
           <input type="role " value="<?php echo 
        $user_role; ?>" class="form-control" name="user_role">
        </div>
        <br>
        
<!--
        <div class="input-group">
            <label for="post_content">Password</label>
           <input type="password" value="<?php //echo $user_password; ?>" class="form-control" name="user_password">
        </div>
        
-->
       <div class="input-group">
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