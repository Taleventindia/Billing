<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Talevent tech</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
        
               <li><a href="../index.php">HOME SITE</a></li>
             
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
                    <?php 
                        
                        if(isset($_GET['user_firstname'])){
                            
                           echo $_GET['user_firstname'];
                           
                        }
                       
                    ?>
                   
                               
                           <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../admin/profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
<!--
                   <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#post_dropdown"><i class="fa fa-fw fa-arrows-v"></i> posts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="post_dropdown" class="collapse">
                            <li>
                                <a href="./posts.php">View All posts</a>
                            </li>
                            <li>
                                <a href="posts.php?source=add_post">Add posts</a>
                            </li>
                        </ul>
                    </li>
-->
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-wrench"></i>Inventory<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="./categories.php"><i class="fa fa-fw fa-wrench"></i> categories</a>
                            </li>
                            <li>
                                <a href="inventory.php">Stock List</a>
                            </li>
                            <li>
                                <a href="inventory.php?source=add_stock">Add Stock</a>
                            </li>
                          </ul>
                    </li>                   

                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-wrench"></i>Invoice<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
<!--<<<<<<< HEAD-->
                                <a href="invoice.php">View All Invoices</a>
<!--=======-->
                                <a href="../../../../billing/Code/reports.php">View All Invoices</a>
<!-->>>>>>> 4ed43e127381e7bf1fafd85852973810bdf04e9e-->
                            </li>
                            <li>
                                <a href="../../../../billing/Code/invoice.php">Create Invoice</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="customers.php"><i class="fa fa-fw fa-dashboard"></i>Customers</a>
<!--                        <a href="customers.php?source=add_customer">Add Customer</a>-->
                        
                    </li>
                    
                    
                   
                    <li>
                        <a href="suppliers.php"><i class="fa fa-fw fa-dashboard"></i>Supplier</a>
                    </li>                       
                    
<!--
                    <li class="">
                        <a href="./comments.php"><i class="fa fa-fw fa-file"></i> Comments</a>
                    </li>
-->
                    
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-dashboard"></i>Users<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="users.php">View All Users</a>
                            </li>
                            <li>
                                <a href="../registration.php">Add User</a>
<!--                                 <a href="users.php?source=add_user">Add User</a>-->
                            </li>
                            <li>
                                 <a href="customers.php?source=add_customer">Add Customer</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i> Report</a>
                    </li>
                    
                    <li>
                        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i> profile</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>