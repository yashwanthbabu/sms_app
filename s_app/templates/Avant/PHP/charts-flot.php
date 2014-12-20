<?php include "header.php" ?>

    <div id="page-content">
        <div id='wrap'>
            <div id="page-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Dashboard</a></li>
                    <li>Charts</li>
                    <li class="active">Flot</li>
                </ol>

                <h1>Flot</h1>
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
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Interacting with data point</h4>
                            </div>
                            <div class="panel-body">
                                <div id="sincos" style="height: 300px"></div>
                                <p id="hoverdata" class="text-center">Mouse hovers at (<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Multiple Graph Types In One</h4>
                            </div>
                            <div class="panel-body">
                                <div id="multiple" style="height: 300px" class="centered"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Live Dynamic</h4>
                            </div>
                            <div class="panel-body">
                                <div id="realtime-updates" style="height: 300px" class="centered"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Stacking</h4>
                            </div>
                            <div class="panel-body">
                                <div id="stacking" style="height: 300px" class="centered"></div>

                                <p class="stackControls">
                                    <button class="btn btn-primary">With stacking</button>
                                    <button class="btn btn-primary">Without stacking</button>
                                </p>
                                
                                <p class="graphControls">
                                    <button class="btn btn-info">Bars</button>
                                    <button class="btn btn-info">Lines</button>
                                    <button class="btn btn-info">Lines with steps</button>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                                <h4>Pie Chart</h4>
                          </div>
                          <div class="panel-body">
                                <div id="graph0" style="width:100%; height: 300px" class="centered"></div>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                                <h4>Donut</h4>
                          </div>
                          <div class="panel-body">
                                <div id="donut" style="width:100%; height: 300px" class="centered"></div>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                                <h4>Interactive</h4>
                          </div>
                          <div class="panel-body">
                                <div id="interactive" style="width:100%; height: 300px" class="centered"></div>
                          </div>
                        </div>
                    </div>

                </div>

            </div> <!-- container -->
        </div> <!--wrap -->
    </div> <!-- page-content -->

<?php include "footer.php" ?>