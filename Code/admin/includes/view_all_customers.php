<div class="card">  
  
            <table class="table table-bordered table-hover">
              
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Amount paid</th>
                        <th>Amount pending</th>
                        <th>Payment Mode</th>
                        <th>Payment status</th>
                        <th>Comments</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                            
     <?php 
          
                    
             $query="SELECT * FROM customers ";
             $select_customers=mysqli_query($connection,$query);
                    
             while($row=mysqli_fetch_assoc($select_customers)){
                 
                    $customer_id = $row['customer_id'];
                    $custname =  $row['custname'];
                    $lastname =  $row['lastname'];
                    $phone =  $row['phone'];
                    $email =  $row['email'];
                    $address =  $row['address'];
                    $amount_paid =  $row['amount_paid'];
                    $amount_pending =  $row['amount_pending'];
                    $payment_mode =  $row['payment_mode'];
                    $payment_status =  $row['payment_status'];
                    $comments =  $row['comments'];
                 
                    echo "<tr>";
                 
                    echo "<td>$customer_id</td>";
                    echo "<td>$custname</td>";
                    echo "<td>$lastname</td>";
                    echo "<td>$phone</td>";
                    echo "<td>$email</td>";
                    echo "<td>$address</td>";
                    echo "<td>$amount_paid</td>";
                    echo "<td>$amount_pending</td>";
                    echo "<td>$payment_mode</td>";
                    echo "<td>$payment_status</td>";                 
                    echo "<td>$comments</td>";
                 
             
                    echo "<td><input type='image' src='assets/icons/edit.svg' width='13' height ='13'> <a href='customers.php?source=edit_customer&edit_customer={$customer_id}'>Edit</a></td>";
                    echo "<td><input type='image' src='assets/icons/delete.svg' width='15' height ='15'><a onClick=\"javascript:return confirm('Are you Sure you want to delete');\"href='customers.php?delete={$customer_id}'>Delete</a></td>";
                 
                    echo "</tr>";

                    }

                    ?>
                      
            </tbody>
        </table>
           
            <?php
 

                 if(isset($_GET['delete'])){
                     $the_customer_id=$_GET['delete'];
                     $query="DELETE FROM customers WHERE customer_id={$the_customer_id}";
                     $delete_query=mysqli_query($connection,$query);
                     header("Location:customers.php");
                     
                 }

            ?>   
                     
    </div>
                 
                      
                     
                    
                   