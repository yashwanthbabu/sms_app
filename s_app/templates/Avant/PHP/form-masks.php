<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>Advanced Forms</li>
                <li class="active">Form Masks</li>
            </ol>

            <h1>Masks</h1>
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

<div class="alert alert-info">
    <p>Input masks integrate formatting cues directly into an input field to help signal how to correctly answer a question. These formatting instructions are automatically included in an input and cannot be removed by a user. More importantly, a user cannot enter other non-valid characters into the input field.</p>
    <p>With Avant, you can add these masks directly inline with the HTML5 <code>data-inputmask</code> attribute. No code necessary!</p>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-midnightblue">
            <div class="panel-heading"><h4>Masked Input Fields</h4></div>
            <div class="panel-body">
                <form action="" class="form-horizontal row-border">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'alias': 'date'">
                        </div>
                        <div class="col-sm-3"><p class="help-block">alias:date</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'mask':'(999) 999-9999'">
                        </div>
                        <div class="col-sm-3"><p class="help-block">(999) 999-9999</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Phone + Ext</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'mask':'(999) 999-9999 x999
                            99'"></div>
                        <div class="col-sm-3"><p class="help-block">(999) 999-9999 x99999</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Int' Phone</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'mask':'+33 999 999 999'">
                        </div>
                        <div class="col-sm-3"><p class="help-block">+33 999 999 999</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">TaxID</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'mask':'99-9999999'">
                        </div>
                        <div class="col-sm-3"><p class="help-block">99-9999999</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">SSN</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'mask':'999-99-9999'">
                        </div>
                        <div class="col-sm-3"><p class="help-block">999-99-9999</p></div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Product Key</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'mask':'a*-999-a999'">
                        </div>
                        <div class="col-sm-3"><p class="help-block">a*-999-a999</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Purchase Order</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'mask':'PO: aaa-999-***'">
                        </div>
                        <div class="col-sm-3"><p class="help-block">PO: aaa-999-***</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Percent</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'mask':'99%'">
                        </div>
                        <div class="col-sm-3"><p class="help-block">99%</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Currency</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'mask':'999,999,999.99 $', 'numericInput' : true"></div>
                        <div class="col-sm-3"><p class="help-block">right alignment</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Currency 2</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'mask':'$ 999,999,999.99', 'greedy' : false, 'rightAlignNumerics' : false"></div>
                        <div class="col-sm-3"><p class="help-block">left alignment</p></div>
                    </div>
                </form>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="btn-toolbar">
                            <button class="btn-primary btn">Submit</button>
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