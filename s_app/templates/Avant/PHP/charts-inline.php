<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>Charts</li>
                <li class="active">Inline</li>
            </ol>

            <h1>Sparklines</h1>
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
                <h4>Sparkline Variations</h4>
            </div>
            <div class="panel-body">
                <p>Sparklines are very small, inline charts that can be drawn using data supplied either inline in the HTML, or via javascript. They can, however, be customized to fit even bigger divs.</p>
                <div class="row">
                    <div class="col-md-6">
                        <p>Inline line charts <span class="linecharts" values="5,4,7,6,9,5,8,2,6,4,6,7"></span> can be placed anywhere <span class="linecharts" values="6,3,8,1,3,2,4,5,6,3,2"></span></p>
                    </div>
                    <div class="col-md-6">
                        <p>Bar charts <span class="barcharts" values="5,6,3,9,2,7,5"></span> with negetives <span class="barcharts" values="5,6,-3,9,-2,7,-5"></span> and stacked <span class="barcharts" values="1:3, 5:3, 2:7,9:1,5:6"></span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Composite inline <span id="compositeline" values="5,4,7,6,9,5,8,2,6,4,6,7"></span></p>
                    </div>
                    <div class="col-md-6"><p>Composite bar <span id="compositebar" values="5,4,7,6,9,5,8,2,6,4,6,7"></span></p></div>
                </div>
                <div class="row">
                    <div class="col-md-6"><p>Discrete <span id="discrete1" values="4,6,7,7,4,3,2,1,4,4 "></span> and with threshhold <span id="discrete2" values="4,6,7,7,4,3,2,1,4,4"></span></p></div>
                    <div class="col-md-6"><p>Pie charts <span id="pie"></span></p></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-6">
        <div class="panel panel-success">
          <div class="panel-heading"><h4>Stacked</h4></div>
          <div class="panel-body"><div id="bigstacked" style="margin:0 auto; width: 400px"></div></div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="panel panel-warning">
          <div class="panel-heading"><h4>Pie Chart</h4></div>
          <div class="panel-body"><div id="bigpie" style="margin:0 auto; width: 200px"></div></div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading"><h4>Line Charts</h4></div>
            <div class="panel-body"><div id="bigline"></div></div>
        </div>
    </div>
</div>


</div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>