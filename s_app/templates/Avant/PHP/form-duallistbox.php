<?php include "header.php" ?>

    <div id="page-content">
        <div id='wrap'>
            <div id="page-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Dashboard</a></li>
                    <li>Extras</li>
                </ol>

                <h1>Blank</h1>
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
                                <h4>Dual Listbox</h4>
                                <div class="options">
                                    <a href="#"><i class="fa fa-cogs"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form id="demoform" action="#" method="post">
                                    <select multiple="multiple" size="10" id="duallistbox1">
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3" selected="selected">Option 3</option>
                                        <option value="option4">Option 4</option>
                                        <option value="option5">Option 5</option>
                                        <option value="option6" selected="selected">Option 6</option>
                                        <option value="option7">Option 7</option>
                                        <option value="option8">Option 8</option>
                                        <option value="option9">Option 9</option>
                                        <option value="option0">Option 10</option>
                                    </select>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-block">Submit data</button>
                                </form>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4>Custom settings</h4>
                                <div class="options">
                                    <a href="#"><i class="fa fa-cogs"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <select multiple="multiple" size="10" id='duallistbox2'>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3" selected="selected">Option 3</option>
                                    <option value="option4">Option 4</option>
                                    <option value="option5">Option 5</option>
                                    <option value="option6" selected="selected">Option 6</option>
                                    <option value="option7">Option 7</option>
                                    <option value="option8">Option 8</option>
                                    <option value="option9">Option 9</option>
                                    <option value="option0">Option 10</option>
                                    <option value="option0">Option 11</option>
                                    <option value="option0">Option 12</option>
                                    <option value="option0">Option 13</option>
                                    <option value="option0">Option 14</option>
                                    <option value="option0">Option 15</option>
                                    <option value="option0">Option 16</option>
                                    <option value="option0">Option 17</option>
                                    <option value="option0">Option 18</option>
                                    <option value="option0">Option 19</option>
                                    <option value="option0">Option 20</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


            </div> <!-- container -->
        </div> <!--wrap -->
    </div> <!-- page-content -->

<?php include "footer.php" ?>