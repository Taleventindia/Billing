 <?php 
     
       if(isset($_POST['create_supplier'])){
           
            $firstname          =  $_POST['firstname'];
            $lastname           =  $_POST['lastname'];
            $phone              =  $_POST['phone'];
            $email              =  $_POST['email'];
            $company            = $_POST['company'];
            $display_name       = $_POST['display_name'];
            $website            = $_POST['website'];
            $other              = $_POST['other'];
            $gst_in             = $_POST['gst_in'];
            $address            = $_POST['address'];
            $notes              = $_POST['notes'];
            $tax_info           = $_POST['tax_info'];
            $payment_and_billing= $_POST['payment_and_billing'];
            $attachments        = $_POST['attachments'];
            $pan_no             = $_POST['pan_no'];
            $adhaar_no          = $_POST['adaar_no'];
                
           
//   if(!empty($email) && !empty($password) && !empty($confirmpassword) && !empty($user_firstname) && !empty($user_lastname) && !empty($user_phone) && !empty($user_address)){
          
     $query="INSERT INTO suppliers".
         '(firstname,lastname,phone,email,company,display_name,website,other,gst_in,address,notes,tax_info,payment_and_billing,attachments,pan_no,adhaar_no)'.   
    "VALUES('".$firstname ."', '". $lastname."', '". $phone ."','" .$email ."','". $company."','".$display_name."','".website."','".$other."' ,'".$gst_in ."','". $address."','".$notes."','".$tax_info."','".$payment_and_billing."','".$attachments."','".$pan_no."','".$adhaar_no."') ";
                      
        $create_supplier_query=mysqli_query($connection,$query);
           
        confirmQuery($create_supplier_query);
           
        echo "supplier Created:"." "."<a href='suppliers.php'>View supplier?</a>" ;   
     
//       
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
           <input type="text" class="form-control" name="firstname">
        </div>
        <br>
       <div class="input-group">
            <label for="title">Lastname</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <br>
        <div class="input-group">
            <label for="phone">Phone no</label>
            <input type="phone no" class="form-control" name="phone">
        </div> 
       <br>
       <div class="input-group">
            <label for="email">E-mail</label>
           <input type="email" class="form-control" name="email">
        </div>
        <br>
        <div class="input-group">
            <label for="company">Company</label>
           <input type="text" class="form-control" name="company">
        </div>
       <br>
       <div class="input-group">
            <label for="Display name">Display Name</label>
           <input type="text" class="form-control" name="display_name">
        </div>
<!--            <h6 class="text-center" style="color:#ff0000"><?php //echo $message_cpassworad; ?>-->
       <br>
       <div class="input-group">
            <label for="website">Website</label>
           <input type="text" class="form-control" name="website">
        </div>
       <br>
       <div class="input-group">
            <label for="other">Other</label>
           <input type="text" class="form-control" name="other">
        </div>
       <br>
       <div class="input-group">
            <label for="gstin">GST IN</label>
           <input type="text" class="form-control" name="gst_in">
        </div>
       <br>
        
        <div class="input-group">
            <label for="address">Address</label>
         <textarea class="form-control" name="address" id="body" cols="25" rows="4"></textarea>
        </div>
       <br>
       <div class="input-group">
            <label for="notes">Notes</label>
           <textarea class="form-control" name="notes" id="body" cols="25" rows="4"></textarea>
        </div>
       <br>
       <div class="input-group">
            <label for="tax info">Tax Info</label>
           <input type="text" class="form-control" name="notes">
        </div>
       <br>
       <div class="input-group">
            <label for="payment and billing">Payment</label>
           <input type="text" class="form-control" name="payment_and_billing">
        </div>
       <br>
       <div class="input-group">
            <label for="attachments">Attachments</label>
           <input type="text" class="form-control" name="attachments">
        </div>
       <br>
       <div class="input-group">
            <label for="pan no">Pan no</label>
           <input type="text" class="form-control" name="pan_no">
        </div>
       <br>
       <div class="input-group">
            <label for="adhaar no">Adhaar no</label>
           <input type="text" class="form-control" name="adhaar_no">
        </div>
       <br>
       <div class="input-group">
            <input class="btn btn-primary" type="submit" name="create_supplier" value="Add supplier">
        </div>
        
       </form>
    
      
     
    