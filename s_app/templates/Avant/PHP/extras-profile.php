<?php include "header.php" ?>

<div id="page-content">
	<div id='wrap'>
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>Extras</li>
				<li class="active">User Profile</li>
			</ol>

			<h1>User Profile</h1>
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
						<div class="panel-body">

							<div class="row">
								<div class="col-md-6">
									<img src="assets/demo/avatar/johansson.png" alt="" class="pull-left" style="margin: 0 20px 20px 0">
									<div class="table-responsive">
										<table class="table table-condensed">
											<h3><strong>John Doe</strong></h3>
											<!-- <thead>
												<tr>
													<th width="50%"></th>
													<th width="50%"></th>
												</tr>
											</thead> -->
											<tbody>
												<tr>
													<td>Web</td>
													<td><a href="#">www.johndoe.com</a></td>
												</tr>
												<tr>
													<td>Email</td>
													<td><a href="">doe@lime.com</a></td>
												</tr>
												<tr>
													<td>Phone</td>
													<td>(123)-342-5412</td>
												</tr>
												<tr>
													<td>Position</td>
													<td>Designer</td>
												</tr>
												<tr>
													<td>Status</td>
													<td>Member</td>
												</tr>
												<tr>
													<td>Social</td>
													<td>
														<a href="#" class="btn btn-xs"><i class="fa fa-skype"></i></a>
														<a href="#" class="btn btn-xs"><i class="fa fa-facebook"></i></a>
														<a href="#" class="btn btn-xs"><i class="fa fa-twitter"></i></a>
														<a href="#" class="btn btn-xs"><i class="fa fa-dribbble"></i></a>
														<a href="#" class="btn btn-xs"><i class="fa fa-tumblr"></i></a>
														<a href="#" class="btn btn-xs"><i class="fa fa-linkedin"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-md-6">
									<h3>About</h3>
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.
									</p>
									<p>
										Dsperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque. 
									</p>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-12">
									<div class="tab-container tab-success">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#home1" data-toggle="tab">Timeline</a></li>
											<li class=""><a href="#profile1" data-toggle="tab">Assigned Projects</a></li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active clearfix" id="home1">
												<div class="col-md-12">
													<h4 class="timeline-month"><span>November</span> <span>2013</span></h4>
													<ul class="timeline">
														<li class="timeline-orange">
															<div class="timeline-icon"><i class="fa fa-camera"></i></div>
															<div class="timeline-body">
																<div class="timeline-header">
																	<span class="author">Posted by <a href="#">David Tennant</a></span>
																	<span class="date">Monday, November 21, 2013</span>
																</div>
																<div class="timeline-content">
																	<h3>Consectetur Adipisicing Elit</h3>
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, officiis, molestiae, deserunt asperiores architecto ut vel repudiandae dolore inventore nesciunt necessitatibus doloribus ratione facere consectetur suscipit!</p>
																</div>
															</div>
														</li>
														<li class="timeline-warning">
															<div class="timeline-icon"><i class="fa fa-pencil"></i></div>
															<div class="timeline-body">
																<div class="timeline-header">
																	<span class="author">Posted by <a href="#">David Tennant</a></span>
																	<span class="date">Monday, November 21, 2013</span>
																</div>
																<div class="timeline-content">
																	<h3>Consectetur Adipisicing Elit</h3>
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, officiis, molestiae, deserunt asperiores architecto ut vel repudiandae dolore inventore nesciunt necessitatibus doloribus ratione facere consectetur suscipit!</p>
																</div>
															</div>
														</li>
													</ul>
												</div>

												<div class="col-md-12">
													<h4 class="timeline-month"><span>December</span> <span>2013</span></h4>
													<ul class="timeline">
														<li class="timeline-success">
															<div class="timeline-icon"><i class="fa fa-video-camera"></i></div>
															<div class="timeline-body">
																<div class="timeline-header">
																	<span class="author">Posted by <a href="#">David Tennant</a></span>
																	<span class="date">Monday, December 21, 2013</span>
																</div>
																<div class="timeline-content">
																	<h3>Consectetur Adipisicing Elit</h3>
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, officiis, molestiae, deserunt asperiores architecto ut vel repudiandae dolore inventore nesciunt necessitatibus doloribus ratione facere consectetur suscipit!</p>
																</div>
															</div>
														</li>
														<li class="timeline-midnightblue">
															<div class="timeline-icon"><i class="fa fa-group"></i></div>
															<div class="timeline-body">
																<div class="timeline-header">
																	<span class="author">Posted by <a href="#">David Tennant</a></span>
																	<span class="date">Thursday, December 12, 2013</span>
																</div>
																<div class="timeline-content">
																	<h3>Consectetur Adipisicing Elit</h3>
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, officiis, molestiae, deserunt asperiores architecto ut vel repudiandae dolore inventore nesciunt necessitatibus doloribus ratione facere consectetur suscipit!</p>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											
	              							<div class="tab-pane" id="profile1">
	              								<div class="table-responsive">
	              									<table class="table table-striped">
	              										<thead>
	              											<tr>
	              												<th width="5%">#</th>
	              												<th width="35%">Project Title</th>
	              												<th width="35%">Due Date</th>
	              												<th width="25%">Progress</th>
	              											</tr>
	              										</thead>
	              										<tbody>
	              											<tr>
	              												<td>1</td>
	              												<td>Lorem ipsum</td>
                                     							<td>Nov 5, 2013</td>	              												
	              												<td>
	              													<div class="progress progress-striped" style="margin:5px 0 0">
                                     									<div class="progress-bar progress-bar-info" style="width: 30%;"></div>
                                     								</div>
                                     							</td>
	              											</tr>
	              											<tr>
	              												<td>2</td>
	              												<td>Dignissimos voluptas</td>
                                     							<td>Nov 10, 2013</td>	              												
	              												<td>
	              													<div class="progress progress-striped" style="margin:5px 0 0">
                                     									<div class="progress-bar progress-bar-danger" style="width: 55%;"></div>
                                     								</div>
                                     							</td>
	              											</tr>
	              											<tr>
	              												<td>3</td>
	              												<td>Tenetur ex ea dignissimos</td>
                                     							<td>Nov 11, 2013</td>	              												
	              												<td>
	              													<div class="progress progress-striped" style="margin:5px 0 0">
                                     									<div class="progress-bar progress-bar-success" style="width: 35%;"></div>
                                     								</div>
                                     							</td>
	              											</tr>
	              											<tr>
	              												<td>4</td>
	              												<td>Quo dolorem maxime</td>
                                     							<td>Nov 21, 2013</td>	              												
	              												<td>
	              													<div class="progress progress-striped" style="margin:5px 0 0">
                                     									<div class="progress-bar progress-bar-primary" style="width: 20%;"></div>
                                     								</div>
                                     							</td>
	              											</tr>
	              											<tr>
	              												<td>5</td>
	              												<td>Dsperiores</td>
                                     							<td>Nov 17, 2013</td>	              												
	              												<td>
	              													<div class="progress progress-striped" style="margin:5px 0 0">
                                     									<div class="progress-bar progress-bar-inverse" style="width: 70%;"></div>
                                     								</div>
                                     							</td>
	              											</tr>
	              										</tbody>
	              									</table>
	              								</div>
	              							</div>
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