<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>Form</li>
                <li class="active">Form Components</li>
            </ol>

            <h1>Form Components</h1>
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

<div class="panel panel-midnightblue">
    <div class="panel-heading">
        <h4>Basic Form Elements</h4>
        <div class="options">   
            <a href="javascript:;"><i class="fa fa-cog"></i></a>
            <a href="javascript:;"><i class="fa fa-wrench"></i></a>
            <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <div class="panel-body collapse in">
        <form action="" class="form-horizontal row-border">
            <div class="form-group">
                <label class="col-sm-3 control-label">Simplest Input</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Password Field</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Input with Placeholder</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Placeholder">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Disabled Input</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Disabled Input" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Read only field</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" readonly="readonly" value="Read only text goes here">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">With pre-defined value</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="http://">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">With max length</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" maxlength="20" placeholder="max 20 characters here">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Popover Input</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control popovers" placeholder="Popover Input" data-trigger="hover" data-toggle="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Tooltip Input</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here.">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Select Box</label>
                <div class="col-sm-6">
                    <select class="form-control" id="source">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option><option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option><option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Disabled Dropdown</label>
                <div class="col-sm-6">
                    <select class="form-control" disabled placeholder="Disabled Dropdown">
                        <option>Alaska</option>
                        <option>Lorem ipsum dolor.</option>
                        <option>Amet, impedit aperiam?</option>
                        <option>Nemo, alias, quasi?</option>
                        <option>Inventore, expedita.</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Multi-select Box</label>
                <div class="col-sm-6">
                    <select class="form-control" multiple>
                        <option>Lorem ipsum dolor.</option>
                        <option>Amet, impedit aperiam?</option>
                        <option>Nemo, alias, quasi?</option>
                        <option>Inventore, expedita.</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Inline Radio</label>
                <div class="col-sm-6">
                    <label class="radio-inline">
                      <input type="radio" id="inlineradio1" value="option1"> Option 1
                    </label>
                    <label class="radio-inline">
                      <input type="radio" id="inlineradio2" value="option2"> Option 2
                    </label>
                    <label class="radio-inline">
                      <input type="radio" id="inlineradio3" value="option3"> Option 3
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Radio</label>
                <div class="col-sm-6">
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Option one is this and that
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else
                      </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Inline Checkbox</label>
                <div class="col-sm-6">
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlinecheckbox1" value="option1"> Option 1
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlinecheckbox2" value="option2"> Option 2
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlinecheckbox3" value="option3"> Option 3
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Checkbox</label>
                <div class="col-sm-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Option one is this and that
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Option two can be something else
                      </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Textarea</label>
                <div class="col-sm-6">
                    <textarea class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Autogrow Textarea</label>
                <div class="col-sm-6">
                    <textarea class="form-control autosize"></textarea>
                </div>
                <div class="col-sm-3"><p class="help-block">Textbox auto grows as you type!</p></div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Fullscreen Textarea</label>
                <div class="col-sm-6">
                    <textarea class="form-control fullscreen"></textarea>
                </div>
            </div>
        </form>
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

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-midnightblue">
            <div class="panel-heading">
                <h4>Toggle Switches</h4>
                <div class="options">   
                    <a href="javascript:;"><i class="fa fa-cog"></i></a>
                    <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                    <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                </div>
            </div>
            <div class="panel-body collapse in">
                
                <form action="#" class="form-horizontal row-border">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Toggle Switch</label>
                        <div class="col-sm-3 control-label"> <!--  control-label needed for positioning -->
                            <div class="toggle"></div>
                        </div>
                        <div class="col-sm-6">
                            <p class="help-block"><code>.toggle-primary</code></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Toggle Switch</label>
                        <div class="col-sm-3 control-label">
                            <div class="toggle toggle-success"></div>
                        </div>
                        <div class="col-sm-6">
                            <p class="help-block"><code>.toggle-success</code></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Toggle Switch</label>
                        <div class="col-sm-3 control-label">
                            <div class="toggle toggle-warning"></div>
                        </div>
                        <div class="col-sm-6">
                            <p class="help-block"><code>.toggle-warning</code></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Toggle Switch</label>
                        <div class="col-sm-3 control-label">
                            <div class="toggle toggle-danger"></div>
                        </div>
                        <div class="col-sm-6">
                            <p class="help-block"><code>.toggle-danger</code></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Toggle Switch</label>
                        <div class="col-sm-3 control-label">
                            <div class="toggle toggle-inverse"></div>
                        </div>
                        <div class="col-sm-6">
                            <p class="help-block"><code>.toggle-inverse</code></p>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-midnightblue">
    <div class="panel-heading">
        <h4>Input Groups</h4>
        <div class="options">   
            <a href="javascript:;"><i class="fa fa-cog"></i></a>
            <a href="javascript:;"><i class="fa fa-wrench"></i></a>
            <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <div class="panel-body collapse in">
        <form action="" class="form-horizontal row-border">
            <div class="form-group">
                <label class="col-sm-3 control-label">Before Text Field</label>
                <div class="col-sm-6">
                    <div class="input-group">
                      <span class="input-group-addon">@</span>
                      <input type="text" class="form-control" placeholder="Username">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">After Text Field</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Both</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="text" class="form-control">
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Checkbox</label>
                <div class="col-sm-6">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <input type="checkbox">
                      </span>
                      <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Radio</label>
                <div class="col-sm-6">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <input type="radio">
                      </span>
                      <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Buttons instead of text</label>
                <div class="col-sm-6">
                    <div class="input-group">
                      <input type="text" class="form-control">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-info">Go!</button>
                      </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Buttons with Dropdowns</label>
                <div class="col-sm-6">
                    <div class="input-group">
                      <input type="text" class="form-control">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Action <i class="fa fa-caret-down"></i></button>
                        <ul class="dropdown-menu pull-right">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Segmentded Dropdown</label>
                <div class="col-sm-6">
                    <div class="input-group">
                      <input type="text" class="form-control">
                      <div class="input-group-btn">
                            <button type="button" class="btn btn-info">Action</button>
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></button>
                            <ul class="dropdown-menu pull-right">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                      </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="panel panel-midnightblue">
    <div class="panel-heading">
        <h4>AutoComplete</h4>
        <div class="options">   
            <a href="javascript:;"><i class="fa fa-cog"></i></a>
            <a href="javascript:;"><i class="fa fa-wrench"></i></a>
            <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <div class="panel-body collapse in">
        <div class="col-12">
            <p>A fast, full-featured, autocomplete library can prefet data, search that data on the client, and then falling back to the server. </p>
        </div>
        <form action="" class="form-horizontal row-border">
            <div class="form-group">
                <label class="col-sm-3 control-label">Autocomplete</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control typeahead example-countries" placeholder="Country" style="width: 300px;">
                    <p class="help-block">Type in a name of a country! The data is retrieved from a separate JSON file</p>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="panel panel-midnightblue">
    <div class="panel-heading">
        <h4>Color Pickers</h4>
        <div class="options">   
            <a href="javascript:;"><i class="fa fa-cog"></i></a>
            <a href="javascript:;"><i class="fa fa-wrench"></i></a>
            <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <div class="panel-body collapse in">
        <form action="" class="form-horizontal row-border">
            <div class="form-group">
                <label class="col-sm-3 control-label">Default</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control cpicker" data-color-format="hex" value="#fff">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">RGBA</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control cpicker" data-color-format="rgba" value="rgba(255, 146, 180,0.9)">
                    <p class="help-block">RGBA format specified via data-tag</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Input Group</label>
                <div class="col-sm-6">
                    <div class="input-group cpicker color" data-color="rgb(255, 146, 180)" data-color-format="rgb">
                        <input type="text" readonly class="form-control" value="">
                        <span class="input-group-addon"><i style="background-color: rgb(255, 146, 180); margin-left: 8px;"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3"><a data-toggle="modal" href="#cpicker_modal" class="btn btn-primary">Launch Color Pickers in Modal Dialog Box</a></div>
            </div>
        </form>
    </div>
</div>

<div class="panel panel-midnightblue">
    <div class="panel-heading">
        <h4>Date Picker</h4>
        <div class="options">   
            <a href="javascript:;"><i class="fa fa-cog"></i></a>
            <a href="javascript:;"><i class="fa fa-wrench"></i></a>
            <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <div class="panel-body collapse in">
        <form action="" class="form-horizontal row-border">
            <div class="form-group">
                <label class="col-sm-3 control-label">Default</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="datepicker">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Disable Past Dates</label>
                <div class="col-sm-6">
                    <div class="input-group date" id="datepicker-pastdisabled">
                        <input type="text" class="form-control">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Start with Year View</label>
                <div class="col-sm-6">
                    <div class="input-group date" id="datepicker-startview1">
                        <input type="text" class="form-control">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Inline Dates</label>
                <div class="col-sm-6">
                    <div id="datepicker2"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Date Range</label>
                <div class="col-sm-6">
                    <div class="input-daterange input-group" id="datepicker3">
                        <input type="text" class="input-small form-control" name="start" />
                        <span class="input-group-addon">to</span>
                        <input type="text" class="input-small form-control" name="end" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="panel panel-midnightblue">
    <div class="panel-heading">
        <h4>Time Picker</h4>
        <div class="options">   
            <a href="javascript:;"><i class="fa fa-cog"></i></a>
            <a href="javascript:;"><i class="fa fa-wrench"></i></a>
            <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <div class="panel-body collapse in">
        <form action="" class="form-horizontal row-border">
            <div class="form-group">
                <label class="col-sm-3 control-label">Default</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="timepicker1">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Input Group</label>
                <div class="col-sm-6">
                    <div class="input-group">
                      <input type="text" class="form-control" id="timepicker2">
                      <span class="input-group-addon" id="timepickerbtn2"><i class="fa fa-calendar"></i></span>
                    </div>
                    <p class="help-block">AM/PM</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Inline times</label>
                <div class="col-sm-6">
                    <div id="timepicker3"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Restrict time Range</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="timepicker4">
                </div>
            </div>
        </form>
    </div>
</div>


<div class="panel panel-midnightblue">
    <div class="panel-heading">
        <h4>Date Range Picker</h4>
        <div class="options">   
            <a href="javascript:;"><i class="fa fa-cog"></i></a>
            <a href="javascript:;"><i class="fa fa-wrench"></i></a>
            <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <div class="panel-body">
        <form action="" class="form-horizontal row-border">
            <div class="form-group">
                <label class="col-sm-3 control-label">Select Date Range</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" id="daterangepicker1">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Advanced Range Selector</label>
                <div class="col-sm-6">
                    <button class="btn btn-default" id="daterangepicker2">
                        <i class="fa fa-calendar"></i> 
                        <span><?php echo date("F j, Y", strtotime('-30 day')); ?> - <?php echo date("F j, Y"); ?></span> <b class="caret"></b>
                    </button>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Select Both Date and Time</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <span name="daterangepicker3" class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input for="daterangepicker3" type="text" class="form-control" id="daterangepicker3">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



<div class="panel panel-midnightblue">
    <div class="panel-heading">
        <h4>Advanced Select Boxes</h4>
        <div class="options">   
            <a href="javascript:;"><i class="fa fa-cog"></i></a>
            <a href="javascript:;"><i class="fa fa-wrench"></i></a>
            <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <div class="panel-body collapse in">
        <form action="" class="form-horizontal row-border">

            <div class="form-group">
                <label class="col-sm-3 control-label">Dropdown with Search</label>
                <div class="col-sm-6">
                    <select id="e1" style="width:100%" class="populate"></select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Select with Multiple</label>
                <div class="col-sm-6">
                    <select id="e2" multiple style="width:100%" class="populate"></select>
                    <p class="help-block">Select2 also supports multi-value select boxes. The <code>select</code> above is declared with the <code>multiple</code> attribute. Select2 automatially picks up on this</p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Minimum Input</label>
                <div class="col-sm-6">
                    <select id="e3" style="width:100%" class="populate"></select>
                    <p class="help-block">Supports a minimum input setting which is useful for large remote datasets where short search terms are not very useful</p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Infinite Scroll with Remote Data</label>
                <div class="col-sm-6">
                    <input type="hidden" id="e7" style="width:100%"/>
                    <p class="help-block">The selectbox has AJAX/JSONP support built in. In this example we will search for a movie using Rotten Tomatoes API. When result-list is scrolled to an end, more results are lazy-appended</p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Tagging Support</label>
                <div class="col-sm-6">
                    <input type="hidden" id="e12" style="width:100%" value="brown, red, green"/>
                    <p class="help-block">Quickly set up fields for tagging</p>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="panel panel-midnightblue">
  <div class="panel-heading ">
        <h4>Tokenfield</h4>
        <div class="options">   
            <a href="javascript:;"><i class="fa fa-cog"></i></a>
            <a href="javascript:;"><i class="fa fa-wrench"></i></a>
            <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
        </div>
  </div>
  <div class="panel-body collapse in">
    <p>Advanced tagging/tokenizing plugin for input fields with a focus on keyboard and copy-paste support.</p>
        <form action="" class="form-horizontal row-border">

            <div class="form-group">
                <label class="col-sm-3 control-label">Using jQuery UI Autocomplete</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="tokenfield-jQUI" value="red,green,blue" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Using Twitter Typeahead</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="tokenfield-typeahead" value="red,green,blue" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Parse Emails</label>
                <div class="col-sm-6">
                    <div class="input-group">
                      <input type="text" class="form-control" id="tokenfield-email" value="one@email.com,not an email, another@email.com" />
                      <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                    </div>

                </div>
            </div>

        </form>
  </div>
</div>


<div class="panel panel-midnightblue">
    <div class="panel-heading">
        <h4>Multi-Select</h4>
        <div class="options">   
            <a href="javascript:;"><i class="fa fa-cog"></i></a>
            <a href="javascript:;"><i class="fa fa-wrench"></i></a>
            <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <div class="panel-body collapse in">
        <form action="" class="form-horizontal row-border">
            <div class="form-group">
                <label class="col-sm-3 control-label">Multiple Select</label>
                <div class="col-sm-6">
                    <select multiple="multiple" id="multi-select2">
                        <option>Lorem</option><option>Unde</option><option>Saepe</option><option>Harum</option><option>Enim</option><option>Aliquid</option><option>Recusandae</option><option>Esse</option><option>Laborum</option><option>Quo</option><option>Quo</option><option>Maiores</option><option>Architecto</option><option>Sapiente</option><option>Placeat</option><option>Officiis</option><option>Obcaecati</option><option>Aliquid</option><option>Explicabo</option><option>Aliquam</option><option>Vero</option><option>Voluptates</option><option>Similique</option><option>Minima</option><option>Ipsum</option><option>Nemo</option><option>Omnis</option><option>Fuga</option><option>Iste</option><option>Possimus</option>
                    </select>
                </div>
            </div>
            
            
            <div class="form-group">
                <label class="col-sm-3 control-label">Multiple Select with Search and Group select</label>
                <div class="col-sm-6">
                    <select multiple="multiple" id="multi-select">
                        <option>Lorem</option><option>Unde</option><option>Saepe</option><option>Harum</option><option>Enim</option><option>Aliquid</option><option>Recusandae</option><option>Esse</option><option>Laborum</option><option>Quo</option><option>Quo</option><option>Maiores</option><option>Architecto</option><option>Sapiente</option><option>Placeat</option><option>Officiis</option><option>Obcaecati</option><option>Aliquid</option><option>Explicabo</option><option>Aliquam</option><option>Vero</option><option>Voluptates</option><option>Similique</option><option>Minima</option><option>Ipsum</option><option>Nemo</option><option>Omnis</option><option>Fuga</option><option>Iste</option><option>Possimus</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="panel panel-midnightblue">
    <div class="panel-heading">
          <h4>File Input</h4>
          <div class="options">
              <a href="javascript:;"><i class="fa fa-cog"></i></a>
              <a href="javascript:;"><i class="fa fa-wrench"></i></a>
              <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
          </div>
    </div>
    <div class="panel-body collapse in">
        <form action="" class="form-horizontal row-border">
    
            <div class="form-group">
                <label class="col-sm-3 control-label">File input group</label>
                <div class="col-sm-9">
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput">
                            <i class="glyphicon glyphicon-file fileinput-exists"></i>
                            <span class="fileinput-filename"></span>
                        </div>
                        <div class="input-group-btn btn-file">
                            <span class="fileinput-new btn btn-default">Select file</span>
                            <span class="fileinput-exists btn btn-default">Change</span>
                            <input type="file">
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">File input button</label>
                <div class="col-sm-9">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <span class="btn btn-default btn-file">
                            <span class="fileinput-new">Select file</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="...">
                        </span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Image Upload Widgets</label>
                <div class="col-sm-9">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                        <div>
                          <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>


<!-- Colorpicker Modal -->
  <div class="modal fade modals" id="cpicker_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Colorpickers</h4>
        </div>
        <div class="modal-body">
        <form action="" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-3 control-label">Default</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control cpicker" data-color-format="hex" value="#fff">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">RGBA</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control cpicker" data-color-format="rgba" value="rgba(255, 146, 180,0.9)">
                    <p class="help-block">RGBA format specified via data-tag</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Input Group</label>
                <div class="col-sm-6">
                    <div class="input-group color cpicker" data-color="rgb(255, 146, 180)" data-color-format="rgb">
                        <input type="text" readonly class="form-control" value="">
                        <span class="input-group-addon"><i style="background-color: rgb(255, 146, 180); margin-left: 8px;"></i></span>
                    </div>
                </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



            

        </div> <!-- container -->

    </div> <!--wrap -->

</div> <!-- page-content -->


<?php include "footer.php" ?>