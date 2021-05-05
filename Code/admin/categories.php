<?php include "includes/admin_header.php"; ?>

 <div class="main-panel">
        <br>
           <h3 class="page-header">
               Categories
            </h3>

        <div class = "col-md-4 grid-margin stretch-card">
        <div class="card">  
          <div class="content-wrapper">
            <!-- Page Heading -->

                  <?php insert_categories(); ?>

                        <form action=""method="post" autocomplete="off">
                           
                            <div class="form-group">
                               <label for="cat_title">Add Category</label>
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                            
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                              </div>
                              
                        </form>
                        
                        <?php 
                            //UPDATE AND INCLUDE QUERY
                            
                            if(isset($_GET['edit'])){
                                $cat_id=$_GET['edit'];
                                include "includes/update_categories.php"; 
                            }
                            
                           ?>
                    
                      </div> <!-- Add Category -->
                      
                      
                      <div class="card">

                      <table class="table table-bordered table-hover">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Category Name</th>
                                  <th>Action</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>

                        <?php findAllCategories(); ?>
                        <?php deleteCategories(); ?>

                      </tbody>
                      </table>
                        </div>
                        
                    </div>
                </div>
    </div>

 <?php include "includes/admin_footer.php"; ?>