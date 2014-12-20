<?php include "header.php" ?>

<div id="page-content">
    <div id="wrap">
        <div id="page-heading">

            <ol class="breadcrumb">
              <li><a href="#">Dashboard</a></li>
              <li>UI Elements</li>
              <li class="active">Typography</li>
            </ol>

              <h1>Typography</h1>
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
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Headings</h4>
                
            </div>
            <div class="panel-body">
                <table id="demo-type-table">
                    <tbody>
                        <tr>
                            <td><h1>Heading 1</h1></td>
                            <td><small class="text-muted">Weight 300, Size 38px</small></td>
                        </tr>
                        <tr>
                            <td><h2>Heading 2</h2></td>
                            <td><small class="text-muted">Weight 300, Size 32px</small></td>
                        </tr>
                        <tr>
                            <td><h3>Heading 3</h3></td>
                            <td><small class="text-muted">Weight 300, Size 24px</small></td>
                        </tr>
                        <tr>
                            <td><h4>Heading 4</h4></td>
                            <td><small class="text-muted">Weight 400, Size 18px</small></td>
                        </tr>
                        <tr>
                            <td><h5>Heading 5</h5></td>
                            <td><small class="text-muted">Weight 400, Size 14px</small></td>
                        </tr>
                        <tr>
                            <td><h6>Heading 6</h6></td>
                            <td><small class="text-muted">Weight 400, Size 12px</small></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Body Text</h4>
                
            </div>
            <div class="panel-body">
                <code>p.lead</code> <p class="lead">Onwards to victory! </p>
                <code>p</code> <p>Ten years ago a crack commando unit was sent to prison by a military court for a crime they didn't commit.</p>
                <code>small</code> <p><small>These men promptly escaped from a maximum security stockade to the Los Angeles underground.</small> </p>
                <code>em</code> <p><em> Today, still wanted by the government, they survive as soldiers of fortune. </em> </p>
                <code>strong</code> <p><strong>If you have a problem and no one else can help, and if you can find them, maybe you can hire the A-team. </strong></p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-5">
      <div class="panel panel-primary">
          <div class="panel-heading">
              <h4>Example Address</h4>
              
          </div>
          <div class="panel-body">
              <address>
                <strong>Twitter, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
            
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
          </div>
      </div>
    </div>
    
    <div class="col-md-7">
      <div class="panel panel-primary">
          <div class="panel-heading">
              <h4>Blockquotes</h4>
              
          </div>
          <div class="panel-body">
              <blockquote>
                <p>There is only one thing in the world worse than being talked about, and that is not being talked about</p>
                <small>Oscar Wilde in <cite title="Source Title">The Picture of Dorian Grey</cite></small>
            </blockquote>
            <blockquote class="pull-right">
                <p>How glorious it is – and also how painful – to be an exception.</p>
                <small>Alfred de Musset</small>
            </blockquote>
          </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-7">
        <div class="panel panel-primary">
          <div class="panel-heading">
                <h4>Emphasis classes</h4>
          </div>
          <div class="panel-body">
            <code class="pull-right">.text-muted</code>
            <p class="text-muted">Aren’t you a little short for a stormtrooper?</p>
            <code class="pull-right">.text-primary</code>
            <p class="text-primary">That’s no moon, it’s a space station!</p>
            <code class="pull-right">.text-success</code>
            <p class="text-success">The Force is strong with this one.</p>
            <code class="pull-right">.text-info</code>
            <p class="text-info">I find your lack of faith disturbing.</p>
            <code class="pull-right">.text-warning</code>
            <p class="text-warning">These aren’t the droids you’re looking for.</p>
            <code class="pull-right">.text-danger</code>
            <p class="text-danger">May the Force be with you.</p>
          </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="panel panel-primary">
          <div class="panel-heading">
                <h4>Alignment Classes</h4>
          </div>
          <div class="panel-body">
                <p class="text-left">Left aligned text.</p>
                <p class="text-center">Center aligned text.</p>
                <p class="text-right">Right aligned text.</p>
          </div>
        </div>
    </div>
</div>


<div class="row">

        <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                    <h4>Descriptions</h4>
                    
              </div>
              <div class="panel-body">
                  <div class="row">
                      <div class="col-md-6">
                        <h3>Block Level Descriptions</h3>
                        <p>A list of terms with their associated descriptions.</p>
                          <dl>
                            <dt>Description lists</dt>
                            <dd>A description list is perfect for defining terms.</dd>
                            <dt>Euismod</dt>
                            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                            <dt>Malesuada porta</dt>
                            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                          </dl>
                      </div>
                      <div class="col-md-6">
                        <h3>Horizontal description</h3>  
                        <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side.</p>
                        <dl class="dl-horizontal">
                            <dt>Description lists</dt>
                            <dd>A description list is perfect for defining terms.</dd>
                            <dt>Euismod</dt>
                            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                            <dt>Malesuada porta</dt>
                            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                          </dl>
                      </div>
                  </div>
              </div>
            </div>
        </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading"><h4>Lists</h4></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Unordered List</h3>
                        <p>A list of items in which the order <i>does not</i> explicitly matter.</p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Officiis modi ipsum officia ad!</li>
                            <li>Atque nisi fugit repellat ratione.</li>
                            <li>Eveniet tenetur reiciendis eaque.</li>
                            <li>Aperiam accusamus quas nisi?</li>
                            <ul>
                                <li>Assumenda, ipsa hic vel sed?</li>
                                <li>Quaerat praesentium error.</li>
                                <li>Magni, excepturi nulla adipisci.</li>
                            </ul>
                            <li>Nesciunt, reprehenderit provident cupiditate atque!</li>
                            <li>Sit, nobis similique beatae aut.</li>
                            <li>Eum, debitis veniam laudantium dolor.</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Ordered List</h3>
                        <p>A list of items in which the order <i>does</i> explicitly matter (numbered list).</p>
                        <ol>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Officiis modi ipsum officia ad!</li>
                            <li>Atque nisi fugit repellat ratione.</li>
                            <li>Eveniet tenetur reiciendis eaque.</li>
                            <li>Aperiam accusamus quas nisi?</li>
                            <ol>
                                <li>Assumenda, ipsa hic vel sed?</li>
                                <li>Quaerat praesentium error.</li>
                                <li>Magni, excepturi nulla adipisci.</li>
                            </ol>
                            <li>Nesciunt, reprehenderit provident cupiditate atque!</li>
                            <li>Sit, nobis similique beatae aut.</li>
                            <li>Eum, debitis veniam laudantium dolor.</li>
                        </ol>
                    </div>
                    <div class="col-md-4">
                        <h3>Unstyled List</h3>
                        <p>A list of items with no list-style or additional left padding.</p>
                        <ul class="list-unstyled">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Officiis modi ipsum officia ad!</li>
                            <li>Atque nisi fugit repellat ratione.</li>
                            <li>Eveniet tenetur reiciendis eaque.</li>
                            <li>Aperiam accusamus quas nisi?</li>
                            <ul>
                                <li>Assumenda, ipsa hic vel sed?</li>
                                <li>Quaerat praesentium error.</li>
                                <li>Magni, excepturi nulla adipisci.</li>
                            </ul>
                            <li>Nesciunt, reprehenderit provident cupiditate atque!</li>
                            <li>Sit, nobis similique beatae aut.</li>
                            <li>Eum, debitis veniam laudantium dolor.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-danger">
          <div class="panel-heading"><h4>Codes</h4></div>
          <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <h3>Inline</h3>
                    <p>Wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>
                    <p>For example, <code>&lt;section&gt;</code> should be wrapped as inline.</p>
                </div>
                <div class="col-md-6">
                    <h3>Block</h3>
                    <p>Use <code>&lt;pre&gt;</code> for multiple lines of code.</p>
    <pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Prettify</h3>
                    <p>To add colored syntax highlight to the <code>&lt;pre&gt;</code> tag, then use the <code>prettyprint</code> class, and for line numbers add the <code>linenums</code> class.</p>
<pre class="prettyprint linenums">
&lt;div class=&quot;form-group&quot;&gt;
    &lt;label for=&quot;focusedinput&quot; class=&quot;col-xs-3 control-label&quot;&gt;Focused Input&lt;/label&gt;
    &lt;div class=&quot;col-xs-6&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;focusedinput&quot; placeholder=&quot;Default Input&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>


        </div> <!-- container -->
    </div> <!-- #wrap -->
</div> <!-- page-content -->
<?php include "footer.php" ?>