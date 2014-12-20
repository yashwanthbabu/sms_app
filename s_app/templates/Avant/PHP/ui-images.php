<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>UI Elements</li>
                <li class="active">Images</li>
            </ol>

            <h1>Images</h1>
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
                <h4>Images</h4>
                <div class="options">

                </div>
            </div>
            <div class="panel-body">
                <p>Add classes to an <code>img</code> element to easily style images in any project.</p>
                <img src="assets/demo/images/thmb_arch_building.jpg" class="img-rounded" alt="Olivia Wilde" style="margin: 5px 5px 10px;">
                <img src="assets/demo/images/thmb_ind_code.jpg" class="img-circle" alt="Scarlett Johannson" style="margin: 5px 5px 10px;">
                <img src="assets/demo/images/thmb_nature_mossytree.jpg" class="img-thumbnail" alt="Emma Watson" style="margin: 5px 5px 10px;">

                <p><code>&lt;img src="..." alt="..." class="img-rounded"&gt;</code></p>
                <p><code>&lt;img src="..." alt="..." class="img-circle"&gt;</code></p>
                <p><code>&lt;img src="..." alt="..." class="img-thumbnail"&gt;</code></p>

                <p>Images in Avant, thanks to Bootstrap 3, can be made responsive-friendly via the addition of the <code>.img-responsive</code> class. This ensures that even large images scale down to the parent</p>
                <img src="assets/demo/images/arch_fountain.jpg" alt="Fountain" class="img-responsive img-thumbnail">
            </div>
        </div>
    </div>
</div>


</div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>