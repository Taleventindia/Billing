<?php include "includes/admin_header.php"; ?>
<div class="card">
<div class="content-wrapper">
    
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    
                        <h3 class="page-header">
                            Inventory
                            <small>List</small>
                        </h3>

        <?php 

            if(isset($_GET['source'])){

            $source=$_GET['source'];

            } else {

            $source= '';

            }
                        
            switch($source) {

                    case 'add_stock';
                    include "includes/add_stock.php";
                    break;

                    case 'edit_stock';
                    include "includes/edit_stock.php";
                    break;

                    case '200';
                    echo "NICE 200";
                    break;

                    default:
                        include "includes/stock_list.php";
                        break;

                    }

        ?>

                    </div>
                </div>
    </div>
</div>

    <?php include "includes/admin_footer.php"; ?>