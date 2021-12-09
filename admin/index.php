<?php include './header.inc.php';?>
<body>
    
    <div class="wrapper">
        <div class="body-overlay">

            <?php
                include "sidebar.php";
            ?>

<div id="content">

            <?php
                include "header.php";
            ?>

             <!-- main content -->
             <div class="main-content">
                    <div class="row">

 

                        <!-- card 1 -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                        <span class="material-icons">people</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Students</strong></p>
                                    <h3 class="card-title">3,000</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info" >info</i>
                                        <a href="#">See Detailed Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card-2 -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                        <span class="material-icons">supervisor_account</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Faculties</strong></p>
                                    <h3 class="card-title">3,000</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info" >info</i>
                                        <a href="#">See Detailed Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card-2 -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                        <span class="material-icons">card_membership</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Courses</strong></p>
                                    <h3 class="card-title">3,000</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info" >info</i>
                                        <a href="#">See Detailed Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card-2 -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                        <span class="material-icons">assignment_turned_in</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Exams</strong></p>
                                    <h3 class="card-title">3,000</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info" >info</i>
                                        <a href="#">See Detailed Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- charts -->
                   


  
   
<?php include './footer.php'; ?>
        <!-- charts js -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Users', 'Hours per Day'],
          ['Students',     300],
          ['Faculty',      8],
          ['Courses', 3],
          ['Exams', 10],

     
        ]);

        var options = {
          title: 'Total Users',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
</body>
</html>