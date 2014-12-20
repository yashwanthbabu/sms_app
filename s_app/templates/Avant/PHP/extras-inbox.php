<?php include "header.php" ?>

<div id="page-content">
	<div id='wrap'>
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>Extras</li>
				<li class="active">Inbox</li>
			</ol>

			<h1>Inbox</h1>
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
				<div class="col-md-3">
					<div class="panel">
						<a href="#" class="btn btn-primary col-xs-12">Create New</a>
					</div>
					<hr>
					<div class="panel">
						<div class="list-group"> 
							<a href="#" class="list-group-item"><span class="badge badge-primary">27</span>Inbox</a> 
							<a href="#" class="list-group-item"><span class="badge badge-danger">9</span>Junk</a> 
							<a href="#" class="list-group-item">Draft</a> 
							<a href="#" class="list-group-item">Sent</a> 
							<a href="#" class="list-group-item"><span class="badge badge-inverse">14</span>Deleted</a> 
							<a href="#" class="list-group-item"><span class="badge badge-success">5</span>Important</a> 
						</div>
					</div>
				</div>
				<div class="col-md-9">

					<div class="panel panel-gray">
						<div class="panel-heading">
							<h4>Inbox</h4>
							<div class="options">

							</div>
						</div>
						<div class="panel-body">
							<form action="#">
			                    <div class="input-group">
				                    <input type="text" placeholder="Search messages..." class="form-control">
				                    <div class="input-group-btn">
				                    	<button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
				                    </div>
			                    </div>
		                    </form>
		                    <hr>
							<table class="table table-striped table-advance table-hover mailbox">
								<thead>
									<tr>
										<th width="5%"><span><input type="checkbox"></span></th>
										<th colspan="1">
											<div class="btn-group">
												<a class="btn btn-sm btn-default dropdown-toggle" href="#" data-toggle="dropdown"> Action <i class="fa fa-caret-down"></i>
												</a>
												<ul class="dropdown-menu">
													<li><a href="#">Mark Read</a></li>
													<li><a href="#">Mark Unread</a></li>
													<li><a href="#">Junk</a></li>
													<li><a href="#">Move</a></li>
													<li class="divider"></li>
													<li><a href="#">Delete</a></li>
												</ul>
											</div>
										</th>
										<th colspan="4">
											<div class="pull-right">
												<span class="pagination-info" style="margin-right:5px">1-30 of 789</span>
												<a class="btn btn-sm btn-default"><i class="fa fa-angle-left"></i></a>
												<a class="btn btn-sm btn-default"><i class="fa fa-angle-right"></i></a>
											</div>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr class="unread">
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">Posiedon Web</td>
										<td>Server undergoing maintainence</td>
										<td><i class="fa fa-paperclip"></i></td>
										<td class="text-right">16:30 PM</td>
									</tr>
									<tr class="unread">
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">Douglas Adams</td>
										<td>Waiting for documentation</td>
										<td></td>
										<td class="text-right">May 5</td>
									</tr>
									<tr>
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">The Doctor</td>
										<td>Lorem ipsum dolor sit amet</td>
										<td></td>
										<td class="text-right">May 5</td>
									</tr>
									<tr>
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">Nero</td>
										<td>Rilate niro lakem, consectetuer adipiscing</td>
										<td></td>
										<td class="text-right">May 4</td>
									</tr>
									<tr>
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">Envato</td>
										<td>Lorem ipsum dolor sit amet</td>
										<td></td>
										<td class="text-right">May 5</td>
									</tr>
									<tr>
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">mPower</td>
										<td>Rilate niro lakem, consectetuer adipiscing</td>
										<td><i class="fa fa-paperclip"></i></td>
										<td class="text-right">May 4</td>
									</tr>
									<tr>
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">Facebook</td>
										<td>Lorem ipsum dolor sit amet</td>
										<td><i class="fa fa-paperclip"></i></td>
										<td class="text-right">May 5</td>
									</tr>
									<tr>
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">Twitter</td>
										<td>Rilate niro lakem, consectetuer adipiscing</td>
										<td></td>
										<td class="text-right">May 4</td>
									</tr>
									<tr>
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">Emma Watson</td>
										<td>Lorem ipsum dolor sit amet</td>
										<td></td>
										<td class="text-right">May 5</td>
									</tr>
									<tr>
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">Life</td>
										<td>Lemons for sale</td>
										<td></td>
										<td class="text-right">May 4</td>
									</tr>
									<tr>
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">John Doe</td>
										<td>Lorem ipsum dolor sit amet</td>
										<td></td>
										<td class="text-right">May 5</td>
									</tr>
									<tr>
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">Jack Smith</td>
										<td>Rilate niro lakem, consectetuer adipiscing</td>
										<td><i class="fa fa-paperclip"></i></td>
										<td class="text-right">May 4</td>
									</tr>
									<tr>
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">Indiana Jones</td>
										<td>Lorem ipsum dolor sit amet</td>
										<td><i class="fa fa-paperclip"></i></td>
										<td class="text-right">May 5</td>
									</tr>
									<tr>
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">Sherlock</td>
										<td>Rilate niro lakem, consectetuer adipiscing</td>
										<td></td>
										<td class="text-right">May 4</td>
									</tr>
									<tr>
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">Facebook</td>
										<td>Rilate niro lakem, consectetuer adipiscing</td>
										<td><i class="fa fa-paperclip"></i></td>
										<td class="text-right">May 4</td>
									</tr>
									<tr>
										<td><span><input type="checkbox"></span></td>
										<td class="hidden-xs">Jane Smith</td>
										<td>Lorem ipsum dolor sit amet</td>
										<td><i class="fa fa-paperclip"></i></td>
										<td class="text-right">May 5</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="5">
											<div class="pull-right">
												<span class="pagination-info" style="margin-right:5px">1-30 of 789</span>
												<a class="btn btn-sm btn-default"><i class="fa fa-angle-left"></i></a>
												<a class="btn btn-sm btn-default"><i class="fa fa-angle-right"></i></a>
											</div>
										</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				
			</div>



			



		</div> <!-- container -->
	</div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>