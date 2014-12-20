<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>UI Components</li>
                <li class="active">Pagers and Paginations</li>
            </ol>

            <h1>Paginations</h1>
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
                        <h4>Pagination</h4>
                        <div class="options">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#dompaginate" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
                            <li><a href="#codepaginate" data-toggle="tab"><i class="fa fa-code"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="panel-body">
                            <p>Provide pagination links for your site or app with the multi-page pagination component</p>
                            <h3>Default Pagination</h3>
                            <p>Simple, scable pagination by adding the <code>.pagination</code> class. You can also add <code>.disable</code> for unselectable links or <code>.active</code> to indicate current page</p>
                            <div class="tab-content">
                              <div class="tab-pane active" id="dompaginate">
                                <ul class="pagination">
                                  <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                  <li class="active"><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><a href="#">4</a></li>
                                  <li><a href="#">5</a></li>
                                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                              </div>
                              <div class="tab-pane" id="codepaginate">
<pre class="prettyprint linenums">
&lt;ul class=&quot;pagination&quot;&gt;
  &lt;li class=&quot;disabled&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-angle-double-left&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-angle-double-right&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
                              </div>
                            </div>

							
                            <h3>Sizing</h3>
                            <p>Add smaller or larger pagination with the <code>.pagination-lg</code> or <code>.pagination-sm</code> class</p>
                            <div>
							<p>Large <code>pagination-lg</code></p>
                                <ul class="pagination pagination-lg">
                                  <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                  <li class="active"><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><a href="#">4</a></li>
                                  <li><a href="#">5</a></li>
                                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                            <div>
							<p>Regular <code>pagination</code></p>
                                <ul class="pagination">
                                  <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                  <li class="active"><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><a href="#">4</a></li>
                                  <li><a href="#">5</a></li>
                                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                            <div>
							<p>Small <code>pagination-sm</code></p>
                                <ul class="pagination pagination-sm">
                                  <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                  <li class="active"><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><a href="#">4</a></li>
                                  <li><a href="#">5</a></li>
                                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>  
                      </div>
                    </div>
                </div>
            </div>
			<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h4>Pager</h4>
                        <ul class="options">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#dompager" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
                            <li><a href="#codepager" data-toggle="tab"><i class="fa fa-code"></i></a></li>
                          </ul>
                        </ul>
                      </div>
                      <div class="panel-body">			
							<h3>Default Pager</h3>
                            <p>Quick previous and next links for simple pagination implementations with light markup and styles</p>
                            <div class="tab-content">
                              <div class="tab-pane active" id="dompager">
                                <p>Just add the class <code>.pager</code> to a <code>ul</code></p>
                                <ul class="pager">
                                  <li><a href="#">Previous</a></li>
                                  <li><a href="#">Next</a></li>
                                </ul>
                              </div>
                              <div class="tab-pane" id="codepager">
<pre class="prettyprint linenums">
&lt;ul class=&quot;pager&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
                              </div>
                            </div>

							<br>
                            <h3>Aligned Links</h3>
                            <p>Alternatively, you can align each link to the sides by adding the <code>.previous</code> and <code>.next</code> classes to the li</p>
                            <ul class="pager">
                              <li class="previous"><a href="#"><i class="fa fa-long-arrow-left"></i> Older</a></li>
                              <li class="next"><a href="#">Newer <i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
						</div>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-md-12">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h4>Date Paginator</h4>
                  <div class="options">
                    <a href="#"><i class="fa fa-cogs"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                  <p>A jQuery plugin which takes Twitter Bootstrap's already great pagination component and injects a bit of date based magic. In the process creating a hugely simplified and modularised way of paging date based results in your application.</p>
                  <h3>Default Date Paginator</h3>
                  <p>Default initialization, with no extra options set</p>
                  <div id="datepageinate-ex1"></div>
                  <br />
                  <h3>With Event Handler (On Date Selected) <small>Try selecting a date</small></h3>
                  <p>Fired when the selected date changes. You can bind to it using either the callback handler or the standard jQuery .on method</p>
                  <div id="datepageinate-ex2"></div>
                  <br />
                  <h3>Large Date Paginator</h3>
                  <p>As easy as setting <code>{size: "large"}</code></p>
                  <div id="datepageinate-ex3"></div>
                  <br />
                  <h3>Small Date Paginator</h3>
                  <p>Simply set <code>{size: "small"}</code></p>
                  <div id="datepageinate-ex4"></div>
                </div>
              </div>
            </div>
        </div>

        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>