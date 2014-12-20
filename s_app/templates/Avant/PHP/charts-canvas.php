<?php include "header.php" ?>

    <div id="page-content">
        <div id='wrap'>
            <div id="page-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Dashboard</a></li>
                    <li>Charts</li>
                    <li class="active">Canvas Charts</li>
                </ol>

                <h1>Canvas Charts</h1>
                <div class="options">
                    <div class="btn-toolbar">
                        <div class="btn-group hidden-xs">
                            <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Text File (*.txt)</a></li>
                                <li><a href="#">Excel File (*.xlsx)</a></li>
                                <li><a href="#">PDF File (*.pdf)</a></li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                </div>
               
            </div>
            <style>
                canvas {display: block;margin: 0 auto;}
            </style>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h4>Line Chart</h4>
                            </div>
                            <div class="panel-body">
                                <canvas id="line-chart" height="300" width="600"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h4>Bar Chart</h4>
                            </div>
                            <div class="panel-body">
                                <canvas id="bar-chart" height="300"  width="600"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h4>Radar Chart</h4>
                            </div>
                            <div class="panel-body">
                                <canvas id="radar-chart" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h4>Polar Area Chart</h4>
                            </div>
                            <div class="panel-body">
                                <canvas id="pie-chart" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h4>Pie Chart</h4>
                            </div>
                            <div class="panel-body">
                                <canvas id="donut-chart" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h4>Polar Area Chart</h4>
                            </div>
                            <div class="panel-body">
                                <canvas id="polar-area-chart" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- container -->
        </div> <!--wrap -->
    </div> <!-- page-content -->

<?php include "footer.php" ?>