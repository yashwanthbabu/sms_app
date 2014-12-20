<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>Maps</li>
                <li class="active">Google Maps</li>
            </ol>

            <h1>Google Maps</h1>
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
        <div class="col-xs-12">
            <div class="panel">
                <div class="panel-heading">
                    <h4>Geolocation</h4>
                </div>
                <div class="panel-body">
                    <div id="basic-map" style="height: 300px"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4>Routes</h4>
                </div>
                <div class="panel-body">
                    <div id="advance-route" style="height: 300px">

                    </div>
                    <a href="#" id="start_travel" class="btn btn-primary" style="margin: 15px 0">Start</a>
                    <ul id="instructions">
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Street View Panoramas</h4>
                </div>
                <div class="panel-body">
                    <div id="panorama" style="height: 300px"></div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4>Fusion Tables layers</h4>
                </div>
                <div class="panel-body">
                    <div id="fusion" style="height: 250px"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4>Geocoding</h4>

                </div>
                <div class="panel-body">
                    <div id="geocoding" style="height: 204px;"></div>
                    <form method="post" id="geocoding_form" class="form-inline" style="margin-top:10px">
                        <div class="form-group">
                            <label for="address" class="sr-only control-label">Address:</label>
                            <div class="input-group">
                                <input type="text" id="address" name="address" class="form-control" placeholder="Address..." />
                                <span class="input-group-btn">
                                    <input type="submit" class="btn btn-primary" value="Search" />
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4>Poly Lines</h4>

                </div>
                <div class="panel-body">
                    <div id="polylines" style="height: 250px"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4>Polygons</h4>

                </div>
                <div class="panel-body">
                    <div id="polygons" style="height: 250px;"></div>
                </div>
            </div>
        </div>
    </div>

</div><!-- container -->

    </div>
    <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>