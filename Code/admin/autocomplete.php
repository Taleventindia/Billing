<?php include "../includes/db.php"; ?>
<?php    
                
        $query = "SELECT * FROM customers WHERE custname like'%".$search."%'";
        $result = mysqli_query($connection,$query);

        $response = array();
        while($row = mysqli_fetch_array($result) ){
//        $response[] = array("label"=>$row['product_name'],"label"=>$row['product_cost']);
            
          $customer_id[]=$row['customer_id'];
         $custname[]=$row['custname'];  
            
        $data['customer_id'] = $row['customer_id']; 
        $data['value'] = $row['custname'];        
        array_push($response, $data);    
      }

       echo json_encode($custname);

          
//      $data = array();
//       foreach ($result as $row) {
//        $customer_id[]=$row['customer_id'];
//        $custname[]=$row['custname'];
//        $data[] = $row;
//
//      }
//        
//       echo json_encode($custname); 

                
  ?>   