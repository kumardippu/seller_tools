<!-- Datatables -->
<link href="<?php echo base_url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')?>" rel="stylesheet">

 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
  <div class="row top_tiles" style="margin: 10px 0;min-height: 600px;">

<div class="col-md-12 col-sm-12 col-xs-12" >

     <div class="x_content">
      <h2>RTS(Ready To Ship) Form<small></small></h2>
      <a href="<?php echo base_url('order/pending');?>" class="btn btn-success navbar-right mr-10"><i class="fa fa-refresh mr-5"></i>Sync Data</a>
      <?php 
           $form_attributes = array('class' => 'form-horizontal form-label-left', 'id' => 'rts_froms','name' => 'rts_form');
          echo form_open('rts',$form_attributes);
      ?>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Enter Tracking No</label>
          <div class="col-md-6 col-sm-6 col-xs-6">

            <textarea class="resizable_textarea form-control" name="tn" placeholder="Please scan/input Tracking No here." required="" rows="7" ></textarea>
          </div>
      </div>
      
      <div class="form-group col-md-12">
      <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
        <span >Please scan/input Tracking No here as Example shown below.(Note: It should be on row basis) <br>LZD4100005594073MY<br>LZD4100005594323MY</span>
        </div>
      </div>

        <div class="form-group col-md-12">    
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <input type="submit" value="Submit" class="btn btn-success">
          </div>
        </div>
       <?php echo form_close();?>
    </div>
</div>

  <?php if(isset($show_result) && $show_result){ ?>
      <div class="col-md-12 col-sm-12 col-xs-12" style="">
        <div class="x_panel">
          <div class="x_title">
            <h2>RTS Action Response<small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
              
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <?php //print_r($orders); exit;?>
            <p class="text-muted font-13 m-b-30">
              You can Download / Print the report for future refrence
            </p>
              
            <table id="datatable-rts" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Order No</th>
                  <th>Tracking No</th>
                  <th>Response</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php 
                    foreach ($results as $val) {
                        echo "<tr>";
                        echo "<td>".$val['order_on']."</td>";
                        echo "<td>".$val['tn']."</td>";
                        echo "<td>".$val['action']."</td>";
                        echo "</tr>";
                    }
                ?>

              </tbody>
            </table>
  
  
          </div>
        </div>
      </div>

<?php } ?>

  </div>


</div>

</div>

<!-- Datatables -->
<script src="<?php echo base_url('assets/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')?>"></script>

<script type="text/javascript">

$(document).ready(function() {
  init_DataTables();       
}); 
/* DATA TABLES */

function init_DataTables() {

  
  console.log('run_datatables');
  
  if( typeof ($.fn.DataTable) === 'undefined'){ return; }

  var handleDataTableButtons = function() {
    if ($("#datatable-rts").length) {
    $("#datatable-rts").DataTable({
      dom: "Bfrtip",
      buttons: [
      {
        extend: "copy",
        className: "btn-sm"
      },
      {
        extend: "csv",
        className: "btn-sm"
      },
      {
        extend: "excel",
        className: "btn-sm"
      },
      {
        extend: "pdfHtml5",
        className: "btn-sm"
      },
      {
        extend: "print",
        className: "btn-sm"
      },
      ],
      responsive: true
    });
    }
  };

  TableManageButtons = function() {
    "use strict";
    return {
    init: function() {
      handleDataTableButtons();
    }
    };
  }();
  TableManageButtons.init();
  
};
</script>