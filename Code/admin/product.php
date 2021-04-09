<?php include "includes/admin_header.php"; ?>

 <div class="main-panel">
        <br>
           <h3 class="page-header">
               Categories
            </h3>

        <div class = "col-md-4 grid-margin stretch-card">
        <div class="card">  
               
                      <div class="card">

                      <table class="table table-bordered table-hover">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Product</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                          </thead>
                          <tbody>

                        <?php stock(); ?>
                        
                      </tbody>
                      </table>
                        </div>
                        
                    </div>
                </div>
    </div>

 <?php include "includes/admin_footer.php"; ?>