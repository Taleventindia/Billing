<div class="card"> 
  <div class="card-body">
    <div class="main-panel"> 
             <table  cellpadding="50" cellspacing="5" class="table table-bordered table-hover">
              <thead>
                    <tr>
                        <th>Invoice #</th>
                        <th>Invoice Date</th>
                        <th>Customer Name</th>
                        <th>Number Of Items</th>
                        <th>Round Total</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                      
     <?php 
                   
             $query="SELECT * FROM register ORDER BY invnum DESC";
             $select_invoice=mysqli_query($connection,$query);
                    
             while($row=mysqli_fetch_assoc($select_invoice)){

                    $invnum=$row['invnum'];
                    $invdate=$row['invdate'];
                    $custname=$row['custname'];
                    $numofprod=$row['numofprod'];
                    $total=$row['total'];
                 
                    echo "<tr>";
               
                    echo "<td>$invnum</td>";
                    echo "<td>$invdate</td>";
                    echo "<td>$custname</td>";
                    echo "<td>$numofprod</td>";
                    echo "<td>$total</td>";
                              
echo "<td><a class='btn btn-danger' onClick=\"javascript:return confirm('Are you Sure you want to delete');\"href='report.php?delete={$invnum}'>Delete</a></td>";
                    echo "</tr>";

                    }

                    ?>

                                    
            </tbody>
        </table> 
     </div>
   </div>
</div>
           
            <?php

                 if(isset($_GET['delete'])){
                     $invnum=$_GET['delete'];
                     $query="DELETE FROM register WHERE invnum={$invnum}";
                     $delete_query=mysqli_query($connection,$query);
                     header("Location:report.php");
                 }
            
                  ?>   
            
                  
 