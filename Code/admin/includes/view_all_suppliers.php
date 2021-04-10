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
          
                    
             $query="SELECT * FROM suppliers ";
             $select_suppliers=mysqli_query($connection,$query);
                    
             while($row=mysqli_fetch_assoc($select_suppliers)){

                    $supplier_id = $row['supplier_id'];
                    $firstname =  $row['firstname'];
                    $lastname =  $row['lastname'];
                    $phone =  $row['phone'];
                    $email =  $row['email'];
                    $address =  $row['address'];
                    $payment_and_billing =  $row['payment_and_billing'];
                    $comments =  $row['Notes'];
                 
                    echo "<tr>";
                 
                    echo "<td>$supplier_id</td>";
                    echo "<td>$firstname</td>";
                    echo "<td>$lastname</td>";
                    echo "<td>$phone</td>";
                    echo "<td>$email</td>";
                    echo "<td>$address</td>";
                    echo "<td>$payment_and_billing</td>";
                    echo "<td>$comments</td>";
                 
             
                    echo "<td><a class='btn btn-primary' href='suppliers.php?source=edit_supplier&edit_supplier={$supplier_id}'>Edit</a></td>";
 echo "<td><a class='btn btn-danger' onClick=\"javascript:return confirm('Are you Sure you want to delete');\"href='suppliers.php?delete={$supplier_id}'>Delete</a></td>";
                 
                    echo "</tr>";

                    }

                    ?>
                      
            </tbody>
        </table>

            <?php
 

                 if(isset($_GET['delete'])){
                     $the_supplier_id=$_GET['delete'];
                     $query="DELETE FROM suppliers WHERE supplier_id={$the_supplier_id}";
                     $delete_query=mysqli_query($connection,$query);
                     header("Location:suppliers.php");
                     
                 }

            ?>   
                     
</div>
                 
                      
                     
                    
                   