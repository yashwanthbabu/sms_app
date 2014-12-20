<?php include "header.php" ?>

    <div id="page-content">
        <div id='wrap'>
            <div id="page-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Dashboard</a></li>
                    <li>Advanced Forms</li>
                    <li>Dropzone</li>
                </ol>

                <h1>Dropzone File Upload</h1>
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
                        <div class="panel">
                            <div class="panel-heading">
                                <h4>File Upload</h4>
                                <div class="options">

                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="alert alert-info">
                                    <i class="fa fa-info-sign"></i> This is a demo, and as such, no files are actually uploaded.
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                </div>
    
                                <form action="upload.php" class="dropzone"></form>
                            </div>
                        </div>
                    </div>
                </div>


            </div> <!-- container -->
        </div> <!--wrap -->
    </div> <!-- page-content -->

<?php include "footer.php" ?>