<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>Advanced Tables</li>
                <li class="active">Responsive Tables</li>
            </ol>

            <h1>Responsive Tables</h1>
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
    <div class="col-sm-12">
        <div class="alert alert-info alert-dismissable ">
            <i class="fa fa-info-circle"></i> Resize the browser window to see the responive tables in action!
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        </div>

        <div class="panel panel-sky">
            <div class="panel-heading">
                <h4>Horizontal Tables</h4>
          </div>
          <div class="panel-body">
            <p>Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code> to make them scroll horizontally up to small devices (under 768px)</p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="padding-right:100px">Country</th>
                            <th>Population (1000s)</th>
                            <th>Adults (1000s)</th>
                            <th>Share of world population (%)</th>
                            <th>Wealth per capita</th>
                            <th>Share of world wealth (%)</th>
                            <th>GDP per capita</th>
                            <th>Share of world GDP (%)</th>
                            <th>Wealth Gini</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="left"><i>World</i></td>
                            <td>6085576</td>
                            <td>3697511</td>
                            <td>100.00</td>
                            <td>26416</td>
                            <td>100.00</td>
                            <td>7675</td>
                            <td>100.00</td>
                            <td>0.804</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/23px-Flag_of_the_United_States.svg.png" width="23" height="12" srcset="//upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/35px-Flag_of_the_United_States.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/46px-Flag_of_the_United_States.svg.png 2x">&nbsp;</span>United States</a></td>
                            <td>284154</td>
                            <td>202865</td>
                            <td>4.67</td>
                            <td>143727</td>
                            <td>25.40</td>
                            <td>35619</td>
                            <td>21.67</td>
                            <td>0.801</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/23px-Flag_of_Japan.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/35px-Flag_of_Japan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/45px-Flag_of_Japan.svg.png 2x">&nbsp;</span>Japan</td>
                            <td>127034</td>
                            <td>100933</td>
                            <td>2.09</td>
                            <td>124858</td>
                            <td>9.86</td>
                            <td>25924</td>
                            <td>7.05</td>
                            <td>0.547</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/23px-Flag_of_the_People%27s_Republic_of_China.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/35px-Flag_of_the_People%27s_Republic_of_China.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/45px-Flag_of_the_People%27s_Republic_of_China.svg.png 2x">&nbsp;</span>China</td>
                            <td>1251788</td>
                            <td>842063</td>
                            <td>20.57</td>
                            <td>11267</td>
                            <td>8.77</td>
                            <td>3844</td>
                            <td>10.30</td>
                            <td>0.550</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/23px-Flag_of_the_United_Kingdom.svg.png" width="23" height="12" srcset="//upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/35px-Flag_of_the_United_Kingdom.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/46px-Flag_of_the_United_Kingdom.svg.png 2x">&nbsp;</span>United Kingdom</a></td>
                            <td>58670</td>
                            <td>43871</td>
                            <td>0.96</td>
                            <td>128959</td>
                            <td>4.71</td>
                            <td>24252</td>
                            <td>3.09</td>
                            <td>0.697</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/23px-Flag_of_Germany.svg.png" width="23" height="14" srcset="//upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/35px-Flag_of_Germany.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/46px-Flag_of_Germany.svg.png 2x">&nbsp;</span>Germany</td>
                            <td>82344</td>
                            <td>64810</td>
                            <td>1.35</td>
                            <td>90768</td>
                            <td>4.65</td>
                            <td>23917</td>
                            <td>4.22</td>
                            <td>0.667</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/23px-Flag_of_Italy.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/35px-Flag_of_Italy.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/45px-Flag_of_Italy.svg.png 2x">&nbsp;</span>Italy</td>
                            <td>57715</td>
                            <td>46416</td>
                            <td>0.95</td>
                            <td>120897</td>
                            <td>4.34</td>
                            <td>22876</td>
                            <td>2.83</td>
                            <td>0.609</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/23px-Flag_of_India.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/35px-Flag_of_India.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/45px-Flag_of_India.svg.png 2x">&nbsp;</span>India</td>
                            <td>1021084</td>
                            <td>570595</td>
                            <td>16.78</td>
                            <td>6513</td>
                            <td>4.14</td>
                            <td>2684</td>
                            <td>5.87</td>
                            <td>0.669</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/23px-Flag_of_France.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/35px-Flag_of_France.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/45px-Flag_of_France.svg.png 2x">&nbsp;</span>France</td>
                            <td>59278</td>
                            <td>44358</td>
                            <td>0.97</td>
                            <td>94557</td>
                            <td>3.49</td>
                            <td>23614</td>
                            <td>3.00</td>
                            <td>0.730</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/23px-Flag_of_Spain.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/35px-Flag_of_Spain.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/45px-Flag_of_Spain.svg.png 2x">&nbsp;</span>Spain</td>
                            <td>40717</td>
                            <td>32165</td>
                            <td>0.67</td>
                            <td>93086</td>
                            <td>2.36</td>
                            <td>19037</td>
                            <td>1.66</td>
                            <td>0.570</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/22px-Flag_of_Brazil.svg.png" width="22" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/33px-Flag_of_Brazil.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/43px-Flag_of_Brazil.svg.png 2x">&nbsp;</span>Brazil</td>
                            <td>173858</td>
                            <td>104213</td>
                            <td>2.86</td>
                            <td>19676</td>
                            <td>2.13</td>
                            <td>7745</td>
                            <td>2.88</td>
                            <td>0.784</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/c/cf/Flag_of_Canada.svg/23px-Flag_of_Canada.svg.png" width="23" height="12" srcset="//upload.wikimedia.org/wikipedia/en/thumb/c/cf/Flag_of_Canada.svg/35px-Flag_of_Canada.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/c/cf/Flag_of_Canada.svg/46px-Flag_of_Canada.svg.png 2x">&nbsp;</span>Canada</td>
                            <td>30689</td>
                            <td>22764</td>
                            <td>0.50</td>
                            <td>89252</td>
                            <td>1.70</td>
                            <td>28731</td>
                            <td>1.89</td>
                            <td>0.688</td>
                        </tr>
                    </tbody>
                    <caption>List of countries by distribution wealth</caption>
                </table>
            </div>
          </div>
        </div>
    </div>
</div>




<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-sky">
            <div class="panel-heading">
                <h4>Flip Scroll</h4>
                
          </div>
          <div class="panel-body">
            <p>Wrap your <code>.table</code> in <code>.table-flipscroll</code> to push headers on the right and making them fixed while scrolling the body</p>
            <div class="table-flipscroll">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="padding-right:100px">Country</th>
                            <th>Population (1000s)</th>
                            <th>Adults (1000s)</th>
                            <th>Share of world population (%)</th>
                            <th>Wealth per capita</th>
                            <th>Share of world wealth (%)</th>
                            <th>GDP per capita</th>
                            <th>Share of world GDP (%)</th>
                            <th>Wealth Gini</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="left"><i>World</i></td>
                            <td>6085576</td>
                            <td>3697511</td>
                            <td>100.00</td>
                            <td>26416</td>
                            <td>100.00</td>
                            <td>7675</td>
                            <td>100.00</td>
                            <td>0.804</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/23px-Flag_of_the_United_States.svg.png" width="23" height="12" srcset="//upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/35px-Flag_of_the_United_States.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/46px-Flag_of_the_United_States.svg.png 2x">&nbsp;</span>United States</a></td>
                            <td>284154</td>
                            <td>202865</td>
                            <td>4.67</td>
                            <td>143727</td>
                            <td>25.40</td>
                            <td>35619</td>
                            <td>21.67</td>
                            <td>0.801</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/23px-Flag_of_Japan.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/35px-Flag_of_Japan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/45px-Flag_of_Japan.svg.png 2x">&nbsp;</span>Japan</td>
                            <td>127034</td>
                            <td>100933</td>
                            <td>2.09</td>
                            <td>124858</td>
                            <td>9.86</td>
                            <td>25924</td>
                            <td>7.05</td>
                            <td>0.547</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/23px-Flag_of_the_People%27s_Republic_of_China.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/35px-Flag_of_the_People%27s_Republic_of_China.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/45px-Flag_of_the_People%27s_Republic_of_China.svg.png 2x">&nbsp;</span>China</td>
                            <td>1251788</td>
                            <td>842063</td>
                            <td>20.57</td>
                            <td>11267</td>
                            <td>8.77</td>
                            <td>3844</td>
                            <td>10.30</td>
                            <td>0.550</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/23px-Flag_of_the_United_Kingdom.svg.png" width="23" height="12" srcset="//upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/35px-Flag_of_the_United_Kingdom.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/46px-Flag_of_the_United_Kingdom.svg.png 2x">&nbsp;</span>United Kingdom</a></td>
                            <td>58670</td>
                            <td>43871</td>
                            <td>0.96</td>
                            <td>128959</td>
                            <td>4.71</td>
                            <td>24252</td>
                            <td>3.09</td>
                            <td>0.697</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/23px-Flag_of_Germany.svg.png" width="23" height="14" srcset="//upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/35px-Flag_of_Germany.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/46px-Flag_of_Germany.svg.png 2x">&nbsp;</span>Germany</td>
                            <td>82344</td>
                            <td>64810</td>
                            <td>1.35</td>
                            <td>90768</td>
                            <td>4.65</td>
                            <td>23917</td>
                            <td>4.22</td>
                            <td>0.667</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/23px-Flag_of_Italy.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/35px-Flag_of_Italy.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/45px-Flag_of_Italy.svg.png 2x">&nbsp;</span>Italy</td>
                            <td>57715</td>
                            <td>46416</td>
                            <td>0.95</td>
                            <td>120897</td>
                            <td>4.34</td>
                            <td>22876</td>
                            <td>2.83</td>
                            <td>0.609</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/23px-Flag_of_India.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/35px-Flag_of_India.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/45px-Flag_of_India.svg.png 2x">&nbsp;</span>India</td>
                            <td>1021084</td>
                            <td>570595</td>
                            <td>16.78</td>
                            <td>6513</td>
                            <td>4.14</td>
                            <td>2684</td>
                            <td>5.87</td>
                            <td>0.669</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/23px-Flag_of_France.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/35px-Flag_of_France.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/45px-Flag_of_France.svg.png 2x">&nbsp;</span>France</td>
                            <td>59278</td>
                            <td>44358</td>
                            <td>0.97</td>
                            <td>94557</td>
                            <td>3.49</td>
                            <td>23614</td>
                            <td>3.00</td>
                            <td>0.730</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/23px-Flag_of_Spain.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/35px-Flag_of_Spain.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/45px-Flag_of_Spain.svg.png 2x">&nbsp;</span>Spain</td>
                            <td>40717</td>
                            <td>32165</td>
                            <td>0.67</td>
                            <td>93086</td>
                            <td>2.36</td>
                            <td>19037</td>
                            <td>1.66</td>
                            <td>0.570</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/22px-Flag_of_Brazil.svg.png" width="22" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/33px-Flag_of_Brazil.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/43px-Flag_of_Brazil.svg.png 2x">&nbsp;</span>Brazil</td>
                            <td>173858</td>
                            <td>104213</td>
                            <td>2.86</td>
                            <td>19676</td>
                            <td>2.13</td>
                            <td>7745</td>
                            <td>2.88</td>
                            <td>0.784</td>
                        </tr>

                        <tr>
                            <td align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/c/cf/Flag_of_Canada.svg/23px-Flag_of_Canada.svg.png" width="23" height="12" srcset="//upload.wikimedia.org/wikipedia/en/thumb/c/cf/Flag_of_Canada.svg/35px-Flag_of_Canada.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/c/cf/Flag_of_Canada.svg/46px-Flag_of_Canada.svg.png 2x">&nbsp;</span>Canada</td>
                            <td>30689</td>
                            <td>22764</td>
                            <td>0.50</td>
                            <td>89252</td>
                            <td>1.70</td>
                            <td>28731</td>
                            <td>1.89</td>
                            <td>0.688</td>
                        </tr>
                    </tbody>
                    <caption>List of countries by distribution wealth</caption>
                </table>
            </div>
          </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-sky">
            <div class="panel-heading">
                <h4>Vertical Tables</h4>
                <div class="options">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#domvertical" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
                      <li><a href="#codevertical" data-toggle="tab"><i class="fa fa-code"></i></a></li>
                    </ul>
                </div>
          </div>
          <div class="panel-body">
            <p>Wrap your <code>.table</code> in a <code>.table-vertical</code> for a vertial layout. Note that all your <code>tr</code> must carry a <code>data-title</code> for this to work</p>
            <div class="tab-content">
                <div class="tab-pane active" id="domvertical">
                    <div class="table-vertical">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="padding-right:100px">Country</th>
                                    <th>Population (1000s)</th>
                                    <th>Adults (1000s)</th>
                                    <th>Share of world population (%)</th>
                                    <th>Wealth per capita</th>
                                    <th>Share of world wealth (%)</th>
                                    <th>GDP per capita</th>
                                    <th>Share of world GDP (%)</th>
                                    <th>Wealth Gini</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="left" data-title="Country"><i>World</i></td>
                                    <td data-title="Population (1000s)">6085576</td>
                                    <td data-title="Adults (1000s)">3697511</td>
                                    <td data-title="Share of world population (%)">100.00</td>
                                    <td data-title="Wealth per capita">26416</td>
                                    <td data-title="Share of world wealth (%)">100.00</td>
                                    <td data-title="GDP per capita">7675</td>
                                    <td data-title="Share of world GDP (%)">100.00</td>
                                    <td data-title="Wealth Gini">0.804</td>
                                </tr>

                                <tr>
                                    <td data-title="Country" align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/23px-Flag_of_the_United_States.svg.png" width="23" height="12" srcset="//upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/35px-Flag_of_the_United_States.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/46px-Flag_of_the_United_States.svg.png 2x">&nbsp;</span>United States</a></td>
                                    <td data-title="Population (1000s)">284154</td>
                                    <td data-title="Adults (1000s)">202865</td>
                                    <td data-title="Share of world population (%)">4.67</td>
                                    <td data-title="Wealth per capita">143727</td>
                                    <td data-title="Share of world wealth (%)">25.40</td>
                                    <td data-title="GDP per capita">35619</td>
                                    <td data-title="Share of world GDP (%)">21.67</td>
                                    <td data-title="Wealth Gini">0.801</td>
                                </tr>

                                <tr>
                                    <td data-title="Country" align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/23px-Flag_of_Japan.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/35px-Flag_of_Japan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/45px-Flag_of_Japan.svg.png 2x">&nbsp;</span>Japan</td>
                                    <td data-title="Population (1000s)">127034</td>
                                    <td data-title="Adults (1000s)">100933</td>
                                    <td data-title="Share of world population (%)">2.09</td>
                                    <td data-title="Wealth per capita">124858</td>
                                    <td data-title="Share of world wealth (%)">9.86</td>
                                    <td data-title="GDP per capita">25924</td>
                                    <td data-title="Share of world GDP (%)">7.05</td>
                                    <td data-title="Wealth Gini">0.547</td>
                                </tr>

                                <tr>
                                    <td data-title="Country" align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/23px-Flag_of_the_People%27s_Republic_of_China.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/35px-Flag_of_the_People%27s_Republic_of_China.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/45px-Flag_of_the_People%27s_Republic_of_China.svg.png 2x">&nbsp;</span>China</td>
                                    <td data-title="Population (1000s)">1251788</td>
                                    <td data-title="Adults (1000s)">842063</td>
                                    <td data-title="Share of world population (%)">20.57</td>
                                    <td data-title="Wealth per capita">11267</td>
                                    <td data-title="Share of world wealth (%)">8.77</td>
                                    <td data-title="GDP per capita">3844</td>
                                    <td data-title="Share of world GDP (%)">10.30</td>
                                    <td data-title="Wealth Gini">0.550</td>
                                </tr>

                                <tr>
                                    <td data-title="Country" align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/23px-Flag_of_the_United_Kingdom.svg.png" width="23" height="12" srcset="//upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/35px-Flag_of_the_United_Kingdom.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/46px-Flag_of_the_United_Kingdom.svg.png 2x">&nbsp;</span>United Kingdom</a></td>
                                    <td data-title="Population (1000s)">58670</td>
                                    <td data-title="Adults (1000s)">43871</td>
                                    <td data-title="Share of world population (%)">0.96</td>
                                    <td data-title="Wealth per capita">128959</td>
                                    <td data-title="Share of world wealth (%)">4.71</td>
                                    <td data-title="GDP per capita">24252</td>
                                    <td data-title="Share of world GDP (%)">3.09</td>
                                    <td data-title="Wealth Gini">0.697</td>
                                </tr>

                                <tr>
                                    <td data-title="Country" align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/23px-Flag_of_Germany.svg.png" width="23" height="14" srcset="//upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/35px-Flag_of_Germany.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/46px-Flag_of_Germany.svg.png 2x">&nbsp;</span>Germany</td>
                                    <td data-title="Population (1000s)">82344</td>
                                    <td data-title="Adults (1000s)">64810</td>
                                    <td data-title="Share of world population (%)">1.35</td>
                                    <td data-title="Wealth per capita">90768</td>
                                    <td data-title="Share of world wealth (%)">4.65</td>
                                    <td data-title="GDP per capita">23917</td>
                                    <td data-title="Share of world GDP (%)">4.22</td>
                                    <td data-title="Wealth Gini">0.667</td>
                                </tr>

                                <tr>
                                    <td data-title="Country" align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/23px-Flag_of_Italy.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/35px-Flag_of_Italy.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/45px-Flag_of_Italy.svg.png 2x">&nbsp;</span>Italy</td>
                                    <td data-title="Population (1000s)">57715</td>
                                    <td data-title="Adults (1000s)">46416</td>
                                    <td data-title="Share of world population (%)">0.95</td>
                                    <td data-title="Wealth per capita">120897</td>
                                    <td data-title="Share of world wealth (%)">4.34</td>
                                    <td data-title="GDP per capita">22876</td>
                                    <td data-title="Share of world GDP (%)">2.83</td>
                                    <td data-title="Wealth Gini">0.609</td>
                                </tr>

                                <tr>
                                    <td data-title="Country" align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/23px-Flag_of_India.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/35px-Flag_of_India.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/45px-Flag_of_India.svg.png 2x">&nbsp;</span>India</td>
                                    <td data-title="Population (1000s)">1021084</td>
                                    <td data-title="Adults (1000s)">570595</td>
                                    <td data-title="Share of world population (%)">16.78</td>
                                    <td data-title="Wealth per capita">6513</td>
                                    <td data-title="Share of world wealth (%)">4.14</td>
                                    <td data-title="GDP per capita">2684</td>
                                    <td data-title="Share of world GDP (%)">5.87</td>
                                    <td data-title="Wealth Gini">0.669</td>
                                </tr>

                                <tr>
                                    <td data-title="Country" align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/23px-Flag_of_France.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/35px-Flag_of_France.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/45px-Flag_of_France.svg.png 2x">&nbsp;</span>France</td>
                                    <td data-title="Population (1000s)">59278</td>
                                    <td data-title="Adults (1000s)">44358</td>
                                    <td data-title="Share of world population (%)">0.97</td>
                                    <td data-title="Wealth per capita">94557</td>
                                    <td data-title="Share of world wealth (%)">3.49</td>
                                    <td data-title="GDP per capita">23614</td>
                                    <td data-title="Share of world GDP (%)">3.00</td>
                                    <td data-title="Wealth Gini">0.730</td>
                                </tr>

                                <tr>
                                    <td data-title="Country" align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/23px-Flag_of_Spain.svg.png" width="23" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/35px-Flag_of_Spain.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/45px-Flag_of_Spain.svg.png 2x">&nbsp;</span>Spain</td>
                                    <td data-title="Population (1000s)">40717</td>
                                    <td data-title="Adults (1000s)">32165</td>
                                    <td data-title="Share of world population (%)">0.67</td>
                                    <td data-title="Wealth per capita">93086</td>
                                    <td data-title="Share of world wealth (%)">2.36</td>
                                    <td data-title="GDP per capita">19037</td>
                                    <td data-title="Share of world GDP (%)">1.66</td>
                                    <td data-title="Wealth Gini">0.570</td>
                                </tr>

                                <tr>
                                    <td data-title="Country" align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/22px-Flag_of_Brazil.svg.png" width="22" height="15" srcset="//upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/33px-Flag_of_Brazil.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/43px-Flag_of_Brazil.svg.png 2x">&nbsp;</span>Brazil</td>
                                    <td data-title="Population (1000s)">173858</td>
                                    <td data-title="Adults (1000s)">104213</td>
                                    <td data-title="Share of world population (%)">2.86</td>
                                    <td data-title="Wealth per capita">19676</td>
                                    <td data-title="Share of world wealth (%)">2.13</td>
                                    <td data-title="GDP per capita">7745</td>
                                    <td data-title="Share of world GDP (%)">2.88</td>
                                    <td data-title="Wealth Gini">0.784</td>
                                </tr>

                                <tr>
                                    <td data-title="Country" align="left"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/c/cf/Flag_of_Canada.svg/23px-Flag_of_Canada.svg.png" width="23" height="12" srcset="//upload.wikimedia.org/wikipedia/en/thumb/c/cf/Flag_of_Canada.svg/35px-Flag_of_Canada.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/c/cf/Flag_of_Canada.svg/46px-Flag_of_Canada.svg.png 2x">&nbsp;</span>Canada</td>
                                    <td data-title="Population (1000s)">30689</td>
                                    <td data-title="Adults (1000s)">22764</td>
                                    <td data-title="Share of world population (%)">0.50</td>
                                    <td data-title="Wealth per capita">89252</td>
                                    <td data-title="Share of world wealth (%)">1.70</td>
                                    <td data-title="GDP per capita">28731</td>
                                    <td data-title="Share of world GDP (%)">1.89</td>
                                    <td data-title="Wealth Gini">0.688</td>
                                </tr>
                            </tbody>
                            <caption>List of countries by distribution wealth</caption>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="codevertical">
<pre class="prettyprint linenums">
&lt;div class=&quot;table-vertical&quot;&gt;
  &lt;table class=&quot;table table-striped&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th style=&quot;padding-right:100px&quot;&gt;Country&lt;/th&gt;
        &lt;th&gt;Population (1000s)&lt;/th&gt;
        &lt;th&gt;Adults (1000s)&lt;/th&gt;
        &lt;th&gt;Share of world population (%)&lt;/th&gt;
        &lt;th&gt;Wealth per capita&lt;/th&gt;
        &lt;th&gt;Share of world wealth (%)&lt;/th&gt;
        &lt;th&gt;GDP per capita&lt;/th&gt;
        &lt;th&gt;Share of world GDP (%)&lt;/th&gt;
        &lt;th&gt;Wealth Gini&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;td align=&quot;left&quot; data-title=&quot;Country&quot;&gt;&lt;i&gt;World&lt;/i&gt;&lt;/td&gt;
        &lt;td data-title=&quot;Population (1000s)&quot;&gt;6085576&lt;/td&gt;
        &lt;td data-title=&quot;Adults (1000s)&quot;&gt;3697511&lt;/td&gt;
        &lt;td data-title=&quot;Share of world population (%)&quot;&gt;100.00&lt;/td&gt;
        &lt;td data-title=&quot;Wealth per capita&quot;&gt;26416&lt;/td&gt;
        &lt;td data-title=&quot;Share of world wealth (%)&quot;&gt;100.00&lt;/td&gt;
        &lt;td data-title=&quot;GDP per capita&quot;&gt;7675&lt;/td&gt;
        &lt;td data-title=&quot;Share of world GDP (%)&quot;&gt;100.00&lt;/td&gt;
        &lt;td data-title=&quot;Wealth Gini&quot;&gt;0.804&lt;/td&gt;
      &lt;/tr&gt;
      ....
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;
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