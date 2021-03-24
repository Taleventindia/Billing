    <form action=""method='post'>       
  
            <table class="table table-bordered table-hover">
              <thead>
                    <tr>
                        <th>Invoice No</th>
                        <th>Invoice Date</th>
                        <th>Customer Name</th>
                        <th>Number Of Items</th>
                        <th>Round Total</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                            
     <?php 

             $query="SELECT * FROM invoice";
             $select_invoice=mysqli_query($connection,$query);
                    
             while($row=mysqli_fetch_assoc($select_invoice)){

                    $invoice_no=$row['invoice_no'];
                    $invoice_date=$row['invoice_date'];
                    $customer_name=$row['customer_name'];
                    $number_of_items=$row['number_of_items'];
                    $round_total=$row['round_total'];
                 
                    echo "<tr>";
               
                    echo "<td>$invoice_no</td>";
                    echo "<td>$invoice_date</td>";
                    echo "<td>$customer_name</td>";
                    echo "<td>$number_of_items</td>";
                    echo "<td>$round_total</td>";
                 
//                    echo "<td><a href='users.php?change_to_admin={$user_id}'>Admin</a></td>";
//                    echo "<td><a href='users.php?change_to_sub={$user_id}'>Subscriber</a></td>";
                 
                    echo "<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";                 
echo "<td><a onClick=\"javascript:return confirm('Are you Sure you want to delete');\"href='invoice.php?delete={$user_id}'>Delete</a></td>";
                    echo "</tr>";

                    }

                    ?>

                                    
            </tbody>
        </table>

</form>
           
            <?php

//                 if(isset($_GET['change_to_admin'])){
//                     $the_user_id=$_GET['change_to_admin'];
//                     $query="UPDATE users SET user_role='admin' WHERE user_id=$the_user_id ";
//                     $change_to_admin_query = mysqli_query($connection,$query);
//                     header("Location:users.php");
//                 }


//                 if(isset($_GET['change_to_sub'])){
//                     $the_user_id=$_GET['change_to_sub'];
//                     $query="UPDATE users SET user_role='subscriber' WHERE user_id=$the_user_id ";
//                     $change_to_sub_query = mysqli_query($connection,$query);
//                     header("Location:users.php");
//                 }
//
//
                 if(isset($_GET['delete'])){
                     $the_invoice_no=$_GET['delete'];
                     $query="DELETE FROM invoice WHERE invoice_no={$the_invoice_no}";
                     $delete_query=mysqli_query($connection,$query);
                     header("Location:invoice.php");
                 }
                  ?>   
                     

                 
                      
                     
                    
                   