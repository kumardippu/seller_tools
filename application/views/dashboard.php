         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles" style="margin: 10px 0;">
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total RTS By All Sellers</span>
                <h2><?php echo $total_rts_count; ?></h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total RTS By You</span>
                <h2><?php echo $total_user_rts_count; ?></h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total RTS Today By All Sellers</span>
                <h2><?php echo $total_rts_count_today; ?></h2>
                <span class="sparkline_two" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span> 
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total RTS Today By You</span>
                <h2><?php echo $total_user_rts_count_today; ?></h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
            </div>
            <br />


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard_graph x_panel">
                  <div class="row x_title">
                    <div class="col-md-6">
                      <h3>Activities <small>RTS request</small></h3>
                    </div>

                   <!-- For date range
                    <div class="col-md-6">
                      <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                      </div>
                    </div>
                    -->
                  </div>
                  <div class="x_content">
                    <div class="demo-container" style="height:250px">
                      <div id="chart_plot_03" class="demo-placeholder"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">


              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2>Performance <small>On daily RTS Basis</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>-->
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="dashboard-widget-content">
                      <ul class="quick-list">
                        <li><i class="fa fa-bars"></i><a href="#">Today RTS Action</a></li>
                        <!--<li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                        <li><i class="fa fa-support"></i><a href="#">Help Desk</a> </li>
                        <li><i class="fa fa-heart"></i><a href="#">Donations</a> </li>-->
                      </ul>

                      <div class="sidebar-widget">
                        <h4>Performance</h4>
                        <input type="hidden" id="meter_limit" value="1000">
                        <input type="hidden" id="meter_value" value="<?php echo $total_rts_count_today; ?>">
                        <canvas width="150" height="80" id="chart_gauge_02" class="" style="width: 160px; height: 100px;"></canvas>
                        <div class="goal-wrapper">
                          <span class="gauge-value pull-left"></span>
                          <span id="gauge-text2" class="gauge-value pull-left"><?php echo $total_rts_count_today; ?></span>
                          <span id="goal-text2" class="goal-value pull-right">1000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 

              <div class="col-md-4 col-sm-6 col-xs-12">
               <!-- <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2>App Devices <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                       <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>-->
                     <!-- </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <h4>App Versions</h4>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>1.5.2</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>123k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>1.5.3</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>53k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>1.5.4</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>23k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>1.5.5</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>3k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>0.1.5.6</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>1k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                  </div>
                </div>-->
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->


    
<!-- Chart.js -->
<!--<script src="<?php //echo base_url('assets/vendors/Chart.js/dist/Chart.min.js')?>"></script> -->

<!-- jQuery Sparklines | tiny Bar Char -->
<!--<script src="<?php //echo base_url('assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')?>"></script> -->

<!-- morris.js -->
<!--<script src="<?php //echo base_url('assets/vendors/raphael/raphael.min.js')?>"></script>-->
<!-- Vertical progress bar widget-->
<!--<script src="<?php //echo base_url('assets/vendors/morris.js/morris.min.js')?>"></script>-->
<!-- gauge.js | Meter-->
<script src="<?php echo base_url('assets/vendors/gauge.js/dist/gauge.min.js')?>"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo base_url('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')?>"></script>
<!-- Skycons | Weather widget-->
<!--<script src="<?php // echo base_url('assets/vendors/skycons/skycons.js')?>"></script> -->
<!-- Flot | For main graph -->
<script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.js')?>"></script>
<!--<script src="<?php //echo base_url('assets/vendors/Flot/jquery.flot.pie.js')?>"></script>
<script src="<?php //echo base_url('assets/vendors/Flot/jquery.flot.time.js')?>"></script>
<script src="<?php //echo base_url('assets/vendors/Flot/jquery.flot.stack.js')?>"></script>
<script src="<?php //echo base_url('assets/vendors/Flot/jquery.flot.resize.js')?>"></script>
-->

<!-- Flot plugins -->
<!--<script src="<?php //echo base_url('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')?>"></script>
<script src="<?php //echo base_url('assets/vendors/flot-spline/js/jquery.flot.spline.min.js')?>"></script>-->
<!-- To curvical shape for the graph -->
<script src="<?php echo base_url('assets/vendors/flot.curvedlines/curvedLines.js')?>"></script>
<!-- DateJS -->
<script src="<?php echo base_url('assets/vendors/DateJS/build/date.js')?>"></script>
<!-- bootstrap-daterangepicker -->

<!--<script src="<?php //echo base_url('assets/vendors/moment/min/moment.min.js')?>"></script>
<script src="<?php //echo base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')?>"></script>-->

<script type="text/javascript">
  
  $(document).ready(function() {
    init_flot_chart();
    init_gauge();        
  }); 
  


  function init_flot_chart(){
    
    if( typeof ($.plot) === 'undefined'){ return; }
    
    console.log('init_flot_chart');

    
   // var chart_plot_02_data = [];
    <?php 
        $graph_json = json_encode($graph);
    ?>  
     var graph_data = <?php echo $graph_json; ?>;
  
   /* var chart_plot_03_data = [
      [1, 9],[2, 6],[3, 10],[4, 5], [5, 17],[6, 6],[7, 10], [8, 7],[9, 11],[10, 35],[11, 9],[12, 12],[13, 5],
      [14, 3],
      [15, 4],
      [16, 9],
      [16, 9],
      [17, 7],[18, 8],[19, 3],[20, 2],[21, 3],[22, 7],[23, 8],[24, 3],[25, 2],[26, 3],[27, 7],[28, 8],[29, 3],[30, 2],[31, 3]
    ];*/
    //console.log(chart_plot_03_data);
    chart_plot_03_data = graph_data;
  
    var chart_plot_03_settings = {
      series: {
        curvedLines: {
          apply: true,
          active: true,
          monotonicFit: true
        }
      },
      colors: ["#26B99A"],  xaxis: {
                        ticks: 30,
                        tickDecimals: 0
                    },yaxis: {
                        tickDecimals: 0
                    },
      grid: {
        borderWidth: {
          top: 0,
          right: 0,
          bottom: 1,
          left: 1
        },
        borderColor: {
          bottom: "#7F8790",
          left: "#7F8790"
        }
      }
    };
        
    
    
  if ($("#chart_plot_03").length){
    console.log('Plot3');

    $.plot($("#chart_plot_03"), [{
      label: "Current Month RTS",
      data: chart_plot_03_data,
      lines: {
        fillColor: "rgba(150, 202, 89, 0.12)"
      }, 
      points: {
        fillColor: "#fff"
      }
    }], chart_plot_03_settings);
    
  };
    
  }

  function init_gauge() {
      
    if( typeof (Gauge) === 'undefined'){ return; }
    
    console.log('init_gauge [' + $('.gauge-chart').length + ']');
    
    console.log('init_gauge');
    

      var chart_gauge_settings = {
      lines: 12,
      angle: 0,
      lineWidth: 0.4,
      pointer: {
        length: 0.75,
        strokeWidth: 0.042,
        color: '#1D212A'
      },
      limitMax: 'false',
      colorStart: '#1ABC9C',
      colorStop: '#1ABC9C',
      strokeColor: '#F0F3F3',
      generateGradient: true
    };
    
    
    if ($('#chart_gauge_01').length){ 
    
      var chart_gauge_01_elem = document.getElementById('chart_gauge_01');
      var chart_gauge_01 = new Gauge(chart_gauge_01_elem).setOptions(chart_gauge_settings);
      
    } 
    
    
    if ($('#gauge-text').length){ 
    
      chart_gauge_01.maxValue = 6000;
      chart_gauge_01.animationSpeed = 32;
      chart_gauge_01.set(3200);
      chart_gauge_01.setTextField(document.getElementById("gauge-text"));
    
    }
    
    if ($('#chart_gauge_02').length){
    
      var chart_gauge_02_elem = document.getElementById('chart_gauge_02');
      var chart_gauge_02 = new Gauge(chart_gauge_02_elem).setOptions(chart_gauge_settings);
      
    }
    
    
    if ($('#gauge-text2').length){
      meter_value = $('#meter_value').val();
      chart_gauge_02.maxValue = $('#meter_limit').val();//9000;
      chart_gauge_02.animationSpeed = 32;
      chart_gauge_02.set(parseInt(meter_value));
      chart_gauge_02.setTextField(document.getElementById("gauge-text2"));
    
    }
  
  
  }   

</script>