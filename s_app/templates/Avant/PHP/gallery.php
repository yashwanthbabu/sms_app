<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li class="active">Gallery</li>
            </ol>

            <h1>Simple Gallery</h1>
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
              <div class="col-lg-12">

                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4>Gallery</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Avant comes bundled with easy to use, light weight, CSS3 fliter and sort plugin. It provides beautiful animated filtering and sorting of categorized and ordered content. It plays nice with your existing HTML and CSS, making it a great choice for fluid, responsive layouts. </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group clearfix">
                                    <select id="galleryfilter" class="form-control pull-left">
                                        <option data-filter="all">Show All</option>
                                        <option data-filter="industrial">Industrial</option>
                                        <option data-filter="architecture">Architecture</option>
                                        <option data-filter="nature">Nature</option>
                                        <option data-filter="architecture industrial">Architecture &amp; Industrial</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="pull-right">
                                    <div class="btn-toolbar form-group clearfix">
                                        <button class="btn btn-default sort" data-sort="random"><i class="fa fa-random"></i><span class="hidden-xs"> Randomize</span></button>
                                            <div class="btn-group">
                                                <button class="btn btn-default sort active" data-sort="default" data-order="desc">Default</button>
                                                <button class="btn btn-default sort" data-sort="data-name" data-order="desc"><i class="fa fa-sort-alpha-asc"></i><span class="hidden-xs"> Name</span></button>
                                                <button class="btn btn-default sort" data-sort="data-name" data-order="asc"><i class="fa fa-sort-alpha-desc"></i><span class="hidden-xs"> Name</span></button>
                                            </div>
    
                                        <div class="btn-group">
                                            <button class="btn btn-default active" id="GoGrid"><i class="fa fa-th"></i></button>
                                            <button class="btn btn-default" id="GoList"><i class="fa fa-th-list"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr style="margin-top:0; margin-bottom:10px;">

                        <div class="row">
                            <div class="col-md-12">

                                <ul class="gallery list-unstyled">

                                    <li class="mix industrial" data-name="Rusty"><a href="assets/demo/images/ind_rusty.jpg">
                                        <img src="assets/demo/images/thmb_ind_rusty.jpg"></a>
                                        <h4>Rusty</h4>
                                    </li>

                                    <li class="mix nature" data-name="Enchanted Creek"><a href="assets/demo/images/nature_enchantedcreek.jpg">
                                        <img src="assets/demo/images/thmb_nature_enchantedcreek.jpg"></a>
                                        <h4>Enchanted Creek</h4>
                                    </li>

                                    <li class="mix architecture" data-name="Building"><a href="assets/demo/images/arch_building.jpg">
                                        <img src="assets/demo/images/thmb_arch_building.jpg"></a>
                                        <h4>Building</h4>
                                    </li>

                                    <li class="mix nature" data-name="Mill"><a href="assets/demo/images/nature_mill.jpg">
                                        <img src="assets/demo/images/thmb_nature_mill.jpg"></a>
                                        <h4>Mill</h4>
                                    </li>

                                    <li class="mix industrial" data-name="Machiery"><a href="assets/demo/images/ind_machinery.jpg">
                                        <img src="assets/demo/images/thmb_ind_machinery.jpg"></a>
                                        <h4>Machiery</h4>
                                    </li>

                                    <li class="mix architecture" data-name="Fire Escape"><a href="assets/demo/images/arch_fireescape.jpg">
                                        <img src="assets/demo/images/thmb_arch_fireescape.jpg"></a>
                                        <h4>Fire Escape</h4>
                                    </li>

                                    <li class="mix nature" data-name="Mossy Tree"><a href="assets/demo/images/nature_mossytree.jpg">
                                        <img src="assets/demo/images/thmb_nature_mossytree.jpg"></a>
                                        <h4>Mossy Tree</h4>
                                    </li>

                                    <li class="mix industrial" data-name="Demolition"><a href="assets/demo/images/ind_demolition.jpg">
                                        <img src="assets/demo/images/thmb_ind_demolition.jpg"></a>
                                        <h4>Demolition</h4>
                                    </li>

                                    <li class="mix architecture" data-name="Fountain"><a href="assets/demo/images/arch_fountain.jpg">
                                        <img src="assets/demo/images/thmb_arch_fountain.jpg"></a>
                                        <h4>Fountain</h4>
                                    </li>

                                    <li class="mix nature" data-name="Rider"><a href="assets/demo/images/nature_rider.jpg">
                                        <img src="assets/demo/images/thmb_nature_rider.jpg" alt=""></a>
                                        <h4>Rider</h4>
                                    </li>

                                    <li class="mix nature" data-name="River"><a href="assets/demo/images/nature_river.jpg">
                                        <img src="assets/demo/images/thmb_nature_river.jpg"></a>
                                        <h4>River</h4>
                                    </li>

                                    <li class="mix industrial" data-name="Corrosion Hazard"><a href="assets/demo/images/ind_corrosion_hazard.jpg">
                                        <img src="assets/demo/images/thmb_ind_corrosion_hazard.jpg"></a>
                                        <h4>Corrosion Hazard</h4>
                                    </li>

                                    <li class="mix nature" data-name="Gardens"><a href="assets/demo/images/nature_gardens.jpg">
                                        <img src="assets/demo/images/thmb_nature_gardens.jpg"></a>
                                        <h4>Gardens</h4>
                                    </li>

                                    <li class="mix industrial" data-name="Code"><a href="assets/demo/images/ind_code.jpg">
                                        <img src="assets/demo/images/thmb_ind_code.jpg"></a>
                                        <h4>Code</h4>
                                    </li>

                                    <li class="mix nature" data-name="Trees"><a href="assets/demo/images/nature_trees.jpg">
                                        <img src="assets/demo/images/thmb_nature_trees.jpg"></a>
                                        <h4>Trees</h4>
                                    </li>

                                    <li class="mix nature" data-name="Woodstump"><a href="assets/demo/images/nature_woodstump.jpg">
                                        <img src="assets/demo/images/thmb_nature_woodstump.jpg" alt=""></a>
                                        <h4>Woodstump</h4>
                                    </li>

                                    <li class="gap"></li> <!-- "gap" elements fill in the gaps in justified grid -->
                                </ul>

                            </div>

                        </div>

                    </div>
                </div>


            </div> <!--col-lg-12-->
        </div> <!--row -->

        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->


<div id="gallarymodal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3 class="modal-title">Heading</h3>
    </div>
    <div class="modal-body">
        
    </div>
    <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </div>
  </div>
</div>

<?php include "footer.php" ?>