<?php

$connection=mysqli_connect('localhost','root','root','cms','3307');

if($connection){
    echo "we are connected";
} else{
    die ("connection failed");
}
 
?>