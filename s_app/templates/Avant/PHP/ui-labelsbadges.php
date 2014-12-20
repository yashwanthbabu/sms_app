<?php include "header.php" ?>

<div id="page-content">
	<div id='wrap'>
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>UI Components</li>
				<li class="active">Labels & Badges</li>
			</ol>

			<h1>Labels & Badges</h1>
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
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4>Labels</h4>
						</div>
						<div class="panel-body">
							<div class="row">

								
								<div class="col-md-6">
									<p>Add any of the below mentioned modifier classes to change the appearance of a label.</p>


									<table class="table table-bordered">
										<thead>
											<tr>
												<th width="50%">Classes</th>
												<th width="50%">Labels</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.label-default</code></td>
												<td><span class="label label-default">Default</span></td>
											</tr>
											<tr>
												<td><code>.label-primary</code></td>
												<td><span class="label label-primary">Primary</span></td>
											</tr>
											<tr>
												<td><code>.label-success</code></td>
												<td><span class="label label-success">Success</span></td>
											</tr>
											<tr>
												<td><code>.label-info</code></td>
												<td><span class="label label-info">Info</span></td>
											</tr>
											<tr>
												<td><code>.label-warning</code></td>
												<td><span class="label label-warning">Warning</span></td>
											</tr>
											<tr>
												<td><code>.label-danger</code></td>
												<td><span class="label label-danger">Danger</span></td>
											</tr>
										</tbody>
									</table>                    
								</div>
								<div class="col-md-6">
									<p>Simply put the <code>.label</code> class and make your <code>span</code> stand out in different header sizes</p>
									<h1>Example heading <span class="label label-default">New</span></h1>
									<h2>Example heading <span class="label label-default">New</span></h2>
									<h3>Example heading <span class="label label-default">New</span></h3>
									<h4>Example heading <span class="label label-default">New</span></h4>
									<h5>Example heading <span class="label label-default">New</span></h5>
									<h6>Example heading <span class="label label-default">New</span></h6>
								</div>
							</div>
						</div>                    
					</div>
				</div>
				<div class="col-md-12">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4>Badges</h4>
						</div>
						<div class="panel-body">
							<div class="row">

								
								<div class="col-md-6">
									<p>Add modifier classes to change the appearance of a badge.</p>


									<table class="table table-bordered">
										<thead>
											<tr>
												<th width="50%">Classes</th>
												<th width="50%">Badges</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>No modifiers</td>
												<td><span class="badge">42</span></td>
											</tr>
											<tr>
												<td><code>.badge-primary</code></td>
												<td><span class="badge badge-primary">1</span></td>
											</tr>
											<tr>
												<td><code>.badge-success</code></td>
												<td><span class="badge badge-success">22</span></td>
											</tr>
											<tr>
												<td><code>.badge-info</code></td>
												<td><span class="badge badge-info">30</span></td>
											</tr>
											<tr>
												<td><code>.badge-warning</code></td>
												<td><span class="badge badge-warning">412</span></td>
											</tr>
											<tr>
												<td><code>.badge-danger</code></td>
												<td><span class="badge badge-danger">999</span></td>
											</tr>
										</tbody>
									</table>                    
								</div>
								<div class="col-md-6">
									<p>Easily highlight new or unread items with the <code>.badge</code> class</p>

									<div class="panel">
										<div class="list-group"> 
											<a href="#" class="list-group-item"><span class="badge">201</span> <i class="fa fa-envelope"></i> Inbox </a> 
											<a href="#" class="list-group-item"><span class="badge">5021</span> <i class="fa fa-eye"></i> Profile visits </a> 
											<a href="#" class="list-group-item"><span class="badge">14</span> <i class="fa fa-phone"></i> Call </a> 
											<a href="#" class="list-group-item"><span class="badge">20</span> <i class="fa fa-comments"></i> Messages </a> 
											<a href="#" class="list-group-item"><span class="badge">14</span> <i class="fa fa-bookmark"></i> Bookmarks </a> 
											<a href="#" class="list-group-item"><span class="badge">30</span> <i class="fa fa-bell"></i> Notifications </a> 
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