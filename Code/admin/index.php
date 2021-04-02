<?php include "includes/admin_header.php"; ?>
  
    <div id="wrapper">
    
        <!-- Navigation -->
      <?php include "includes/admin_navigation.php"; ?>
       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           
                            Dashboard
                            <small> <?php  echo $_SESSION['firstname'] ?></small>
                           
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
            
                       
                <!-- /.row -->
<!--
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    
             <?php
                       
                   $query = "SELECT * FROM posts ";
                   $select_all_post = mysqli_query($connection,$query);           
                   $post_count = mysqli_num_rows($select_all_post);  

                   echo "<div class='huge'>{$post_count}</div>" ;          

                        
                ?>
                  
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    
             <?php
                       
                   $query = "SELECT * FROM comments ";
                   $select_all_comments = mysqli_query($connection,$query);           
                   $comment_count = mysqli_num_rows($select_all_comments);  

                   echo "<div class='huge'>{$comment_count}</div>" ;          

                        
                ?>
                  
                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    
             <?php
                       
                   $query = "SELECT * FROM users ";
                   $select_all_users = mysqli_query($connection,$query);           
                   $user_count = mysqli_num_rows($select_all_users);  

                   echo "<div class='huge'>{$user_count}</div>" ;          

                        
                ?>
                       
                       
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                       
             <?php
                       
                   $query = "SELECT * FROM categories ";
                   $select_all_categories = mysqli_query($connection,$query);           
                   $category_count = mysqli_num_rows($select_all_categories);  

                   echo "<div class='huge'>{$category_count}</div>" ;          

                        
                ?>
                     
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
                 /.row 
                
          <?php 
            
            $query = "SELECT * FROM posts WHERE post_status = 'published' ";
            $select_all_published_post = mysqli_query($connection,$query);           
            $post_published_count = mysqli_num_rows($select_all_published_post); 
                
                
            $query = "SELECT * FROM posts WHERE post_status = 'draft' ";
            $select_all_draft_post = mysqli_query($connection,$query);           
            $post_draft_count = mysqli_num_rows($select_all_draft_post); 
                
                
            $query = "SELECT * FROM comments WHERE comment_status = 'unapproved' ";
            $unapproved_comment_query = mysqli_query($connection,$query);           
            $unapproved_comment_count = mysqli_num_rows($unapproved_comment_query);  
                
                   
            $query = "SELECT * FROM users WHERE user_role = 'subscriber' ";
            $select_all_subscribers = mysqli_query($connection,$query);           
            $subscriber_count = mysqli_num_rows($select_all_subscribers);   
                
                
        ?>
                
                
        <div class="row">
            
            <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
  
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],

            
            <?php 
            
              $element_text = ['All Posts', 'Active Posts','Draft Posts','Comments','Pending Comments','Users','Subscribers', 'Categories'];
              $element_count = [$post_count, $post_published_count, $post_draft_count, $comment_count, $unapproved_comment_count, $user_count,$subscriber_count, $category_count];

            
             for($i =0; $i < 8; $i++){
                 
                 echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
                 
             }
              
            
            ?>
         
         ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      
      }
                
    </script>
 
    <div id="columnchart_material" style="width: 'auto'; height: 0px;"></div>  
    </div> 
-->
    <div class="container" style="width:2000px; height:2000px">            
    <script type="text/javascript" src="js/loader.js"></script>
    <script>
      google.charts.load('49', {'packages': ['vegachart']}).then(drawChart);

      function drawChart() {
        const dataTable = new google.visualization.DataTable();
        dataTable.addColumn({type: 'string', 'id': 'category'});
        dataTable.addColumn({type: 'number', 'id': 'amount'});
        dataTable.addRows([
          ['A', 28],
          ['B', 55],
          ['C', 43],
          ['D', 91],
          ['E', 81],
          ['F', 53],
          ['G', 19],
          ['H', 87],
        ]);

        const options = {
          "vega": {
            "$schema": "https://vega.github.io/schema/vega/v4.json",
            "width": 500,
            "height": 200,
            "padding": 5,

            'data': [{'name': 'table', 'source': 'datatable'}],

            "signals": [
              {
                "name": "tooltip",
                "value": {},
                "on": [
                  {"events": "rect:mouseover", "update": "datum"},
                  {"events": "rect:mouseout",  "update": "{}"}
                ]
              }
            ],

            "scales": [
              {
                "name": "xscale",
                "type": "band",
                "domain": {"data": "table", "field": "category"},
                "range": "width",
                "padding": 0.05,
                "round": true
              },
              {
                "name": "yscale",
                "domain": {"data": "table", "field": "amount"},
                "nice": true,
                "range": "height"
              }
            ],

            "axes": [
              { "orient": "bottom", "scale": "xscale" },
              { "orient": "left", "scale": "yscale" }
            ],

            "marks": [
              {
                "type": "rect",
                "from": {"data":"table"},
                "encode": {
                  "enter": {
                    "x": {"scale": "xscale", "field": "category"},
                    "width": {"scale": "xscale", "band": 1},
                    "y": {"scale": "yscale", "field": "amount"},
                    "y2": {"scale": "yscale", "value": 0}
                  },
                  "update": {
                    "fill": {"value": "steelblue"}
                  },
                  "hover": {
                    "fill": {"value": "red"}
                  }
                }
              },
              {
                "type": "text",
                "encode": {
                  "enter": {
                    "align": {"value": "center"},
                    "baseline": {"value": "bottom"},
                    "fill": {"value": "#333"}
                  },
                  "update": {
                    "x": {"scale": "xscale", "signal": "tooltip.category", "band": 0.5},
                    "y": {"scale": "yscale", "signal": "tooltip.amount", "offset": -2},
                    "text": {"signal": "tooltip.amount"},
                    "fillOpacity": [
                      {"test": "datum === tooltip", "value": 0},
                      {"value": 1}
                    ]
                  }
                }
              }
            ]
          }
        };

        const chart = new google.visualization.VegaChart(document.getElementById('chart-div'));
        chart.draw(dataTable, options);
      }
    </script>
        <div id="chart-div" style="width: 700px; height: 250px; position: absolute;  top: 250px;
  left: 300px;"></div>
                
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Category', 'sales percentage'],
          ['Categroy1',     11],
          ['Categroy2',      2],
          ['Categroy3',  2],
          ['Categroy4', 2],
          ['Categroy5',    7]
        ]);

        var options = {
          title: 'Sales Report',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
        <div id="piechart_3d" style="width: 800px; height: 500px;  position: absolute;
  top: 150px;
  left: 1000px;"></div>
        

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
           <div id="curve_chart" style="width: 900px; height: 500px; position: absolute;  top: 650px;
  left: 225px;"></div>
        
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <div id="barchart_material" style="width: 1000px; height: 450px; position: absolute;  top: 1200px;
  left: 400px;"></div> 
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include "includes/admin_footer.php"; ?>