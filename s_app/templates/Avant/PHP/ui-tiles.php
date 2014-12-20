<?php include "header.php" ?>

<div id="page-content">
	<div id='wrap'>
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>UI Components</li>
				<li class="active">Tiles</li>
			</ol>

			<h1>Tiles</h1>
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
							<h4>Info Tiles</h4>
							<div class="options">
								<ul class="nav nav-tabs">
					              <li class="active"><a href="#dominfotiles" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
					              <li><a href="#codeinfotiles" data-toggle="tab"><i class="fa fa-code"></i></a></li>
					            </ul>
							</div>
						</div>
						<div class="panel-body">
							<p>With our info tiles you can easily show quick stats without the buzz and fuzz of any plugins. It can be clickable if you wrap it in a <code>a</code> tag, or not if it's in a <code>div</code></p>
							<div class="tab-content">
						        <div class="tab-pane active" id="dominfotiles">
						            <div class="row">
						            	<div class="col-md-3">
						            		<a class="info-tiles tiles-sky" href="#">
											    <div class="tiles-heading">
											        <div class="pull-left">Page View</div>
											        <div class="pull-right">-15.6%</div>
											    </div>
											    <div class="tiles-body">
											        <div class="pull-left"><i class="fa fa-eye"></i></div>
											        <div class="pull-right">1.6K</div>
											    </div>
											</a>
						            	</div>
						            	<div class="col-md-3">
						            		<a class="info-tiles tiles-orange" href="#">
											    <div class="tiles-heading">
											        <div class="pull-left">Likes</div>
											        <div class="pull-right">+5.5%</div>
											    </div>
											    <div class="tiles-body">
											        <div class="pull-left"><i class="fa fa-thumbs-o-up"></i></div>
											        <div class="pull-right">345</div>
											    </div>
											</a>
						            	</div>
						            	<div class="col-md-3">
						            		<a class="info-tiles tiles-brown" href="#">
											    <div class="tiles-heading">
											        <div class="pull-left">Bugs Fixed</div>
											        <div class="pull-right">+14.9%</div>
											    </div>
											    <div class="tiles-body">
											        <div class="pull-left"><i class="fa fa-check-square"></i></div>
											        <div class="pull-right">21</div>
											    </div>
											</a>
						            	</div>
						            	<div class="col-md-3">
						            		<a class="info-tiles tiles-midnightblue" href="#">
											    <div class="tiles-heading">
											        <div class="pull-left">New Members</div>
											        <div class="pull-right">-9.8%</div>
											    </div>
											    <div class="tiles-body">
											        <div class="pull-left"><i class="fa fa-group"></i></div>
											        <div class="pull-right">125</div>
											    </div>
											</a>
						            	</div>
						            </div>
						            <div class="row">
						                <div class="col-md-3">
						                    <a class="info-tiles tiles-purple" href="#">
						                        <div class="tiles-heading">
						                            <div class="pull-left">Gifts</div>
						                            <div class="pull-right">+58.1%</div>
						                        </div>
						                        <div class="tiles-body">
						                            <div class="pull-left"><i class="fa fa-gift"></i></div>
						                            <div class="pull-right">16</div>
						                        </div>
						                    </a>
						                </div>
						                <div class="col-md-3">
						                    <a class="info-tiles tiles-success" href="#">
						                        <div class="tiles-heading">
						                            <div class="pull-left">Profits</div>
						                            <div class="pull-right">+4.5%</div>
						                        </div>
						                        <div class="tiles-body">
						                            <div class="pull-left"><i class="fa fa-money"></i></div>
						                            <div class="pull-right">$2.4K</div>
						                        </div>
						                    </a>
						                </div>
						                <div class="col-md-3">
						                    <a class="info-tiles tiles-primary" href="#">
						                        <div class="tiles-heading">
						                            <div class="pull-left">Sales Revenue</div>
						                            <div class="pull-right">-19.1%</div>
						                        </div>
						                        <div class="tiles-body">
						                            <div class="pull-left"><i class="fa fa-dollar"></i></div>
						                            <div class="pull-right">$30.2K</div>
						                        </div>
						                    </a>
						                </div>
						                <div class="col-md-3">
						                    <a class="info-tiles tiles-indigo" href="#">
						                        <div class="tiles-heading">
						                            <div class="pull-left">New Orders</div>
						                            <div class="pull-right">+25.8%</div>
						                        </div>
						                        <div class="tiles-body">
						                            <div class="pull-left"><i class="fa fa-shopping-cart"></i></div>
						                            <div class="pull-right">679</div>
						                        </div>
						                    </a>
						                </div>
						            </div>
									<div class="row">
						                <div class="col-md-3">
						                    <a class="info-tiles tiles-green" href="#">
						                        <div class="tiles-heading">
						                            <div class="pull-left">Comments</div>
						                            <div class="pull-right">+10.3%</div>
						                        </div>
						                        <div class="tiles-body">
						                            <div class="pull-left"><i class="fa fa-comments"></i></div>
						                            <div class="pull-right">32</div>
						                        </div>
						                    </a>
						                </div>
						                <div class="col-md-3">
						                    <a class="info-tiles tiles-danger" href="#">
						                        <div class="tiles-heading">
						                            <div class="pull-left">Downloads</div>
						                            <div class="pull-right">-8.5%</div>
						                        </div>
						                        <div class="tiles-body">
						                            <div class="pull-left"><i class="fa fa-download"></i></div>
						                            <div class="pull-right">6.7K</div>
						                        </div>
						                    </a>
						                </div>
						                <div class="col-md-3">
						                    <a class="info-tiles tiles-magenta" href="#">
						                        <div class="tiles-heading">
						                            <div class="pull-left">Tasks</div>
						                            <div class="pull-right">-11.1%</div>
						                        </div>
						                        <div class="tiles-body">
						                            <div class="pull-left"><i class="fa fa-tasks"></i></div>
						                            <div class="pull-right">17</div>
						                        </div>
						                    </a>
						                </div>
						                <div class="col-md-3">
						                    <a class="info-tiles tiles-inverse" href="#">
						                        <div class="tiles-heading">
						                            <div class="pull-left">Videos</div>
						                            <div class="pull-right">-20.7%</div>
						                        </div>
						                        <div class="tiles-body">
						                            <div class="pull-left"><i class="fa fa-video-camera"></i></div>
						                            <div class="pull-right">31</div>
						                        </div>
						                    </a>
						                </div>
						            </div>
						        </div>
					            <div class="tab-pane" id="codeinfotiles">
<div class="row">
	<div class="col-md-9">
<pre class="prettyprint linenums">
&lt;a class=&quot;info-tiles tiles-info&quot;&gt;
    &lt;div class=&quot;tiles-heading&quot;&gt;
        &lt;div class=&quot;pull-left&quot;&gt;New Members&lt;/div&gt;
        &lt;div class=&quot;pull-right&quot;&gt;&lt;i class=&quot;fa fa-caret-up&quot;&gt;&lt;/i&gt; 9.8%&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tiles-body&quot;&gt;
        &lt;div class=&quot;pull-left&quot;&gt;&lt;i class=&quot;fa fa-group&quot;&gt;&lt;/i&gt;&lt;/div&gt;
        &lt;div class=&quot;pull-right&quot;&gt;125&lt;/div&gt;
    &lt;/div&gt;
&lt;/a&gt;
</pre>
	</div>
	<div class="col-md-3">
		<a class="info-tiles tiles-info" href="#">
		    <div class="tiles-heading">
		        <div class="pull-left">New Members</div>
		        <div class="pull-right"><i class="fa fa-caret-down"></i> 9.8%</div>
		    </div>
		    <div class="tiles-body">
		        <div class="pull-left"><i class="fa fa-group"></i></div>
		        <div class="pull-right">125</div>
		    </div>
		</a>
	</div>
</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="panel">
					  <div class="panel-heading">
							<h4>Shortcut Tiles</h4>
							<div class="options">
								<ul class="nav nav-tabs">
					              <li class="active"><a href="#domshortcuttiles" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
					              <li><a href="#codeshortcuttiles" data-toggle="tab"><i class="fa fa-code"></i></a></li>
					            </ul>
							</div>
							
					  </div>
					  <div class="panel-body">
					  	<p>Shortcut tiles can be used to focus on links and can even contain notifications</p>
					  	<div class="tab-content">
						    <div class="tab-pane active" id="domshortcuttiles">
							  	<div class="row">
							  		<div class="col-md-2">
										<a href="#" class="shortcut-tiles tiles-info">
											<div class="tiles-body">
												<div class="pull-left"><i class="fa fa-home"></i></div>
												<div class="pull-right"><span class="badge">2</span></div>
											</div>
											<div class="tiles-footer">
												Project Home
											</div>
										</a>
							  		</div>
							  		<div class="col-md-2">
										<a href="#" class="shortcut-tiles tiles-orange">
											<div class="tiles-body">
												<div class="pull-left"><i class="fa fa-glass"></i></div>
												<div class="pull-right"><span class="badge">5</span></div>
											</div>
											<div class="tiles-footer">
												Drink
											</div>
										</a>
							  		</div>
							  		<div class="col-md-2">
										<a href="#" class="shortcut-tiles tiles-success">
											<div class="tiles-body">
												<div class="pull-left"><i class="fa fa-music"></i></div>
												
											</div>
											<div class="tiles-footer">
												Music
											</div>
										</a>
							  		</div>
							  		<div class="col-md-2">
										<a href="#" class="shortcut-tiles tiles-magenta">
											<div class="tiles-body">
												<div class="pull-left"><i class="fa fa-credit-card"></i></div>
												<div class="pull-right"><span class="badge">3</span></div>
											</div>
											<div class="tiles-footer">
												Credit Card
											</div>
										</a>
							  		</div>
							  		<div class="col-md-2">
										<a href="#" class="shortcut-tiles tiles-midnightblue">
											<div class="tiles-body">
												<div class="pull-left"><i class="fa fa-folder"></i></div>
												<div class="pull-right"><span class="badge">10</span></div>
											</div>
											<div class="tiles-footer">
												Files
											</div>
										</a>
							  		</div>
							  		<div class="col-md-2">
										<a href="#" class="shortcut-tiles tiles-green">
											<div class="tiles-body">
												<div class="pull-left"><i class="fa fa-archive"></i></div>
												<div class="pull-right"><span class="badge">16</span></div>
											</div>
											<div class="tiles-footer">
												Archive
											</div>
										</a>
							  		</div>
							  	</div>
							  	<div class="row">
							  		<div class="col-md-2">
										<a href="#" class="shortcut-tiles tiles-brown">
											<div class="tiles-body">
												<div class="pull-left"><i class="fa fa-camera"></i></div>

											</div>
											<div class="tiles-footer">
												Photos
											</div>
										</a>
									</div>
							  		<div class="col-md-2">
										<a href="#" class="shortcut-tiles tiles-primary">
											<div class="tiles-body">
												<div class="pull-left"><i class="fa fa-envelope"></i></div>
												<div class="pull-right"><span class="badge">99</span></div>
											</div>
											<div class="tiles-footer">
												Messages
											</div>
										</a>
									</div>
							  		<div class="col-md-2">
										<a href="#" class="shortcut-tiles tiles-indigo">
											<div class="tiles-body">
												<div class="pull-left"><i class="fa fa-dashboard"></i></div>
											</div>
											<div class="tiles-footer">
												Dashboard
											</div>
										</a>
									</div>
									<div class="col-md-2">
										<a href="#" class="shortcut-tiles tiles-inverse">
											<div class="tiles-body">
												<div class="pull-left"><i class="fa fa-group"></i></div>
												<div class="pull-right"><span class="badge">3</span></div>
											</div>
											<div class="tiles-footer">
												Members
											</div>
										</a>
									</div>
							  		<div class="col-md-2">
										<a href="#" class="shortcut-tiles tiles-warning">
											<div class="tiles-body">
												<div class="pull-left"><i class="fa fa-beer"></i></div>
												<div class="pull-right"><span class="badge">12</span></div>
											</div>
											<div class="tiles-footer">
												Beer!
											</div>
										</a>
									</div>
							  		<div class="col-md-2">
										<a href="#" class="shortcut-tiles tiles-danger">
											<div class="tiles-body">
												<div class="pull-left"><i class="fa fa-bar-chart-o"></i></div>
												<div class="pull-right"><span class="badge">1</span></div>
											</div>
											<div class="tiles-footer">
												Site Stats
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="codeshortcuttiles">
<div class="row">
	<div class="col-md-10">

<pre class="prettyprint linenums">
&lt;a href=&quot;#&quot; class=&quot;shortcut-tiles tiles-info&quot;&gt;
    &lt;div class=&quot;tiles-body&quot;&gt;
        &lt;div class=&quot;pull-left&quot;&gt;&lt;i class=&quot;fa fa-home&quot;&gt;&lt;/i&gt;&lt;/div&gt;
        &lt;div class=&quot;pull-right&quot;&gt;&lt;span class=&quot;badge&quot;&gt;2&lt;/span&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tiles-footer&quot;&gt;
        Project Home
    &lt;/div&gt;
&lt;/a&gt;
</pre>
	</div>
	<div class="col-md-2">
		<a href="#" class="shortcut-tiles tiles-info">
			<div class="tiles-body">
				<div class="pull-left"><i class="fa fa-home"></i></div>
				<div class="pull-right"><span class="badge">2</span></div>
			</div>
			<div class="tiles-footer">
				Project Home
			</div>
		</a>
	</div>
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