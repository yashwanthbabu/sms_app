<?php include "header.php" ?>

<div id="page-content">
	<div id='wrap'>
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>UI Components</li>
				<li class="active">Alerts</li>
			</ol>

			<h1>Alerts</h1>
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
							<h4>Alerts</h4>
						</div>
						<div class="panel-body">
							<h3>Alerts</h3>
							<p>Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages</p>
							<div class="alert alert-dismissable alert-success">
								<strong>Well done!</strong> You successfully read this important alert message.
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							</div>
							<div class="alert alert-dismissable alert-info">
								<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							</div>
							<div class="alert alert-dismissable alert-warning">
								<strong>Warning!</strong> Best check yo self, you're not looking too good.
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							</div>
							<div class="alert alert-dismissable alert-danger">
								<strong>Oh snap!</strong> Change a few things up and try submitting again.
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4>Alert Blocks</h4>
						</div>
						<div class="panel-body">
							<h3>Alert Messages</h3>
							<p>Alerts can contain more than a line of messege. They can be extended with to focus on a particular messege.</p>

							<div class="alert alert-dismissable alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h3>Well done!</h3> 

								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p>
								<br>
								<p><a class="btn btn-success" href="#">Okay</a></p>

							</div>

							<div class="alert alert-dismissable alert-info">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h3>Heads up!</h3> 

								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p>
								<br>
								<p><a class="btn btn-info" href="#">Alright</a></p>

							</div>

							<div class="alert alert-dismissable alert-warning">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h3>Warning!</h3> 

								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p>
								<br>
								<p><a class="btn btn-warning" href="#">Do Something</a></p>

							</div>

							<div class="alert alert-dismissable alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h3>Oh Snap!</h3> 

								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p>
								<br>
								<p><a class="btn btn-danger" href="#">What to do?</a></p>

							</div>

						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="panel panel-info">
					  <div class="panel-heading">
							<h4>Pines Notify</h4>
					  </div>
					  <div class="panel-body">
							<h3>Growl-like Notifications</h3>
							<p>Subtle notification popups designed to provide an unparalleled level of flexibility, while still being very easy to implement and use</p>
							<style>
								.btn-block {margin-bottom: 10px;}
							</style>
									<h4>Simple Demos</h4>
										<div class="row">
											<div class="col-xs-4">
												<button class="btn btn-block btn-info-alt" onclick="$.pnotify({
											    	title: 'New Thing',
													text: 'Just to let you know, something happened.',
													type: 'info'
												});">Info Style</button>
											</div>
											<div class="col-xs-4">
												<button class="btn btn-block btn-success-alt" onclick="$.pnotify({
											    	title: 'New Thing',
													text: 'Just to let you know, something happened.',
													type: 'success'
												});">Success Style</button>
											</div>
											<div class="col-xs-4">
												<button class="btn btn-block btn-danger-alt" onclick="$.pnotify({
											    	title: 'New Thing',
													text: 'Just to let you know, something happened.',
													type: 'error'
												});">Error Style</button>
											</div>
										</div>
										
									<h4>Sticky Demos</h4>
										<div class="row">
											<div class="col-xs-4">
												<button class="btn btn-block btn-info-alt" onclick="$.pnotify({
													title: 'Sticky Info',
    												text: 'Sticky info, you know, like a newspaper covered in honey.',
    												type: 'info',
    												hide: false
												});">Info Style</button>
											</div>
											<div class="col-xs-4">
												<button class="btn btn-block btn-success-alt" onclick="$.pnotify({
    												title: 'Sticky Success',
    												text: 'Sticky success... I\'m not even gonna make a joke.',
    												type: 'success',
    												hide: false
												});">Success Style</button>
											</div>
											<div class="col-xs-4">
												<button class="btn btn-block btn-danger-alt" onclick="$.pnotify({
    												title: 'Uh Oh!',
    												text: 'Something really terrible happened. You really need to read this, so I won\'t close automatically.',
    												type: 'error',
    												hide: false
												});">Error Style</button>
											</div>
										</div>

									<h4>Advanced Demos</h4>
										<div class="row">
											<div class="col-md-3 col-sm-4 col-xs-6">
												<button class="btn btn-default-alt btn-block" onclick="$.pnotify({
												    title: 'Big Notice',
									    			text: 'Check me out! I\'m tall and wide, even though my text isn\'t.',
									    			width: '500px',
									    			type: 'error',
									    			min_height: '400px'
												});">Big Notice</button>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-6">
												<button class="btn btn-default-alt btn-block" onclick="show_rich();">Rich Notice</button>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-6">
												<button class="btn btn-default-alt btn-block"  onclick="dyn_notice();">Dynamic Notice</button>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-6">
												<button class="btn btn-default-alt btn-block" onclick="$.pnotify({
												    title: 'No History Notice',
    												text: 'I\'m not part of the notice history, so if you redisplay the last message, it won\'t be me.',
    												history: false,
    												type: 'error'
												});">No History Notice</button>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-6">
												<button class="btn btn-default-alt btn-block" onclick="$.pnotify({
												    title: 'No Sticky Button Notice',
													text: 'Check me out! I\'m a sticky notice with no unsticky button. You\'ll have to close me yourself.',
													hide: false,
													sticker: false,
													type: 'error'
												});">No Sticky Buttons</button>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-6">
												<button class="btn btn-default-alt btn-block" onclick="$.pnotify({
												    title: 'Permanent Buttons Notice',
    												text: 'My buttons are really lonely, so they\'re gonna hang out with us.',
    												closer_hover: false,
    												sticker_hover: false,
    												type: 'error'
												});">Permanent Buttons</button>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-6">
												<button class="btn btn-default-alt btn-block" onclick="$.pnotify({
												    title: 'No Mouse Reset Notice',
    												text: 'I don\'t care if you move your mouse over me, I\'ll disappear when I want.',
    												mouse_reset: false,
    												type: 'error'
												});">No Mouse Reset</button>
											</div>
											<div class="col-md-3 col-sm-4 col-xs-6">
												<button class="btn btn-default-alt btn-block" onclick="$.pnotify({
												    title: 'Notice',
												    type: 'error',
												    text: 'Right now I\'m a notice.',
												    before_close: function(pnotify) {
												        pnotify.pnotify({
												            title: 'Error',
												            text: 'Uh oh. Now I\'ve become an error.',
												            type: 'error',
												            before_close: function(pnotify) {
												                pnotify.pnotify({
												                    title: 'Success',
												                    text: 'I fixed the error!',
												                    type: 'success',
												                    before_close: function(pnotify) {
												                        pnotify.pnotify({
												                            title: 'Info',
												                            text: 'Everything\'s cool now.',
												                            type: 'info',
												                            before_close: null
												                        });
												                        pnotify.pnotify_queue_remove();
												                        pnotify.effect('bounce');
												                        return false;
												                    }
												                });
												                pnotify.pnotify_queue_remove();
												                pnotify.effect('bounce');
												                return false;
												            }
												        });
												        pnotify.pnotify_queue_remove();
												        pnotify.effect('bounce');
												        return false;
												    }
												});">Changing Styles</button>
											</div>
										</div>
									</div>
					  </div>
					</div>

					<div class="col-md-12">
						<div class="panel panel-info">
						  <div class="panel-heading"><h4>Pulsate</h4></div>
						  <div class="panel-body">
						  	<h3>Pulsating Elements</h3>
						  	<p>jQuery.pulsate.js adds a pulsating effect to elements. Useful for drawing the users attention.</p>
								<div class="row">
									<div class="col-md-4 col-xs-6">
										<button class="btn btn-orange btn-block" id="pulsate1">.pulsate({glow:false});</button>
									</div>
									<div class="col-md-4 col-xs-6">
										<button class="btn btn-midnightblue btn-block" id="pulsate2">.pulsate({color:"#09f"});</button>
									</div>
									<div class="col-md-4 col-xs-6">
										<button class="btn btn-green btn-block" id="pulsate3">.pulsate({reach:100});</button>
									</div>
									<div class="col-md-4 col-xs-6">
										<button class="btn btn-magenta btn-block" id="pulsate4">.pulsate({speed:2500});</button>
									</div>
									<div class="col-md-4 col-xs-6">
										<button class="btn btn-brown btn-block" id="pulsate5">.pulsate({pause:1000});</button>
									</div>
									<div class="col-md-4 col-xs-6">
										<button class="btn btn-inverse btn-block" id="pulsate6">.pulsate({onHover:true});</button>
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