@extends('admin')

@section('content')

<section id="main-content">
	  <section class="wrapper">
	      <!--state overview start-->
	      <div class="row state-overview">
	          <div class="col-lg-3 col-sm-6">
	              <section class="panel">
	                  <div class="symbol terques">
	                      <i class="fa fa-user"></i>
	                  </div>
	                  <div class="value">
	                      <h1 class="count">
	                          0
	                      </h1>
	                      <p>New Users</p>
	                  </div>
	              </section>
	          </div>
	          <div class="col-lg-3 col-sm-6">
	              <section class="panel">
	                  <div class="symbol red">
	                      <i class="fa fa-tags"></i>
	                  </div>
	                  <div class="value">
	                      <h1 class=" count2">
	                          0
	                      </h1>
	                      <p>Sales</p>
	                  </div>
	              </section>
	          </div>
	          <div class="col-lg-3 col-sm-6">
	              <section class="panel">
	                  <div class="symbol yellow">
	                      <i class="fa fa-shopping-cart"></i>
	                  </div>
	                  <div class="value">
	                      <h1 class=" count3">
	                          0
	                      </h1>
	                      <p>New Order</p>
	                  </div>
	              </section>
	          </div>
	          <div class="col-lg-3 col-sm-6">
	              <section class="panel">
	                  <div class="symbol blue">
	                      <i class="fa fa-bar-chart-o"></i>
	                  </div>
	                  <div class="value">
	                      <h1 class=" count4">
	                          0
	                      </h1>
	                      <p>Total Profit</p>
	                  </div>
	              </section>
	          </div>
	      </div>
	      <!--state overview end-->

	      <div class="row">
	          <div class="col-lg-8">
	              <!--custom chart start-->
	              <div class="border-head">
	                  <h3>Earning Graph</h3>
	              </div>
	              <div class="custom-bar-chart">
	                  <ul class="y-axis">
	                      <li><span>100</span></li>
	                      <li><span>80</span></li>
	                      <li><span>60</span></li>
	                      <li><span>40</span></li>
	                      <li><span>20</span></li>
	                      <li><span>0</span></li>
	                  </ul>
	                  <div class="bar">
	                      <div class="title">JAN</div>
	                      <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
	                  </div>
	                  <div class="bar ">
	                      <div class="title">FEB</div>
	                      <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
	                  </div>
	                  <div class="bar ">
	                      <div class="title">MAR</div>
	                      <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
	                  </div>
	                  <div class="bar ">
	                      <div class="title">APR</div>
	                      <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
	                  </div>
	                  <div class="bar">
	                      <div class="title">MAY</div>
	                      <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
	                  </div>
	                  <div class="bar ">
	                      <div class="title">JUN</div>
	                      <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
	                  </div>
	                  <div class="bar">
	                      <div class="title">JUL</div>
	                      <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>
	                  </div>
	                  <div class="bar ">
	                      <div class="title">AUG</div>
	                      <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
	                  </div>
	                  <div class="bar ">
	                      <div class="title">SEP</div>
	                      <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
	                  </div>
	                  <div class="bar ">
	                      <div class="title">OCT</div>
	                      <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
	                  </div>
	                  <div class="bar ">
	                      <div class="title">NOV</div>
	                      <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
	                  </div>
	                  <div class="bar ">
	                      <div class="title">DEC</div>
	                      <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
	                  </div>
	              </div>
	              <!--custom chart end-->
	          </div>
	          <div class="col-lg-4">
	              <!--new earning start-->
	              <div class="panel terques-chart">
	                  <div class="panel-body chart-texture">
	                      <div class="chart">
	                          <div class="heading">
	                              <span>Friday</span>
	                              <strong>$ 57,00 | 15%</strong>
	                          </div>
	                          <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
	                      </div>
	                  </div>
	                  <div class="chart-tittle">
	                      <span class="title">New Earning</span>
	                      <span class="value">
	                          <a href="#" class="active">Market</a>
	                          |
	                          <a href="#">Referal</a>
	                          |
	                          <a href="#">Online</a>
	                      </span>
	                  </div>
	              </div>
	              <!--new earning end-->

	              <!--total earning start-->
	              <div class="panel green-chart">
	                  <div class="panel-body">
	                      <div class="chart">
	                          <div class="heading">
	                              <span>June</span>
	                              <strong>23 Days | 65%</strong>
	                          </div>
	                          <div id="barchart"></div>
	                      </div>
	                  </div>
	                  <div class="chart-tittle">
	                      <span class="title">Total Earning</span>
	                      <span class="value">$, 76,54,678</span>
	                  </div>
	              </div>
	              <!--total earning end-->
	          </div>
	      </div>


	  </section>
</section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('backend/js/jquery.js') }}"></script>
    <script src="{{ asset('backend/js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/jquery.sparkline.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
    <script src="{{ asset('backend/js/owl.carousel.js') }}" ></script>
    <script src="{{ asset('backend/js/jquery.customSelect.min.js') }}" ></script>
    <script src="{{ asset('backend/js/respond.min.js') }}" ></script>

    <!--common script for all pages-->
    <script src="{{ asset('backend/js/common-scripts.js') }}"></script>

    <!--script for this page-->
    <script src="{{ asset('backend/js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('backend/js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('backend/js/count.js') }}"></script>



@endsection