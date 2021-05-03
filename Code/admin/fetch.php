<?php

$connection=mysqli_connect('localhost','root','root','billing','3307');

$data = array();

if(isset($_GET["query"])){
    
    $query = "SELECT firstname FROM customers WHERE firstname LIKE '%".$_GET["query"]."%' ";
    
    $statement=mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_assoc($statement)){
        
        $data[] = $row["firstname"];
        
    }
    
}

 echo json_encode($data);

?>