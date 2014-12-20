<?php include "header.php" ?>

<div id="page-content">
	<div id='wrap'>
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>Extras</li>
				<li class="active">404</li>
			</ol>

			<h1>404</h1>
			<div class="options">
				<a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a>
			</div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<p class="text-center">
						<span class="text-info" style="font-size:4em;">Uh-oh</span>
					</p>
					<p class="text-center">It looks like you have taken a wrong turn</p>
					<p class="text-center">If you are in denial and think it's a conspiracy that cannot possibly be true,</br>try using the search bar below.</p>
				</div>
				<div class="col-md-4 col-md-offset-4">
					<form action="" class="form-inline">
						<div class="input-group">
							<label for="errsearch" class="sr-only">Search</label>
							<input type="text" class="form-control" id="errsearch" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Search</button>
							</span>
						</div>
					</form>
					<p class="text-center"><small><a href="#">Report error?</a></small></p>
				</div>
			</div>

		</div> <!-- container -->
	</div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>