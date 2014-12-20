<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>UI Components</li>
                <li class="active">Breadcrumbs</li>
            </ol>

            <h1>Breadcrumbs</h1>
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
                            <h4>Breadcrumbs</h4>
                            <div class="options">
                            <ul class="nav nav-tabs">
                              <li class="active"><a href="#domwell" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
                              <li><a href="#codewell" data-toggle="tab"><i class="fa fa-code"></i></a></li>
                            </ul>
                        </div>
                      </div>
                      <div class="panel-body">
                        <p>Indicate the current page's location within a navigational hierarchy. Just add <code>.breadcrumb</code> to any ordered or un-ordered list</p>
                        <div class="tab-content">
                            <div class="tab-pane active" id="domwell">
                                <div class="demo-example">
                                    <ol class="breadcrumb">
                                      <li class="active"><a href="#">Home</a></li>
                                    </ol>
                                    <ol class="breadcrumb">
                                      <li><a href="#">Home</a></li>
                                      <li class="active">Library</li>
                                    </ol>
                                    <ol class="breadcrumb">
                                      <li><a href="#">Home</a></li>
                                      <li><a href="#">Library</a></li>
                                      <li class="active">Data</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="tab-pane" id="codewell">
<pre class="prettyprint linenums">
&lt;ol class=&quot;breadcrumb&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;active&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
</pre>
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