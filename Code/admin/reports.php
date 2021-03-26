
<?php
error_reporting(0);
		try 
		{
				 // connect to SQLite from PDO database
				 $dbh = new PDO("sqlite:omelec.db");

		}
		catch(PDOException $e)
		{
				 echo $e->getMessage();//this getMessage throws an exception if any 
			  
		}
		
		
		$sql = $dbh->query("select * from register ORDER BY invnum DESC");
?>

<?php include "./includes/admin_navigation.php"; ?>
<div id="wrapper">
            <div id="page-wrapper">
                <div class="container-fluid">

                    <h3>Invoice List</h3>
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
        foreach ($sql as $row)
        {
			?>
            <tr>
                <td><a href="viewbill.php?inv=<?php echo $row['invnum'];?>"><?php echo $row['invnum'];?></a></td>
                <td><a href="viewbill.php?inv=<?php echo $row['invnum'];?>"><?php echo $row['invdate'];?></a></td>
                <td><a href="viewbill.php?inv=<?php echo $row['invnum'];?>"><?php echo $row['custname'];?></a></td>
                <td><a href="viewbill.php?inv=<?php echo $row['invnum'];?>"><?php echo $row['numofprod'];?></a></td>
                <td><a href="viewbill.php?inv=<?php echo $row['invnum'];?>">Rs. <?php echo $row['rbdf'];?></a></td>
                <td><input type="button" class="btn btm-primary" value="Delete" onclick="return funcdelete('<?php echo $row['invnum'];?>','<?php echo $row['custname'];?>')"/></td>
            </tr>
			<?php
		}
		?>
        </tbody>
    </table>
                <!-- Bootstrap Core CSS -->
                <link href="./css/bootstrap.min.css" rel="stylesheet">

                <!-- Custom CSS -->
                <link href="./css/sb-admin.css" rel="stylesheet">

                <!-- Custom Fonts -->
                <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

               <link href="./css/styles.css" rel="stylesheet">

               <script type="text/javascript" src="./js/loader.js"></script>    

            </div>
        </div>
</div>
