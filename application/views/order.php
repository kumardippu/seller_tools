<!-- Datatables -->
<link href="<?php echo base_url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php //echo base_url('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php //echo base_url('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')?>" rel="stylesheet">

 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
  <div class="row top_tiles" style="margin: 10px 0;min-height: 600px;">
<div class="col-md-12 col-sm-12 col-xs-12" style="">
        <div class="x_panel">
          <div class="x_title">
            <h2>Pending Orders<small>Liable for RTS only</small></h2>
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
            
            <a href="<?php echo base_url('rts');?>" class="btn btn-success navbar-right">RTS Action</a>
            <a href="<?php echo base_url('order/pending');?>" class="btn btn-success navbar-right mr-10"><i class="fa fa-refresh mr-5"></i>Sync Data</a>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <?php //print_r($orders); exit;?>
            <p class="text-muted font-13 m-b-30">
              Now you can get only 100 order at once in this list
            </p>
              
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Order No</th>
                  <th>Order ID</th>
                  <th>Item ID</th>
                  <th>Tracking No</th>
                  <th>Delivery Type</th>
                  <th>Shipping Provider</th>
                  <!--<th>Status</th>
                  <th>Extn.</th>
                  <th>E-mail</th>-->
                </tr>
              </thead>
              <tbody>
                <?php 
                    foreach ($orders as $val) {
                        echo "<tr>";
                        echo "<td>".$val['order_no']."</td>";
                        echo "<td>".$val['order_id']."</td>";
                        echo "<td>".$val['item_id']."</td>";
                        echo "<td>".$val['tracking_no']."</td>";

                        echo "<td>".$val['delivery_type']."</td>";
                        echo "<td>".$val['shipping_provider']."</td>";
                        echo "</tr>";
                    }

                ?>

              </tbody>
            </table>
  
  
          </div>
        </div>
      </div>
  </div>


</div>

</div>

<!-- Datatables -->
<script src="<?php echo base_url('assets/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')?>"></script>
<!--<script src="<?php //echo base_url('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js')?>"></script>-->
<script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
<!--<script src="<?php //echo base_url('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')?>"></script>
<script src="<?php //echo base_url('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')?>"></script>-->
<script src="<?php echo base_url('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')?>"></script>
<!--<script src="<?php //echo base_url('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')?>"></script>
<script src="<?php //echo base_url('assets/vendors/jszip/dist/jszip.min.js')?>"></script>
<script src="<?php //echo base_url('assets/vendors/pdfmake/build/pdfmake.min.js')?>"></script>
<script src="<?php //echo base_url('assets/vendors/pdfmake/build/vfs_fonts.js')?>"></script>  -->  

<script type="text/javascript">
$(document).ready(function() {
  init_DataTables();       
}); 
/* DATA TABLES */

function init_DataTables() {

  
  console.log('run_datatables');
  
  if( typeof ($.fn.DataTable) === 'undefined'){ return; }
  console.log('init_DataTables');
  
  //$('#datatable-responsive').DataTable();

  var handleDataTableButtons = function() {
    if ($("#datatable-responsive").length) {
    $("#datatable-responsive").DataTable({
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

  //$('#datatable').dataTable();

  /*$('#datatable-keytable').DataTable({
    keys: true
  });*/

  //$('#datatable-responsive').DataTable();

  /*$('#datatable-scroller').DataTable({
    ajax: "js/datatables/json/scroller-demo.json",
    deferRender: true,
    scrollY: 380,
    scrollCollapse: true,
    scroller: true
  });*/

  /*$('#datatable-fixed-header').DataTable({
    fixedHeader: true
  });
*/
  /*var $datatable = $('#datatable-checkbox');

  $datatable.dataTable({
    'order': [[ 1, 'asc' ]],
    'columnDefs': [
    { orderable: false, targets: [0] }
    ]
  });
  $datatable.on('draw.dt', function() {
    $('checkbox input').iCheck({
    checkboxClass: 'icheckbox_flat-green'
    });
  });
*/
  TableManageButtons.init();
  
};
</script>