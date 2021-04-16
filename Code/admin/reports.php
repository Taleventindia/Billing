
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
//    function funcdelete(id,name){
//        var del=confirm("Are you sure you want to delete INVOICE #"+id+" of "+name+" ??");
//        if(del==true)
//        {
//            window.location="delinvoice.php?id="+id;
//            return false;
//        }
//    }
    </script>
<?php 		
//		if(isset($_GET['action'])) {
//			$mat=$_GET['action'];
//			if($mat=='success')
//			echo '<script type="text/javascript">alert("SUCCESSFULLY DELETED");</script>';
//			
//		}
?>
    <table id="box-table-a" summary="Employee Pay Sheet" align="center">
        <thead>
            <tr>
                <th scope="col">Invoice#</th>
                <th scope="col">Invoice Date</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Number Of Items</th>
                <th scope="col">Round Total</th>
                <th scope="col">Delete</th>
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

           
            
        foreach ($query as $row)
        {
			?>
            <tr>
                <td><a href="viewbill.php?inv=<?php echo $row['invnum'];?>"><?php echo $row['invnum'];?></a></td>
                <td><a href="viewbill.php?inv=<?php echo $row['invnum'];?>"><?php echo $row['invdate'];?></a></td>
                <td><a href="viewbill.php?inv=<?php echo $row['invnum'];?>"><?php echo $row['custname'];?></a></td>
                <td><a href="viewbill.php?inv=<?php echo $row['invnum'];?>"><?php echo $row['numofprod'];?></a></td>
                <td><a href="viewbill.php?inv=<?php echo $row['invnum'];?>">Rs. <?php echo $row['rbdf'];?></a></td>
                <td><input type="button" class="btn btn-danger" value="Delete" onclick="return funcdelete('<?php echo $row['invnum'];?>','<?php echo $row['custname'];?>')"/></td>
            </tr>
			<?php
		}
		?>
        </tbody>
    </table>

               <link href="./css/styles.css" rel="stylesheet">

               <script type="text/javascript" src="./js/loader.js"></script>    

</div>
    </div>
</div>
<?php include "includes/admin_footer.php"; ?>