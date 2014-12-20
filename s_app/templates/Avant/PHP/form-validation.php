<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ul class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>Advanced Forms</li>
                <li class="active">Form Validation</li>
            </ul>

            <h1>Form Validation</h1>
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
        <div class="panel panel-midnightblue">
          <div class="panel-heading">
                <h4>Form Validation States</h4>

          </div>
          <div class="panel-body">
            <p>Avant includes validation styles for error, warning, and success states on form controls. To use, add <code>.has-warning</code>, <code>.has-error</code>, or <code>.has-success</code> to the parent element. Any <code>.control-label</code>, <code>.form-control</code>, and <code>.help-block</code> within that element will receive the validation styles</p>
                <form action="" class="form-horizontal row-border">
                    <div class="form-group has-success">
                        <label for="" class="col-md-3 control-label">Input with Success</label>
                        <div class="col-md-6"><input type="text" class="form-control"></div>
                        <div class="col-md-3"><p class="help-block"><i class="fa fa-check"></i> Great success!</p></div>
                    </div>
                    <div class="form-group has-warning">
                        <label for="" class="col-md-3 control-label">Input with Warning</label>
                        <div class="col-md-6"><input type="text" class="form-control"></div>
                        <div class="col-md-3"><p class="help-block"><i class="fa fa-exclamation-triangle"></i> Be careful!</p></div>
                    </div>
                    <div class="form-group has-error">
                        <label for="" class="col-md-3 control-label">Input with Error</label>
                        <div class="col-md-6"><input type="text" class="form-control"></div>
                        <div class="col-md-3"><p class="help-block"><i class="fa fa-times-circle"></i> Oops!</p></div>
                    </div>
                    <!-- .form-group>(label.col-md-3.control-label{Required Field})+(.col-md-6>input[type='text'].form-control) -->
                </form>
          </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-midnightblue">
            <div class="panel-heading"><h4>Form Validation</h4></div>
            <div class="panel-body">
                <p>Front-end, UX aware form validation without writing a single line of code!</p>
                <form action="" class="form-horizontal row-border"  data-validate="parsley" id="validate-form">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Required Field</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Required Field" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Min-length</label>
                        <div class="col-sm-6">
                            <input type="text" data-minlength="6" placeholder="At least 6 characters" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Max-legnth</label>
                        <div class="col-sm-6">
                            <input type="text" data-maxlength="6" placeholder="At most 6 characters" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Range length</label>
                        <div class="col-sm-6">
                            <input type="text" data-rangelength="[5,10]" placeholder="Between 5 and 10 characters" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">RegExp</label>
                        <div class="col-sm-6">
                            <input type="text" data-regexp="#[A-Fa-f0-9]{6}" placeholder="Hexadecimal Color Code" required="required" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" data-type="email" placeholder="Email address" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">URL</label>
                        <div class="col-sm-6">
                            <input type="text" data-type="url" placeholder="URL address" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Digits</label>
                        <div class="col-sm-6">
                            <input type="text" data-type="digits" placeholder="Digits only" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Alphanum</label>
                        <div class="col-sm-6">
                            <input type="text" data-type="alphanum" placeholder="Alphanumeric only" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ISO Date</label>
                        <div class="col-sm-6">
                            <input type="text" data-type="dateIso" placeholder="YYYY-MM-DD" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-6">
                            <input type="text" data-type="phone" placeholder="(XXX) XXXX XXX" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-6">
                            <input type="text" id="ps1" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Repeat Password</label>
                        <div class="col-sm-6">
                            <input type="text" data-equalto="#ps1" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Checkbox</label>
                        <div class="col-sm-6">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" value="" required="required" name="terms">
                                Accept Terms &amp; Conditions
                              </label>
                          </div>
                      </div>
                    </div>
                </form>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="btn-toolbar">
                            <input type="submit" class="btn btn-primary" />
                            <button class="btn-default btn">Cancel</button>
                        </div>
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