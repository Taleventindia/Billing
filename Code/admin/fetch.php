<?php include "../includes/db.php"; ?>
<?php
$data = array();
if(isset($_GET["query"]))
{

 $query = "SELECT firstname FROM customers WHERE firstname LIKE '".$_GET["query"]."%' ORDER BY firstname ASC LIMIT 15 ";

 $statement = mysqli_query($connection,$query);

// $statement->execute();

 while($row = mysqli_fetch_array($statement))
 {
  $data[] = $row["firstname"];
 }
}

echo json_encode($data);

?>
