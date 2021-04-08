 <?php include "includes/admin_header.php"; ?>

<style type="text/css">
    
    .container
        {
            width:1500px;  
            height:810px;
            margin: 0 auto;
            background-color:darkgray;
            
        }
    
    </style>

     <div id="wrapper">
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
                 
                <?php
                    
                    if(isset($_SESSION['firstname'])){
        
                     $user_firstname =  $_SESSION['firstname'];       
        
     $query="SELECT * FROM users WHERE user_firstname = '{$user_firstname}' ";
     $select_user_profile = mysqli_query($connection,$query);
                        
             ?>
              <br>  
              <br>  
              <br>  
              <br>  
            <h2 style="text-align: center;">My Profile</h2>   
                    
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
           <img class="rounded-circle" height=200 width=210 src ='../images/<?php echo $_SESSION['image'] ?>' alt="">           
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
                    
                    