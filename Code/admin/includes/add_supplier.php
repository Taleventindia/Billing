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
        
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <form class="form-sample">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" >First Name</label>
                            <div class="col-sm-9">
                              <input type="text" size="65"  maxlength="65" class="form-control" name="firstname"/>
                            </div>
                          </div>
                          </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                              <input type="text" size="65"  maxlength="65" class="form-control" name="lastname"/>
                            </div>
                          </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Phone no</label>
                            <div class="col-sm-9">
                              <input type="phone no" class="form-control" name="phone"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">E-mail</label>
                            <div class="col-sm-9">
                              <input type="email"   class="form-control" name="email"/>
                            </div>
                          </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Company</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="company"/>
                            </div>
                          </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="Display name" class="col-sm-3 col-form-label">Display Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="Display name"/>
                            </div>
                          </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="website" class="col-sm-3 col-form-label">Website</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="website"/>
                            </div>
                          </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="other" class="col-sm-3 col-form-label">Other</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="Other"/>
                            </div>
                          </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="gstin" class="col-sm-3 col-form-label">GST IN</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="gst_in"/>
                            </div>
                          </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label">address</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" name="address" id="body" cols="23" rows="4"></textarea>
                            </div>
                          </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="notes" class="col-sm-3 col-form-label">Notes</label>
                            <div class="col-sm-9">
                              <textarea class="form-control"  name="notes" id="body" cols="25" rows="4"></textarea>
                            </div>
                          </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="tax info" class="col-sm-3 col-form-label">Tax Info</label>
                            <div class="col-sm-9">
                              <input type="text"  class="form-control" name="tax_info">
                            </div>
                          </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="payment and billing" class="col-sm-3 col-form-label">Payment</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="payment_and_billing"/>
                            </div>
                          </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="attachments" class="col-sm-3 col-form-label">Attachments</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="attachments"/>
                            </div>
                          </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="Pan no"  class="col-sm-3 col-form-label">Pan no</label>
                            <div class="col-sm-9">
                              <input type="text" size="70"  maxlength="70" class="form-control" name="Pan_no"/>
                            </div>
                          </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="adhaar no" class="col-sm-3 col-form-label">Adhaar No</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="adhaar_no"/>
                            </div>
                          </div>
                        </div>
                    </div>
                      </form>
                    </div>
                </div>
       </div>
       <div class="input-group">
            <input class="btn btn-primary" type="submit" name="create_supplier" value="Add supplier">
        </div>

      
     
    