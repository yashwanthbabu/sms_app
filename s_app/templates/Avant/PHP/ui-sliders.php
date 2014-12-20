<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>UI Components</li>
                <li class="active">Sliders and Ranges</li>
            </ol>

            <h1>Sliders and Ranges</h1>
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
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>jQuery Knob</h4>
                        </div>
                        <div class="panel-body">
                            <style>
                            .centeredcontainer {width:180px; margin:0 auto 25px}
                            </style>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>jQuery Knob is a downward compatible, canvas based and touch friendly jQuery dial</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="centeredcontainer">
                                        <p class="text-center">Display input disabled</p>
                                        <input type="text" class="dial" value="25" data-width="180" data-displayInput="false" data-thickness=".15">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="centeredcontainer">
                                        <p class="text-center">Rounded Linecap</p>
                                        <input type="text" class="dial" data-linecap="round" value="63" data-width="180" data-fgColor="#07d14f" data-thickness=".15">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="centeredcontainer">
                                        <p class="text-center">Cursor Mode</p>
                                        <input type="text" class="dial" data-cursor=true value="12" data-width="180" data-fgColor="#ffa200" data-thickness=".15">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="centeredcontainer">
                                        <p class="text-center">Angle offset and arc</p>
                                        <input type="text" class="dial" value="42" data-angleOffset="-125" data-angleArc="250" data-width="180" data-fgColor="#e74949" data-thickness=".15">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="centeredcontainer">
                                        <p class="text-center">Display previous values</p>
                                        <input type="text" class="dial" value="23" data-width="180" data-fgColor="#dc51f5" data-displayPrevious="true" data-thickness=".15">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="centeredcontainer">
                                        <p class="text-center">Five digit values with 1,000 steps</p>
                                        <input type="text" class="dial" value="2000" data-width="180" data-fgColor="#a4ed16" data-step="1000" data-min="-15000" data-max="15000" data-thickness=".15">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                              <h4>Easy Pie Chart</h4>
                              <div class="options">
                                  <a href="javascript:;" id="updatePieCharts"><i class="fa fa-refresh"></i></a>
                              </div>
                        </div>
                        <div class="panel-body">
                            <p>Easy Pie Chart is a liteweight plugin to draw simple, animated pie charts for single values.</p>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="easypiechart" id="newvisits" data-percent="65">
                                        <span class="percent"></span>
                                    </div>
                                    <label for="newvisits">New Visits</label>
                                    <hr class="visible-sm visible-xs">
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <span class="easypiechart" id="bouncerate" data-percent="81">
                                        <span class="percent"></span>
                                    </span>
                                    <label for="bouncerate">Bounce Rate</label>
                                    <hr class="visible-sm visible-xs">
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <span class="easypiechart" id="clickrate" data-percent="42">
                                        <span class="percent"></span>
                                    </span>
                                    <label for="clickrate">Click Rate</label>
                                    <hr class="visible-sm visible-xs">
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <span class="easypiechart" id="covertionrate" data-percent="23">
                                        <span class="percent"></span>
                                    </span>
                                    <label for="covertionrate">Convertion</label>
                                    <hr class="visible-sm visible-xs">
                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>jQuery UI Sliders</h4>
                        </div>
                        <div class="panel-body">
                            <style>
                                .slider-value {margin-top: 10px}
                                .slider-vertical-value {margin-bottom: 10px}
                            </style>
                            <form action="" class="form-horizontal row-border">
                                <div class="form-group">
                                    <div class="col-md-3">Basic</div>
                                    <div class="col-md-9">
                                        <div class="slider slider-basic bg-red"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">Snap to increments</div>
                                    <div class="col-md-9">
                                        <div id="slider-snap-inc" class="slider bg-green"></div>
                                        <div class="slider-value">
                                            Amount ($100 increments):
                                            <span id="slider-snap-inc-amount"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">Range</div>
                                    <div class="col-md-9">
                                        <div id="slider-range" class="slider bg-blue"></div>
                                        <div class="slider-value">
                                            Price range:
                                            <span id="slider-range-amount"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">Maximum</div>
                                    <div class="col-md-9">
                                        <div id="slider-range-max" class="slider bg-purple"></div>
                                        <div class="slider-value">
                                            Maximum Value:
                                            <span id="slider-range-max-amount"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">Minimum</div>
                                    <div class="col-md-9">
                                        <div id="slider-range-min" class="slider bg-yellow"></div>
                                        <div class="slider-value">
                                            Minimum Value:
                                            <span class="slider-value" id="slider-range-min-amount"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">Graphic EQ</div>
                                    <div class="col-md-9">
                                        <style>
                                        #slider-eq  > span {height:160px; float:left; margin:15px}
                                        </style>
                                        <div id="slider-eq">
                                            <span>88</span>
                                            <span>77</span>
                                            <span>55</span>
                                            <span>33</span>
                                            <span>40</span>
                                            <span>45</span>
                                            <span>90</span>
                                            <span>40</span>
                                            <span>60</span>
                                            <span>20</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">Vertical</div>
                                    <div class="col-md-9">
                                        <div class="slider-vertical-value">
                                            Value:
                                            <span class="slider-value" id="slider-vertical-amount"></span>
                                        </div>
                                        <div id="slider-vertical" class="slider bg-green" style="height: 160px;"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">Range (Vertical)</div>
                                    <div class="col-md-9">
                                        <div class="slider-vertical-value">
                                            Target (Millions):
                                            <span  class="slider-value" id="slider-range-vertical-amount"></span>
                                        </div>
                                        <div id="slider-range-vertical" class="slider bg-grey" style="height: 160px;"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                            <h4>Sky Loader</h4>
                      </div>
                      <div class="panel-body">
                            <p>Add progress loaders at the top of the page like YouTube!</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="javascript:;" id="demoskylo" class="btn btn-primary btn-block">Load demo</a>
                                    <a href="javascript:;" id="setskylo" class="btn btn-default btn-block">Set position (50)</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="javascript:;" id="getskylo" class="btn btn-default btn-block">Get position</a>
                                    <a href="javascript:;" id="inchskylo" class="btn btn-default btn-block">Inch Forward (+ 10)</a>
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