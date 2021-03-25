
        <form action=""method='post'>       
  
            <table class="table table-bordered table-hover">
              
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Address</th>
<!--                        <th>Role</th>-->
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                            
     <?php 

             $query="SELECT user_id,user_firstname,user_lastname,user_phone,user_email,user_address FROM users WHERE user_role='customer' ";
             $select_customers=mysqli_query($connection,$query);
                    
             while($row=mysqli_fetch_assoc($select_customers)){

                    $user_id=$row['user_id'];
                    $user_password=$row['user_password'];
                    $user_firstname=$row['user_firstname'];
                    $user_lastname=$row['user_lastname'];
                    $user_phone=$row['user_phone'];
                    $user_email=$row['user_email'];
                    $user_address=$row['user_address'];
//                    $user_role=$row['user_role'];
                    
                   

                    echo "<tr>";
                 
                    echo "<td>$user_id</td>";
                    echo "<td>$user_firstname</td>";
                    echo "<td>$user_lastname</td>";
                    echo "<td>$user_phone</td>";
                    echo "<td>$user_email</td>";
                    echo "<td>$user_address</td>";
//                    echo "<td>$user_role</td>";
                    
                 
                  
//                    echo "<td><a href='users.php?change_to_admin={$user_id}'>Admin</a></td>";
//                    echo "<td><a href='users.php?change_to_sub={$user_id}'>Subscriber</a></td>";
                    echo "<td><a class='btn btn-primary' href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
 echo "<td><a class='btn btn-danger' onClick=\"javascript:return confirm('Are you Sure you want to delete');\"href='users.php?delete={$user_id}'>Delete</a></td>";
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


                 if(isset($_GET['delete'])){
                     $the_user_id=$_GET['delete'];
                     $query="DELETE FROM users WHERE user_id={$the_user_id}";
                     $delete_query=mysqli_query($connection,$query);
                     header("Location:users.php");
                 }
                  ?>   
                     

                 
                      
                     
                    
                   