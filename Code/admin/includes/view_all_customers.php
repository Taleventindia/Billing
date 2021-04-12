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
                        <th>Payment and Billing</th>
                        <th>Comments</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    
                            
     <?php 
          
                    
             $query="SELECT * FROM customers ";
             $select_customers=mysqli_query($connection,$query);
                    
             while($row=mysqli_fetch_assoc($select_customers)){

                    $customer_id = $row['customer_id'];
                    $firstname =  $row['firstname'];
                    $lastname =  $row['lastname'];
                    $phone =  $row['phone'];
                    $email =  $row['email'];
                    $address =  $row['address'];
                    $payment_and_billing =  $row['payment_and_billing'];
                    $comments =  $row['Notes'];
                 
                    echo "<tr>";
                 
                    echo "<td>$customer_id</td>";
                    echo "<td>$firstname</td>";
                    echo "<td>$lastname</td>";
                    echo "<td>$phone</td>";
                    echo "<td>$email</td>";
                    echo "<td>$address</td>";
                    echo "<td>$payment_and_billing</td>";
                    echo "<td>$comments</td>";
                 
             
                    echo "<td><a class='btn btn-primary' href='customers.php?source=edit_customer&edit_customer={$customer_id}'>Edit</a></td>";
 echo "<td><a class='btn btn-danger' onClick=\"javascript:return confirm('Are you Sure you want to delete');\"href='customers.php?delete={$customer_id}'>Delete</a></td>";
                 
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
                 
                      
                     
                    
                   