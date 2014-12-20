<?php include "header.php" ?>

<div id="page-content">
	<div id='wrap'>
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>Extras</li>
				<li class="active">Sign Up</li>
			</ol>

			<h1>Sign Up</h1>
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
					<div class="panel panel-orange">
						<div class="panel-heading">
							<h4>Registration Form</h4>
							<div class="options">
						
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
								    <form action="" class="form-horizontal row-border">
							            <div class="form-group">
							                <label class="col-sm-3 control-label">Full Name</label>
							                <div class="col-sm-6">
							                    <input type="text" class="form-control">
							                </div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-3 control-label">Username</label>
							                <div class="col-sm-6">
							                    <input type="text" class="form-control" id="username">
							                    <p style="margin-top:5px; margin-bottom:0;"><buttn class="btn-link">Check Availability</a></p>
							                </div>
							                <div class="col-sm-3"><p class="help-block">16 characters maximum</p></div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-3 control-label">Password</label>
							                <div class="col-sm-6">
							                    <input type="password" class="form-control" id="password" placeholder="Password">
							                </div>
							                <div class="col-sm-3"><p class="help-block">8 characters minimum</p></div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-3 control-label">Confirm Password</label>
							                <div class="col-sm-6">
							                    <input type="password" class="form-control" id="password" placeholder="Password">
							                </div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-3 control-label">Email Address</label>
							                <div class="col-sm-6">
							                    <input type="text" class="form-control" id="email">
							                </div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-3 control-label">Gender</label>
							                <div class="col-sm-6">
							                    <div class="radio-inline">
							                      <label>
							                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							                        Male
							                      </label>
							                    </div>
							                    <div class="radio-inline">
							                      <label>
							                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							                        Female
							                      </label>
							                    </div>
							                    <div class="radio-inline">
							                      <label>
							                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							                        Other
							                      </label>
							                    </div>
							                </div>
							            </div>
							            <div class="form-group">
					                        <label class="col-sm-3 control-label">Birthday</label>
					                        <div class="col-sm-6">
					                            <input type="text" class="form-control mask" data-inputmask="'alias': 'date'">
					                        </div>
					                        <div class="col-sm-3"><p class="help-block">Day/Month/Year</p></div>
					                    </div>
										<!-- <div class="form-group">
							                <label class="col-sm-3 control-label">Birthday</label>
							                <div class="col-sm-1">
							                    <select class="form-control" id="day">
							                            <option value="01">01</option>
							                            <option value="02">02</option>
							                    </select>
							                </div>
							                <div class="col-sm-1">
							                    <select class="form-control" id="month">
							                            <option value="01">01</option>
							                            <option value="02">02</option>
							                    </select>
						                	</div>
						                	<div class="col-sm-1">
							                    <select class="form-control" id="year">
							                            <option value="2000">2000</option>
							                            <option value="2001">2001</option>
							                    </select>
						                	</div>
							            </div> -->

							            <div class="form-group">
							                <label class="col-sm-3 control-label">Address</label>
							                <div class="col-sm-6">
							                    <input type="text" class="form-control">
							                </div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-3 control-label">Address 2</label>
							                <div class="col-sm-6">
							                    <input type="text" class="form-control">
							                </div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-3 control-label">Country</label>
							                <div class="col-sm-6">
							                    <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input class="tt-hint" type="text" autocomplete="on" spellcheck="off" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background-attachment: scroll; background-clip: border-box; background-color: rgb(255, 255, 255); background-image: none; background-origin: padding-box; background-size: auto; background-position: 0% 0%; background-repeat: repeat repeat;"><input type="text" class="form-control typeahead example-countries tt-query" placeholder="Country" width="300" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><span style="position: absolute; left: -9999px; visibility: hidden; white-space: nowrap; font-family: 'Source Sans Pro', 'Segoe UI', 'Droid Sans', Tahoma, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></span><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"></span></span>
							                    
							                </div>
							            </div>
							            <div class="form-group">
					                        <label class="col-sm-3 control-label">Phone</label>
					                        <div class="col-sm-6">
					                            <input type="text" class="form-control mask" data-inputmask="'mask':'(999) 999-9999'">
					                        </div>
					                        <div class="col-sm-3"><p class="help-block">(999) 999-9999</p></div>
                    					</div>
                    					<div class="form-group">
							                <label class="col-sm-3 control-label">Website</label>
							                <div class="col-sm-6">
							                    <input type="text" class="form-control" value="http://">
							                </div>
							            </div>
											<div class="form-group">
							                <label class="col-sm-3 control-label"></label>
							                <div class="col-sm-6">
							                    <label class="checkbox-inline">
							                      <input type="checkbox" id="inlinecheckbox1" value="option1"> I agree to the <a href="#">Terms</a> & <a href="#">Policy</a>
							                    </label>
							                </div>
							            </div>
							            
							        </form>
								</div>
							</div>
						</div>
						<div class="panel-footer">
				      	<div class="row">
				      		<div class="col-sm-6 col-sm-offset-3">
				      			<div class="btn-toolbar">
					      			<button class="btn-primary btn">Sign Up</button>
					      			<button class="btn-default btn">Reset</button>
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
<script type="text/javascript" src="assets/plugins/form-inputmask/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript" src="assets/demo/demo-mask.js"></script>