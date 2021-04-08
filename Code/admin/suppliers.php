<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">

        <div id="page-wrapper">

            <div class="container-fluid">                    
            
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <br>
                        <h3 class="page-header">
                            Suppliers
                        </h3>

        <?php 

            if(isset($_GET['source'])){

            $source=$_GET['source'];

            } else {

            $source= '';

            }
                        
            switch($source) {

                    case 'add_supplier';
                    include "includes/add_supplier.php";
                    break;

                    case 'edit_supplier';
                    include "includes/edit_supplier.php";
                    break;

                    case '200';
                    echo "NICE 200";
                    break;

                    default:
                        include "includes/view_all_suppliers.php";
                        break;

                    }

        ?>

                    </div>
                </div>
                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include "includes/admin_footer.php"; ?>