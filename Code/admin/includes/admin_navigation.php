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
                    
                     <li>
                     <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-wrench"></i> Inventory<i class="fa fa-fw fa-caret-down"></i></a>
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
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-wrench"></i> Invoice<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>

                                <a href="invoice_new.php">View All Invoices</a>

                                <a href="reports.php">View All Invoices</a>

                            </li>
                            <li>
                                <a href="invoice.php">Create Invoice</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-user"></i> Customers<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a href="customers.php">View All Customers</a>

                                <a href="customers.php?source=add_customer">Create New Cusotmer</a>
                            </li>
                      </ul>
                    </li>                    
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo4"><i class="fa fa-fw fa-user"></i> Suppliers<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo4" class="collapse">
                            <li>
                                <a href="suppliers.php">View All Suppliers</a>

                                <a href="suppliers.php?source=add_supplier">Create New Supplier</a>
                            </li>
                      </ul>
                    </li>      

                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-dashboard"></i> Users<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="users.php">View All Users</a>
                            </li>
                            <li>
                                <a href="../registration.php">Add User</a>
                                 
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