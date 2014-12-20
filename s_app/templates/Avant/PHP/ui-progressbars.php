<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>UI Components</li>
                <li class="active">Progress Bars</li>
            </ol>

            <h1>Progress Bars</h1>
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
                <div class="col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Progress Bars</h4>
                            <div class="options">
                            <div class="options">
                                <ul class="nav nav-tabs">
                                  <li class="active"><a href="#domprogress" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
                                  <li><a href="#codeprogress" data-toggle="tab"><i class="fa fa-code"></i></a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.</p>
                                    <h3>Default Progress Bars</h3>
                                    <p>Default progress bars are simple and css driven.</p>
									<p>Primary with <code>progress-bar-primary</code> class.</p>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="domprogress">
                                            <div class="progress">    
                                              <div class="progress-bar progress-bar-primary" style="width: 20%"></div>
                                            </div>
                                            <p>Info with <code>progress-bar-info</code> class.</p>
                                            <div class="progress">    
                                              <div class="progress-bar progress-bar-info" style="width: 60%"></div>
                                            </div>
                                            <p>Success with <code>progress-bar-success</code> class.</p>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-success" style="width: 30%"></div>
                                            </div>
                                            <p>Warning with <code>progress-bar-warning</code> class.</p>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" style="width: 70%"></div>
                                            </div>
                                            <p>Danger with <code>progress-bar-danger</code> class.</p>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
                                            </div>
                                            <p>Inverse with <code>progress-bar-inverse</code> class.</p>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-inverse" style="width: 40%"></div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="codeprogress">
<pre class="prettyprint linenums">
&lt;div class=&quot;progress&quot;&gt;    
  &lt;div class=&quot;progress-bar progress-bar-primary&quot; style=&quot;width: 20%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                  <h3>Striped Progress Bars</h3>
                                    <p>Sriped Progress bars made with CSS3 gradients, just add the <code>progress-striped</code> class</p>
                                    <p><span class="label label-info">Note</span> Does not work with browsers that do not support CSS3 gradients or animations, like IE9</p>
									<p>Info</p>
                                    <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-info" style="width: 30%"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                  <h3>Animated Progressbars</h3>
                                    <p>Animated progressbars with CSS3, just add a class <code>active</code> with <code>progress-striped</code></p>
									<p>Inverse</p>
                                    <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-inverse" style="width: 55%"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3>Stacking progressbars</h3>
                                    <p>You can stack one progressbar on top of another simply by including them all in the same <code>div.progress</code></p>
                                    <div class="progress">
                                          <div class="progress-bar progress-bar-success" style="width: 35%"></div>
                                          <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
                                          <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Progress Bars</h4>
                            <div class="options">
                                <ul class="nav nav-tabs">
                                  <li class="active"><a href="#domcontext" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
                                  <li><a href="#codecontext" data-toggle="tab"><i class="fa fa-code"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h3>Contextual Progressbars</h3>
                                    <p>Have thinner progress bars with details.</p>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="domcontext">
                                            <div class="contextual-progress">
                                                <div class="clearfix">
                                                    <div class="progress-title">Task #1</div>
                                                    <div class="progress-percentage">25%</div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info" style="width: 25%"></div>
                                                </div>
                                            </div>
                                            <div class="contextual-progress">
                                                <div class="clearfix">
                                                    <div class="progress-title">Task #2</div>
                                                    <div class="progress-percentage">50%</div>
                                                </div>
                                                <div class="progress">
                                                  <div class="progress-bar progress-bar-primary" style="width: 50%"></div>
                                                </div>
                                            </div>
                                            <div class="contextual-progress">
                                                <div class="clearfix">
                                                    <div class="progress-title">Task #3</div>
                                                    <div class="progress-percentage">3%</div>
                                                </div>
                                                <div class="progress">
                                                  <div class="progress-bar progress-bar-warning" style="width: 3%"></div>
                                                </div>
                                            </div>
                                            <div class="contextual-progress">
                                                <div class="clearfix">
                                                    <div class="progress-title">Task #4</div>
                                                    <div class="progress-percentage">33%</div>
                                                </div>
                                                <div class="progress">
                                                  <div class="progress-bar progress-bar-danger" style="width: 33%"></div>
                                                </div>
                                            </div>
                                            <div class="contextual-progress">
                                                <div class="clearfix">
                                                    <div class="progress-title">Task #5</div>
                                                    <div class="progress-percentage">78%</div>
                                                </div>
                                                <div class="progress">
                                                  <div class="progress-bar progress-bar-success" style="width: 78%"></div>
                                                </div>
                                            </div>
                                            <div class="contextual-progress">
                                                <div class="clearfix">
                                                    <div class="progress-title">Task #6</div>
                                                    <div class="progress-percentage">44%</div>
                                                </div>
                                                <div class="progress">
                                                  <div class="progress-bar progress-bar-inverse" style="width: 44%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="codecontext">
<pre class="prettyprint linenums">
&lt;div class=&quot;contextual-progress&quot;&gt;
    &lt;div class=&quot;clearfix&quot;&gt;
        &lt;div class=&quot;progress-title&quot;&gt;Task #1&lt;/div&gt;
        &lt;div class=&quot;progress-percentage&quot;&gt;25%&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;progress&quot;&gt;
        &lt;div class=&quot;progress-bar progress-bar-info&quot; style=&quot;width: 25%&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
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