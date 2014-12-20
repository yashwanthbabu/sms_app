<?php include "header.php" ?>

<div id="page-content">
	<div id='wrap'>
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>UI Components</li>
				<li class="active">Modal Boxes</li>
			</ol>

			<h1>Modal Boxes</h1>
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
							<h4>Modal Dialog Boxes</h4>
							<div class="options">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#domwell" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
									<li><a href="#codewell" data-toggle="tab"><i class="fa fa-code"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
							<h3>Static example</h3>
							<div class="tab-content">
								<div class="tab-pane active" id="domwell">
									<p>A rendered modal with header, body, and set of actions in the footer.</p>
<style>
.visiblemodal {
	position: relative;
	top: auto;
	right: auto;
	left: auto;
	bottom: auto;
	z-index: 1;
	display: block;
	overflow: hidden;
}
</style>
									<div class="modal visiblemodal">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													<h4 class="modal-title">Modal title</h4>
												</div>
												<div class="modal-body">
													<p>One fine body…</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div><!-- /.modal-content -->
										</div><!-- /.modal-dialog -->
									</div><!-- /.modal -->

								</div>
								<div class="tab-pane" id="codewell">
<pre class="prettyprint linenums">
&lt;div class=&quot;modal&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&#x00d7;&lt;/button&gt;
        &lt;h4 class=&quot;modal-title&quot;&gt;Modal title&lt;/h4&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        &lt;p&gt;One fine body&#x2026;&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-default&quot; data-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;&lt;!-- /.modal-content --&gt;
  &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;
</pre>
								</div>
							</div>

							<h3>Live demo</h3>
							<p>Toggle a modal via JavaScript by clicking the button below. It will slide down and fade in from the top of the page.</p>
							<a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch demo modal</a>

							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Modal title</h4>
										</div>
										<div class="modal-body">
											<h4>Text in a modal</h4>
											<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

											<h4>Tooltips in a modal</h4>
											<p><a href="#" class="tooltips" title="Tooltip">This link</a> and <a href="#" class="tooltips" title="Tooltip">that link</a> should have tooltips on hover.</p>

											<hr>

											<h4>Overflowing text to show scroll behavior</h4>
											<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
											<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
											<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
											<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
											<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
											<p><img src="assets/demo/images/arch_fountain.jpg" alt="Fountain" class="img-rounded img-responsive"></p>
											<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
											<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
											<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
											<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>

										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->

						</div>
					</div>

					<div class="panel panel-info">
					  <div class="panel-heading">
							<h4>Bootbox</h4>
							<div class="options">
								<a href="#"><i class="fa fa-cogs"></i></a>
					  		</div>
					  </div>
					  <div class="panel-body">
							<p>Bootbox.js is a small JavaScript library which allows you to create programmatic dialog boxes using Twitter’s Bootstrap modals, without having to worry about creating, managing or removing any of the required DOM elements or JS event handlers.</p>
							
							<div class="row">
								<div class="col-md-6">
									<a href="javascript:;" class="btn btn-default btn-block" id="bootbox-demo-1">Basic alert example</a>
									<a href="javascript:;" class="btn btn-default btn-block" id="bootbox-demo-2">Alert with callback</a>
								</div>
								<div class="col-md-6">
									<a href="javascript:;" class="btn btn-default btn-block" id="bootbox-demo-3">Confirm example</a>
									<a href="javascript:;" class="btn btn-default btn-block" id="bootbox-demo-4">Prompt example</a>
								</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col-xs-12">
									<a href="javascript:;" class="btn btn-primary btn-block" id="bootbox-demo-5">Advanced Dialog</a>
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