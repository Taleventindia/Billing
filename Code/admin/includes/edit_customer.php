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
       
         header("Location:./customers.php");  
       
       
       }
      

   ?>      

 <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data" class="form-sample">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label" >First Name *</label>
                <div class="col-sm-9">
                  <input type="text" value="<?php echo $firstname; ?>" size="65"  maxlength="65" class="form-control" name="firstname"/>
                </div>
              </div>
              </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Last Name *</label>
                <div class="col-sm-9">
                  <input type="text" value="<?php echo $lastname; ?>" size="65"  maxlength="65" class="form-control" name="lastname"/>
                </div>
              </div>
            </div>
        </div>
            <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Phone no *</label>
                <div class="col-sm-9">
                  <input type="phone no" value="<?php echo $phone; ?>" class="form-control" name="phone"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">E-mail *</label>
                <div class="col-sm-9">
                  <input type="email" value="<?php echo $email; ?>" class="form-control" name="email"/>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label for="address" class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-9">
                  <input type="address" value="<?php echo $address; ?>" class="form-control" name="address"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label for="payment and billing" class="col-sm-3 col-form-label">Payment</label>
                <div class="col-sm-9">
                  <input type="text" value="<?php echo $payment_and_billing; ?>" class="form-control" name="payment_and_billing"/>
                </div>
              </div>
            </div> 
        </div>
            <br>
            <center><input class="btn btn-primary" type="submit" name="edit_customer" value="Update customer"></center>
          </form>
        </div>
    </div>
</div>

    
     
    