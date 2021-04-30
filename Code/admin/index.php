<?php include "includes/admin_header.php"; ?>
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Dashboard</h4>
                </div>
              </div>
              <div class="col-md-12">
                <div class="page-header-toolbar">
                  <div class="filter-wrapper">
                    <div class="dropdown toolbar-item">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                        <a class="dropdown-item" href="#">Last Day</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Last Year</a>
                      </div>
                    </div>
                  </div>
                    <div class="dropdown ml-lg-auto ml-3 toolbar-item">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownexport">
                        <a class="dropdown-item" href="#">Export as PDF</a>
                        <a class="dropdown-item" href="#">Export as DOCX</a>
                        <a class="dropdown-item" href="#">Export as CDR</a>
                    </div>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-0">Sales Statistics Overview</h4>
                    <div class="d-flex flex-column flex-lg-row">
                      <ul class="nav nav-tabs sales-mini-tabs ml-lg-auto mb-4 mb-md-0" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="sales-statistics_switch_1" data-toggle="tab" role="tab" aria-selected="true">1D</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_2" data-toggle="tab" role="tab" aria-selected="false">5D</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_3" data-toggle="tab" role="tab" aria-selected="false">1M</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_4" data-toggle="tab" role="tab" aria-selected="false">1Y</a>
                        </li>
                      </ul>
                    </div>
                    <div class="d-flex flex-column flex-lg-row">
                      <div class="data-wrapper d-flex mt-2 mt-lg-0">
                        <div class="wrapper pr-5">
                          <h5 class="mb-0">Total Cost</h5>
                          <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold mb-0">15,263</h4>
                            <small class="ml-2 text-gray d-none d-lg-block"><b>89.5%</b> of 20,000 Total</small>
                          </div>
                        </div>
                        <div class="wrapper">
                          <h5 class="mb-0">Total Revenue</h5>
                          <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold mb-0">Rs.753,098</h4>
                            <small class="ml-2 text-gray d-none d-lg-block"><b>10.5%</b> of 20,000 Total</small>
                          </div>
                        </div>
                      </div>
                      <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>

                      <?php

                        $query = sprintf("SELECT invnum, rbdf FROM register ORDER BY invnum");
                        $result = mysqli_query($connection,$query);
                      
                        $data = array();
                        foreach ($result as $row) {
                            $invnum[]=$row['invnum'];
                            $rbdf[]=$row['rbdf'];
                            $data[] = $row;
                           
                        }
//                        echo json_encode($rbdf);

                        ?>
                      
                    <canvas class="mt-5" height="120" name="rbdf" id="sales-statistics-overview"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body d-flex flex-column">
                    <div class="wrapper">
                      <h4 class="card-title mb-0">Net Profit Margin</h4>

                      <div class="mb-4" id="net-profit-legend"></div>
                    </div>
                    <canvas class="my-auto mx-auto" height="250" id="net-profit"></canvas>
                  </div>
                </div>
              </div>
            </div>
                    <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Invoice</h4>
                          <a href="reports.php"><small>Show All</small></a>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>Invoice ID</th>
                                <th>Customer</th>
                                <th>Status</th>
                                <th>Due Date</th>
                                <th>Amount</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>INV-87239</td>
                                <td>Viola Ford</td>
                                <td>Paid</td>
                                <td>20 Jan 2019</td>
                                <td>Rs.755</td>
                              </tr>
                              <tr>
                                <td>INV-87239</td>
                                <td>Dylan Waters</td>
                                <td>Unpaid</td>
                                <td>23 Feb 2019</td>
                                <td>Rs.800</td>
                              </tr>
                              <tr>
                                <td>INV-87239</td>
                                <td>Louis Poole</td>
                                <td>Unpaid</td>
                                <td>25 Mar 2019</td>
                                <td>R.463</td>
                              </tr>
                              <tr>
                                <td>INV-87239</td>
                                <td>Vera Howell</td>
                                <td>Paid</td>
                                <td>27 Mar 2019</td>
                                <td>Rs.235</td>
                              </tr>
                              <tr>
                                <td>INV-87239</td>
                                <td>Allie Goodman</td>
                                <td>Unpaid</td>
                                <td>1 Apr 2019</td>
                                <td>Rs.657</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body pb-0">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Total Revenue</h4>
                          <p class="font-weight-semibold mb-0">+1.37%</p>
                        </div>
                        <h3 class="font-weight-medium mb-4">184.42K</h3>
                      </div>
                      <canvas class="mt-n4" height="90" id="total-revenue"></canvas>
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body pb-0">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Transaction</h4>
                          <p class="font-weight-semibold mb-0">-2.87%</p>
                        </div>
                        <h3 class="font-weight-medium">147.7K</h3>
                      </div>
                      <canvas class="mt-n3" height="90" id="total-transaction"></canvas>
                    </div>
                  </div>
            <!-- /.container-fluid -->
              </div>
            </div>

                      <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © TaleventTech.in 2021</span>
              <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">All Rights Reserved <a href="#" >| Privacy Policy</a> </span>
            </div>
          </footer>
</div>
<?php include "includes/admin_footer.php"; ?>
