<?php include "header.php" ?>

<div id="page-content">
	<div id='wrap'>
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>UI Components</li>
				<li class="active">Tabs &amp; Accordions</li>
			</ol>

			<h1>Tabs &amp; Accordions</h1>
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
							<h4>Inline Tabs</h4>
							<div class="options">
								<ul class="nav nav-tabs">
					              <li class="active"><a href="#domtabs" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
					              <li><a href="#codetabs" data-toggle="tab"><i class="fa fa-code"></i></a></li>
					            </ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="tab-content">
								<div class="tab-pane active" id="domtabs">
									<div class="row">
										<div class="col-md-6">
											<div class="tab-container tab-danger">
												<ul class="nav nav-tabs">
													<li class="active"><a href="#home1" data-toggle="tab">Home</a></li>
													<li><a href="#profile1" data-toggle="tab">Profile</a></li>
													<li class="dropdown">
														<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <span class="caret"></span></a>
														<ul class="dropdown-menu">
															<li><a href="#">Something</a></li>
															<li><a href="#">Something Else</a></li>
															<li class="divider"></li>
															<li><a href="#">And one more thing</a></li>
														</ul>
													</li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane active" id="home1"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p> </div>
			              							<div class="tab-pane" id="profile1"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores porro eveniet debitis quas sed harum nobis libero voluptatibus dolorum odio at veniam aut id corrupti hic esse quisquam fugiat. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p></div>
							  					</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="tab-container tab-bottom tab-orange">
												<div class="tab-content">
													<div class="tab-pane active" id="home4"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p> </div>
												    <div class="tab-pane" id="profile4"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores porro eveniet debitis quas sed harum nobis libero voluptatibus dolorum odio at veniam aut id corrupti hic esse quisquam fugiat. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p></div>
												</div>
												<ul class="nav nav-tabs">
													<li class="active"><a href="#home4" data-toggle="tab">Home</a></li>
													<li><a href="#profile4" data-toggle="tab">Profile</a></li>
												</ul>
											</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="tab-container tab-left tab-danger">
												<ul class="nav nav-tabs">
													<li class="active"><a href="#home2" data-toggle="tab">Home</a></li>
													<li><a href="#profile2" data-toggle="tab">Profile</a></li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane active" id="home2"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p> </div>
												    <div class="tab-pane" id="profile2"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores porro eveniet debitis quas sed harum nobis libero voluptatibus dolorum odio at veniam aut id corrupti hic esse quisquam fugiat. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p></div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="tab-container tab-right tab-success">
												<ul class="nav nav-tabs">
													<li class="active"><a href="#home3" data-toggle="tab">Home</a></li>
													<li><a href="#profile3" data-toggle="tab">Profile</a></li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane active" id="home3"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p> </div>
												    <div class="tab-pane" id="profile3"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores porro eveniet debitis quas sed harum nobis libero voluptatibus dolorum odio at veniam aut id corrupti hic esse quisquam fugiat. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p></div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<div class="tab-pane" id="codetabs">
									<p>The following markup could be used to make a default inline tabs with tab at the top:</p>
<pre class="prettyprint linenums">
&lt;div class=&quot;tab-container&quot;&gt;
  &lt;ul class=&quot;nav nav-tabs&quot;&gt;
    &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#home1&quot; data-toggle=&quot;tab&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#profile1&quot; data-toggle=&quot;tab&quot;&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class=&quot;tab-content&quot;&gt;
    &lt;div class=&quot;tab-pane active&quot; id=&quot;home1&quot;&gt;Content 1&lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;profile1&quot;&gt;Content 2&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
									<p>Tab positions can be changed by adding <code>tab-left</code>, <code>tab-right</code> and <code>tab-bottom</code> classes to the <code>tab-container</code>.</p>
									<p>Further color can be added by using brands in the form of <code>tab-success</code>, <code>tab-alart</code>, <code>tab-magenta</code> and many more!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-danger">
					  <div class="panel-heading">
							<h4>Accordions inside Panels</h4>
							<div class="options">
								<a href="#"><i class="fa fa-cogs"></i></a>
					  		</div>
					  </div>
					  <div class="panel-body">
							<div id="accordioninpanel" class="accordion-group">
								<div class="accordion-item">
									<a class="accordion-title" data-toggle="collapse" data-parent="#accordioninpanel" href="#collapseinOne"><h4>Collapsible Group Item #1</h4></a>
									<div id="collapseinOne" class="collapse">
										<div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
									</div>
								</div>
								<div class="accordion-item">
									<a class="accordion-title" data-toggle="collapse" data-parent="#accordioninpanel" href="#collapseinTwo"><h4>Collapsible Group Item #2</h4></a>
									<div id="collapseinTwo" class="collapse">
										<div class="accordion-body ">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
									</div>
								</div>
								<div class="accordion-item">
									<a class="accordion-title" data-toggle="collapse" data-parent="#accordioninpanel" href="#collapseinThree"><h4>Collapsible Group Item #3</h4></a>
									<div id="collapseinThree" class="collapse">
										<div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
									</div>
								</div>
							</div>
					  </div>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="panel-group panel-info" id="accordion">
						<div class="panel panel-default">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								<div class="panel-heading"><h4>Accordion Panel Group #1</h4></div>
							</a>
							<div id="collapseOne" class="panel-collapse collapse in">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								<div class="panel-heading"><h4>Accordion Panel Group #2</h4></div>
							</a>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
								<div class="panel-heading"><h4>Accordion Panel Group #3</h4></div>
							</a>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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