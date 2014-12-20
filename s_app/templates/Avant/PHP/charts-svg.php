<?php include "header.php" ?>

    <div id="page-content">
        <div id='wrap'>
            <div id="page-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Dashboard</a></li>
                    <li>Charts</li>
                    <li class="active">SVG Charts</li>
                </ol>

                <h1>SVG Charts</h1>
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
            <div class="container">


                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Bar Graph</h4>
                                <div class="options">
                                </div>
                            </div>
                            <div class="panel-body">
                              <div id="bar-example"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Line Graph</h4>
                                <div class="options">
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="line-example"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Donut Graph</h4>
                                <div class="options">
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="donut-example"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Area Graph</h4>
                                <div class="options">
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="area-example"></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div> <!-- container -->
        </div> <!--wrap -->
    </div> <!-- page-content -->

<?php include "footer.php" ?>