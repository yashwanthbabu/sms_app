<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>UI Elements</li>
                <li>Carousel</li>
            </ol>

            <h1>Carousel</h1>
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
            <div class="panel-heading"><h4>Carousel</h4></div>
            <div class="panel-body">
                <p>The slideshow below shows an example of a simple carousel plugin which you can use to cycle through elements at regular intervals</p>

      <div id="carousel-example-captions" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
          <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
          <li data-target="#carousel-example-captions" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item">
            <img src="assets/demo/images/ind_demolition.jpg" alt="Demolition">
            <div class="carousel-caption">
              <h3>First slide label</h3>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="item">
            <img src="assets/demo/images/nature_river.jpg" alt="River">
            <div class="carousel-caption">
              <h3>Second slide label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="item active">
            <img src="assets/demo/images/arch_fountain.jpg" alt="Fountain">
            <div class="carousel-caption">
              <h3>Third slide label</h3>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
          <span class="fa fa-prev"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
          <span class="fa fa-next"></span>
        </a>
      </div>



            </div>
        </div>
    </div>

</div>


</div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>