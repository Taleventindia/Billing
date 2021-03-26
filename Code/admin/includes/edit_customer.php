 <?php 
     
       if(isset($_GET['edit_customer'])){
           
        $the_customer_id = $_GET['edit_customer'];
           
           $query="SELECT * FROM customers WHERE customer_id = $the_customer_id ";
           $select_customers=mysqli_query($connection,$query);
                    
             while($row=mysqli_fetch_assoc($select_customers)){

                $customer_id = $row['customer_id'];
                $firstname =  $row['firstname'];
                $lastname =  $row['lastname'];
                $phone =  $row['phone'];
                $email =  $row['email'];
                $address =  $row['address'];
                $payment_and_billing =  $row['payment_and_billing'];
                 
//                $company =  $row['company'];
//                $display_name =  $row['display_name'];
//                $website =  $row['website'];
//                $other =  $row['other'];
//                $gst_in =  $row['gst_in'];          
//                $notes =  $row['notes'];
//                $tax_info =  $row['tax_info'];
//                $attachments =  $row['attachments'];
//                $pan_no =  $row['pan_no'];
//                $adhaar_no =  $row['adhaar_no'];
                  
             }
           }

       if(isset($_POST['edit_customer'])){
           
                $customer_id = $_POST['customer_id'];
                $firstname =  $_POST['firstname'];
                $lastname =  $_POST['lastname'];
                $phone =  $_POST['phone'];
                $email =  $_POST['email'];
                $address =  $_POST['address'];
                $payment_and_billing =  $_POST['payment_and_billing'];
           
//                $company =  $_POST['company'];
//                $display_name =  $_POST['display_name'];
//                $website =  $_POST['website'];
//                $other =  $_POST['other'];
//                $gst_in =  $_POST['gst_in'];               
//                $notes =  $_POST['notes'];
//                $tax_info =  $_POST['tax_info'];      
//                $attachments =  $_POST['attachments'];
//                $pan_no =  $_POST['pan_no'];
//                $adhaar_no =  $_POST['adhaar_no'];
 
          
    $query="UPDATE customers SET firstname= '{$firstname}', lastname= '{$lastname}', phone= '{$phone}', email= '{$email}', address= '{$address}', payment_and_billing='{$payment_and_billing}' WHERE customer_id= {$the_customer_id} ";  
       
//        $query="UPDATE customers SET firstname= '{$firstname}', lastname= '{$lastname}', phone= '{$phone}', email= '{$email}', address= '{$address}' WHERE customer_id= {$the_customer_id} ";     
           
           
        $edit_customer_query=mysqli_query($connection,$query);
           
        confirmQuery($edit_customer_query);
           
    
           echo "Customer Updated" . "<a href='customers.php'>View customers?</a>";

       
       }
      

   ?>      
                
   <form action="" method="post" enctype="multipart/form-data">
     
           
       <div class="input-group">
            <label for="title">Firstname</label>
            <input type="text" value="<?php echo $firstname; ?>" class="form-control" name="firstname">
        </div>
        <br>
       <div class="input-group">
            <label for="title">Lastname</label>
            <input type="text" value="<?php echo $lastname; ?>" class="form-control" name="lastname">
        </div>
        <br>
        <div class="input-group">
            <label for="user_phone">Phone No</label>
            <input type="varchar" value="<?php echo $phone; ?>" class="form-control" name="phone">
        </div>
         <br>
        
       <div class="input-group">
            <label for="user_email">Email</label>
           <input type="email" value="<?php echo $email; ?>" class="form-control" name="email">
        </div>
         <br>
<!--
         <div class="input-group">
            <label for="company">Company</label>
           <input type="text" value="<?php //echo $company; ?>" class="form-control" name="company">
        </div>
       <br>
       <div class="input-group">
            <label for="Display name">Display Name</label>
           <input type="text" value="<?php //echo $display_name; ?>" class="form-control" name="display_name">
        </div>
       <br>
       <div class="input-group">
            <label for="website">Website</label>
           <input type="text" value="<?php //echo $website; ?>" class="form-control" name="website">
        </div>
       <br>
       <div class="input-group">
            <label for="other">Other</label>
           <input type="text" value="<?php //echo $other; ?>" class="form-control" name="other">
        </div>
       <br>
       <div class="input-group">
            <label for="gstin">GST IN</label>
           <input type="text" value="<?php //echo $gst_in; ?>" class="form-control" name="gstin">
        </div>
       <br>
-->
        
        <div class="input-group">
            <label for="address">Address</label>
          <input type="text" value="<?php echo $address; ?>" class="form-control" name="address">  
<!--         <textarea type="text" value="<?php echo $address; ?>" class="form-control" name="address" id="body" cols="25" rows="4"></textarea>-->
        </div>
       <br>
<!--
       <div class="input-group">
            <label for="notes">Notes</label>
           <textarea type="text" value="<?php //echo $notes; ?>" class="form-control" name="notes" id="body" cols="25" rows="4"></textarea>
        </div>
       <br>
       <div class="input-group">
            <label for="tax info">Tax Info</label>
           <input type="text" value="<?php //echo $tax_info; ?>" class="form-control" name="notes">
        </div>
       <br>
-->
       <div class="input-group">
            <label for="payment and billing">Payment</label>
           <input type="text" value="<?php echo $payment_and_billing; ?>" class="form-control" name="payment_and_billing">
        </div>
       <br>
<!--
       <div class="input-group">
            <label for="attachments">Attachments</label>
           <input type="text" value="<?php //echo $attachments; ?>" class="form-control" name="attachments">
        </div>
       <br>
       <div class="input-group">
            <label for="pan no">Pan no</label>
           <input type="text" value="<?php //echo $pan_no; ?>" class="form-control" name="pan_no">
        </div>
       <br>
       <div class="input-group">
            <label for="adhaar no">Adhaar no</label>
           <input type="text" value="<?php //echo $adhaar_no; ?>" class="form-control" name="adhaar_no">
        </div>
       <br>
-->
       <div class="input-group">
            <input class="btn btn-primary" type="submit" name="edit_customer" value="Update customer">
       </div>
       </form>
       
      
     
    