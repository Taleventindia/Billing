
<?php
//error_reporting(0);
//		try 
//		{
//				 // connect to SQLite from PDO database
//				 $dbh = new PDO("sqlite:omelec.db");
//             $connection=mysqli_connect('localhost','root','root','billing','3307');
//		}
//		catch(PDOException $e)
//		{
//				 echo $e->getMessage();//this getMessage throws an exception if any 
//			  
//		}
//		
//	
//		$sql = $connection->query("select * from register ORDER BY invnum DESC");

?>

<?php include "includes/admin_header.php"; ?>
<div class="main-panel">
<div class="card">
<div class="card-body">   
    <h3 class="page-header">
        Invoice
    </h3>

	<style type="text/css">
	<!--
	@import url("style.css");
	-->
	</style>
	<script type="text/javascript">
    function funcdelete(id,name){
        var del=confirm("Are you sure you want to delete INVOICE #"+id+" of "+name+" ??");
        if(del==true)
        {
            window.location="delinvoice.php?id="+id;
            return false;
        }
    }
    </script>
<?php 		
		if(isset($_GET['action'])) {
			$mat=$_GET['action'];
			if($mat=='success')
			echo '<script type="text/javascript">alert("SUCCESSFULLY DELETED");</script>';
			
		}
?>
   <div class="dropdown toolbar-item">
     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
     <div class="dropdown-menu" aria-labelledby="dropdownsorting">
       <a class="dropdown-item" href="#">Last Day</a>
       <a class="dropdown-item" href="#">Last Month</a>
       <a class="dropdown-item" href="#">Last Year</a>
     </div>
   </div>   
    <div class="card">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Invoice#</th>
                <th scope="col">Customer Name</th>
                <th scope="col">No.of Items</th>
                <th scope="col">Invoice Date</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Payment Mode</th>
                <th scope="col">Due Date</th>
                <th scope="col">Amount</th>
                <th scope="col">Action</th>
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
                 
       ?>
                <tr>
                <td><a href="viewbill.php?inv=<?php echo $row['invnum'];?>"><?php echo 'INV-';?><?php echo $row['invnum'];?></a></td>
                <td><?php echo $row['custname'];?></td>
                <td><?php echo $row['numofprod'];?></td>
                <td><?php echo $row['invdate'];?></td>
                <td><?php echo 'Paid';?></td>
                <td><?php echo 'Cash';?></td>
                <td><?php echo $row['invdate'];?></td>
                <td>Rs. <?php echo $row['rbdf'];?></td>
                <td><input type="image" src="assets/icons/delete.svg" width="15" height ="15" onclick="return funcdelete('<?php echo $row['invnum'];?>','<?php echo $row['custname'];?>')"/>
                    </td>
            </tr> 

            <?php     } ?>

        </tbody>
    </table>

</div>
    </div>
</div>
</div>
    </div>
<?php include "includes/admin_footer.php"; ?>