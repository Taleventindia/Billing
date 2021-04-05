<?php

$connection=mysqli_connect('localhost','root','root','billing','3307');

   if ($connection){
        echo"connected";
     }else{
         die ("database connection failed");
        }
     
?>