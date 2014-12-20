<?php include "header.php" ?>

<div id="page-content">
	<div id='wrap'>
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>Scaffolding</li>
				<li class="active">Grids</li>
			</ol>

			<h1>Grid Systems</h1>
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
				<div class="col-lg-12">
					<div class="panel panel-midnightblue">
						<div class="panel-heading">
							<h4>Grid System</h4>
						</div>
						<div class="panel-body">
							<p>Avant includes Bootstrap's responsive, mobile-first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.</p>
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th></th>
											<th>
												Extra small devices
												<small>Phones (&lt;768px)</small>
											</th>
											<th>
												Small devices
												<small>Tablets (≥768px)</small>
											</th>
											<th>
												Medium devices
												<small>Desktops (≥992px)</small>
											</th>
											<th>
												Large devices
												<small>Desktops (≥1200px)</small>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th>Grid behavior</th>
											<td>Horizontal at all times</td>
											<td colspan="3">Collapsed to start, horizontal above breakpoints</td>
										</tr>
										<tr>
											<th>Max container width</th>
											<td>None (auto)</td>
											<td>100%</td>
											<td>100%</td>
											<td>100%</td>
										</tr>
										<tr>
											<th>Class prefix</th>
											<td><code>.col-xs-</code></td>
											<td><code>.col-sm-</code></td>
											<td><code>.col-md-</code></td>
											<td><code>.col-lg-</code></td>
										</tr>
										<tr>
											<th># of columns</th>
											<td colspan="4">12</td>
										</tr>
										<tr>
											<th>Max column width</th>
											<td class="text-muted">Auto</td>
											<td>60px</td>
											<td>78px</td>
											<td>95px</td>
										</tr>
										<tr>
											<th>Gutter width</th>
											<td colspan="4">20px (10px on each side of a column)</td>
										</tr>
										<tr>
											<th>Nestable</th>
											<td colspan="4">Yes</td>
										</tr>
										<tr>
											<th>Offsets</th>
											<td colspan="1" class="text-muted">N/A</td>
											<td colspan="3">Yes</td>
										</tr>
										<tr>
											<th>Column ordering</th>
											<td class="text-muted">N/A</td>
											<td colspan="3">Yes</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h4>Stacked-to-Horizontal</h4>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class='col-lg-12'>
									<p>Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices.</p>
								</div>
							</div>
							<div class="show-grid">
								<div class="row">
									<div class="col-md-1">.col-md-1</div>
									<div class="col-md-1">.col-md-1</div>
									<div class="col-md-1">.col-md-1</div>
									<div class="col-md-1">.col-md-1</div>
									<div class="col-md-1">.col-md-1</div>
									<div class="col-md-1">.col-md-1</div>
									<div class="col-md-1">.col-md-1</div>
									<div class="col-md-1">.col-md-1</div>
									<div class="col-md-1">.col-md-1</div>
									<div class="col-md-1">.col-md-1</div>
									<div class="col-md-1">.col-md-1</div>
									<div class="col-md-1">.col-md-1</div>
								</div>
								<div class="row">
									<div class="col-md-8">.col-md-8</div>
									<div class="col-md-4">.col-md-4</div>
								</div>
								<div class="row">
									<div class="col-md-4">.col-md-4</div>
									<div class="col-md-4">.col-md-4</div>
									<div class="col-md-4">.col-md-4</div>
								</div>
								<div class="row">
									<div class="col-md-6">.col-md-6</div>
									<div class="col-md-6">.col-md-6</div>
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
							<h4>Combining Mobile with Desktop</h4>
						</div>
						<div class="panel-body">
							<p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
							<div class="show-grid">
								<!-- Stack the columns on mobile by making one full-width and the other half-width -->
								<div class="row">
									<div class="col-xs-12 col-md-8">.col-xs-12 col-md-8</div>
									<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
								</div>

								<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
								<div class="row">
									<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
									<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
									<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
								</div>

								<!-- Columns are always 50% wide, on mobile and desktop -->
								<div class="row">
									<div class="col-xs-6">.col-xs-6</div>
									<div class="col-xs-6">.col-xs-6</div>
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
							<h4>Mobile, tablet, and desktop</h4>
						</div>
						<div class="panel-body">
							<p>Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</p>
							<div class="show-grid">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
									<div class="col-xs-6 col-sm-6 col-md-4">.col-xs-6 .col-sm-6 .col-md-4</div>
								</div>
								<div class="row">
									<div class="col-xs-6 col-sm-4 col-md-4">.col-xs-6 .col-sm-4 .col-md-4</div>
									<div class="col-xs-6 col-sm-4 col-md-4">.col-xs-6 .col-sm-4 .col-md-4</div>
									<!-- Optional: clear the XS cols if their content doesn't match in height -->
									<div class="clearfix visible-xs"></div>
									<div class="col-xs-6 col-sm-4 col-md-4">.col-xs-6 .col-sm-4 .col-md-4</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-lg-12">
					<div class="panel">
						<div class="panel-heading">
							<h4>Fluid Offsetting</h4>
						</div>
						<div class="panel-body">
							<p>Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by * columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code> over four columns.</p>
							<div class="show-grid">
								<div class="row">
									<div class="col-md-4">.col-md-4</div>
									<div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
								</div>
								<div class="row">
									<div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
									<div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-lg-12">
					<div class="panel">
						<div class="panel-heading">
							<h4>Nesting Columns</h4>
						</div>
						<div class="panel-body">
							<p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-md-*</code> columns within an existing <code>.col-md-*</code> column. Nested rows should include a set of columns that add up to 12.</p>
							<div class="show-grid">
								<div class="row">
									<div class="col-md-12">
										Level 1: 12 columns
										<div class="row">
											<div class="col-md-6">Level 2: 6 columns</div>
											<div class="col-md-6">Level 2: 6 columns</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-lg-12">
					<div class="panel">
						<div class="panel-heading">
							<h4>Column Ordering</h4>
						</div>
						<div class="panel-body">
							<p>Easily change the order of our built-in grid columns with <code>.col-md-push-*</code> and <code>.col-md-pull-*</code> modifier classes.</p>
							<div class="show-grid">
								<div class="row show-grid">
									<div class="col-md-9 col-md-push-3">9</div>
									<div class="col-md-3 col-md-pull-9">3</div>
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