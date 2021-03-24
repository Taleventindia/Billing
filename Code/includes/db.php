<?php

$connection=mysqli_connect('localhost','root','root','billing','3307');

   if ($connection){
//<<<<<<< HEAD
       
   //  echo "we are connected";
//=======
     echo "we are connected";
//>>>>>>> 4ed43e127381e7bf1fafd85852973810bdf04e9e
     }else{
         die ("database connection failed");
        }
     
?>