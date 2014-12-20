<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>Maps</li>
                <li class="active">Vector Maps</li>
            </ol>

            <h1>Vector Maps</h1>
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
            <div class="alert alert-info">
                <i class="fa fa-map-marker"></i> Download vector maps available for free <a href="http://jvectormap.com/maps/world/europe/">here</a>
            </div>
            <div class = "panel panel-primary">
                <div class="panel-heading">
                    <h4>World Map</h4>
                </div>
                <div class="panel-body">
                    <div id="worldmap" style="height: 350px;"></div>
                </div>
            </div>
        </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4>USA</h4>

                </div>
                <div class="panel-body">
                    <div id="usamap" style="height: 350px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4>Europe</h4>

                </div>
                <div class="panel-body">
                    <div id="euromap" style="height: 350px;"></div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
</div> <!-- container -->

    </div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>
