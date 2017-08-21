 <!-- iCheck -->
    <link href="<?php //echo base_url('assets/vendors/iCheck/skins/flat/green.css')?>" rel="stylesheet">
<!-- Datatables -->
<link href="<?php echo base_url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php //echo base_url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php //echo base_url('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php //echo base_url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php //echo base_url('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')?>" rel="stylesheet">

 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
  <div class="row top_tiles" style="margin: 10px 0;min-height: 600px;">
<div class="col-md-12 col-sm-12 col-xs-12" style="">
        <div class="x_panel">
          <div class="x_title">
            <h2>RTS Orders<small>Print Carrier Manifest frm here</small></h2>

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

            <a href="#" class="btn btn-success navbar-right mr-10" id="print_manifest"><i class="fa fa-print mr-5" ></i>Print Manifest</a>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <?php //print_r($orders); exit;?>
            <p class="text-muted font-13 m-b-30">
              
            </p>
              
            <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" cellspacing="0" width="100%">
              <thead>
                <tr>
                 <th><input type="checkbox" name="check-all" id="check-all-dt" value="1" ></th>
                  <th>Order No</th>
                  <th>Item ID</th>
                  <th>Tracking No</th>
                  <!--<th>Status</th>
                  <th>Extn.</th>
                  <th>E-mail</th>-->
                </tr>
              </thead>
              <tbody>
                <?php 
                    foreach ($manifest as $val) {
                        echo "<tr>";
                        echo '<th><input type="checkbox" name="item_ids[]" value="'.$val['itemids'].'" ></th>';
                        echo "<td>".$val['order_no']."</td>";
                        echo "<td>".$val['itemids']."</td>";
                
                        echo "<td>".$val['tracking_no']."</td>";
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
    <!-- iCheck -->
<script src="<?php //echo base_url('assets/vendors/iCheck/icheck.min.js')?>"></script>
<!-- Datatables -->
<script src="<?php echo base_url('assets/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script type="text/javascript">
$(document).ready(function() {

  var datatable = $('#datatable-checkbox');

  datatable.dataTable({
    'order': [[ 1, 'asc' ]],
    'columnDefs': [
    { orderable: false, targets: [1] }
    ]
  });

  $('#print_manifest').on('click',function(){
     var values = new Array();
     var all_items = '';
      $.each($("input[name='item_ids[]']:checked"), function() {
        values.push($(this).val());

        // or you can do something to the actual checked checkboxes by working directly with  'this'
        // something like $(this).hide() (only something useful, probably) :P
      });
      all_items = values.join(',')
      //console.log(all_items);
      if(all_items!=''){
        window.open('http://localhost:8080/seller_tools/manifest-print/'+encodeURIComponent(btoa(all_items)), '_blank'); 
      }else{
        alert('Please select at least one order');
      }
      


  });

   // Handle click on "Select all" control
  $('#check-all-dt').on('change', function(){
    //Get all rows with search applied
    var rows = datatable.api().rows({ 'search': 'applied' }).nodes();
    // Check/uncheck checkboxes for all rows in the table
    $('input[type="checkbox"]', rows).prop('checked', this.checked);
    
  });


  
});



</script>