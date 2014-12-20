<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>Advanced Forms</li>
                <li class="active">Wizards</li>
            </ol>

            <h1>Wizards</h1>
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

		<div class="panel panel-danger">
		  <div class="panel-heading">
				<h4>Simple Wizard</h4>
				<div class="options">
								<ul class="nav nav-tabs">
					              <li class="active"><a href="#domwizard" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
					              <li><a href="#codewizard" data-toggle="tab"><i class="fa fa-code"></i></a></li>
					            </ul>
							</div>
		  </div>
		  <div class="panel-body">
		  	<p>You can turn any simple form into a wizard with just one line of code! See it in action...</p>
		  	<div class="tab-content">
				<div class="tab-pane active" id="domwizard">
					<form action="#" id="basicwizard" class="form-horizontal">
					<fieldset title="Step 1">
						<legend>No Validation</legend>
						<div class="form-group">
							<label class="col-md-3 control-label">User Name</label>
							<div class="col-md-6">
								<input type="text" placeholder="username" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Email Address</label>
							<div class="col-md-6">
								<input type="text" placeholder="example@address.com" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Website</label>
							<div class="col-md-6">
								<input type="text" placeholder="http://address.com" class="form-control">
							</div>
						</div>
					</fieldset>
					<fieldset title="Step 2">
						<legend>Just Text</legend>
						<div class="row">
							<label class="col-md-3 control-label">Lorem Ipsum</label>
							<div class="col-md-9">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, quis autem deleniti animi eum a eaque sint voluptatibus labore possimus accusantium molestias magnam cum officiis qui neque minima assumenda facere aut repellat delectus. Soluta incidunt pariatur natus voluptatum voluptatibus culpa blanditiis. Inventore, repellendus, at veniam magnam quisquam necessitatibus modi est qui deserunt. Dicta, excepturi, iusto, maiores perferendis rem officiis est voluptas possimus laudantium fugit veritatis!</p>
								<p>By clicking Finish you agree that you accept the Terms &amp; Conditions</p>
							</div>
						</div>
					</fieldset>
					<input type="submit" class="finish btn-success btn" value="Submit" />
				</form>
			</div>
		
		  		
<div class="tab-pane" id="codewizard">
<pre class="prettyprint linenums">
&lt;form id=&quot;basicwizard&quot;&gt;
	&lt;fieldset title=&quot;Step 1&quot;&gt;
		&lt;legend&gt;No Validation&lt;/legend&gt;
		...
	&lt;/fieldset&gt;
	&lt;fieldset title=&quot;Step 2&quot;&gt;
		&lt;legend&gt;Just Text&lt;/legend&gt;
		...
	&lt;/fieldset&gt;
&lt;/form&gt;
</pre>
</div>
</div>

			
				
				
		  </div>
		</div>


<div class="panel panel-info">
	<div class="panel-heading">
		<h4>Wizard with Validation</h4>
	</div>
	<div class="panel-body">
		<p>The wizard has jQuery Validation plugin support built-in. All you need to do is turn on the <code>validate: true</code> option on and you instantly have a wizard with form validation!</p>
		<form action="#" id="wizard" class="form-horizontal">
			<fieldset title="Step 1">
				<legend>Registration</legend>
				<div class="form-group">
					<label for="fieldname" class="col-md-3 control-label">Name</label>
					<div class="col-md-6">
						<input id="fieldname" class="form-control" name="name" minlength="4" type="text" required>
					</div>
				</div>
				<div class="form-group">
					<label for="fieldemail" class="col-md-3 control-label">Email</label>
					<div class="col-md-6"><input id="fieldemail" class="form-control" type="email" name="email" required></div>
				</div>
				<div class="form-group">
					<label for="fieldurl" class="col-md-3 control-label">URL</label>
					<div class="col-md-6"><input id="fieldurl" class="form-control"  type="url" name="url"></div>
				</div>
			</fieldset>
			<fieldset title="Step 2">
				<legend>Personal Data</legend>
				<div class="form-group">
					<label for="fieldnick" class="col-md-3 control-label">Nick</label>
					<div class="col-md-6"><input id="fieldnick" class="form-control" name="name" minlength="4" type="text" required></div>
				</div>
				<div class="form-group">
					<label for="fieldabout" class="col-md-3 control-label">About</label>
					<div class="col-md-6"><textarea id="fieldabout" class="form-control autosize" rows="2"></textarea></div>
				</div>
			</fieldset>
			<fieldset title="Step 3">
				<legend>Preview</legend>
				<div class="form-group">
					<label for="" class="col-md-3 control-label">Terms and Conditions</label>
					<div class="col-md-9">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, nemo, atque consequuntur officiis asperiores consectetur porro labore commodi esse error quisquam nihil illum sunt facere inventore possimus autem ab voluptates quibusdam non voluptatum suscipit architecto. Illo, facilis, corporis, veritatis dolores minus quasi iure cupiditate quis autem ducimus nisi obcaecati tenetur sed ea excepturi pariatur consequatur enim labore officia mollitia. Rerum, voluptatem numquam molestiae recusandae iusto ipsum inventore unde accusantium labore delectus? Doloremque, fugit, sunt libero laboriosam cupiditate sed sequi nostrum saepe. Mollitia, alias, expedita accusantium porro error autem dolore veniam commodi nesciunt provident vitae neque. Nostrum, sed, molestias itaque provident inventore natus animi quasi laborum laboriosam facere ratione aperiam iusto. Non ducimus facere sunt doloribus? Asperiores, natus distinctio quis iure!</p>
					</div>
				</div>
			</fieldset>
			<input type="submit" class="finish btn-success btn" value="Submit" />
		</form>
	</div>
</div>


    </div>
</div>


</div> <!-- container -->
</div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>