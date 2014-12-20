<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li class="active">Calendar</li>
            </ol>

            <h1>Calendar</h1>
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
                <div class="panel panel-danger calendar">
                    <div class="panel-heading">

                        <h4>Basic Calendar</h4>
                        <div class="options">
                            
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-info">Click on a date to create an event, drag &amp; drop to move events or extend time ranges</div>
                        <div id='calendar-drag'></div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4>Calendar with External Drag &amp; Drop</h4>
                    <div class="options">
                        
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div id='external-events' class="col-sm-3">
                            <h4>Draggable Events</h4>
                            <div class='external-event label label-info'>My Event 1</div>
                            <div class='external-event label label-info'>My Event 2</div>
                            <div class='external-event label label-info'>My Event 3</div>
                            <div class='external-event label label-info'>My Event 4</div>
                            <div class='external-event label label-info'>My Event 5</div>
                            <div class='external-event label label-info'>My Event 6</div>
                            <label for='drop-remove'><input type='checkbox' id='drop-remove' /> remove after drop</label>
                        </div>

                        <div id='calendar-external' class="col-sm-9"></div>
                    </div>
                </div>
                </div>
            </div>



        </div>

        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>