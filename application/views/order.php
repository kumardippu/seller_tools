<!-- Datatables -->
<link href="<?php echo base_url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php //echo base_url('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php //echo base_url('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')?>" rel="stylesheet">

 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
  <div class="row top_tiles" style="margin: 10px 0;">
<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Responsive example<small>Users</small></h2>
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
            <p class="text-muted font-13 m-b-30">
              Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
            </p>
  
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                  <th>Extn.</th>
                  <th>E-mail</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger</td>
                  <td>Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                  <td>5421</td>
                  <td>t.nixon@datatables.net</td>
                </tr>
                <tr>
                  <td>Garrett</td>
                  <td>Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>63</td>
                  <td>2011/07/25</td>
                  <td>$170,750</td>
                  <td>8422</td>
                  <td>g.winters@datatables.net</td>
                </tr>
                <tr>
                  <td>Ashton</td>
                  <td>Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td>66</td>
                  <td>2009/01/12</td>
                  <td>$86,000</td>
                  <td>1562</td>
                  <td>a.cox@datatables.net</td>
                </tr>
                <tr>
                  <td>Cedric</td>
                  <td>Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td>2012/03/29</td>
                  <td>$433,060</td>
                  <td>6224</td>
                  <td>c.kelly@datatables.net</td>
                </tr>
                <tr>
                  <td>Airi</td>
                  <td>Satou</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>33</td>
                  <td>2008/11/28</td>
                  <td>$162,700</td>
                  <td>5407</td>
                  <td>a.satou@datatables.net</td>
                </tr>
                <tr>
                  <td>Brielle</td>
                  <td>Williamson</td>
                  <td>Integration Specialist</td>
                  <td>New York</td>
                  <td>61</td>
                  <td>2012/12/02</td>
                  <td>$372,000</td>
                  <td>4804</td>
                  <td>b.williamson@datatables.net</td>
                </tr>
                <tr>
                  <td>Herrod</td>
                  <td>Chandler</td>
                  <td>Sales Assistant</td>
                  <td>San Francisco</td>
                  <td>59</td>
                  <td>2012/08/06</td>
                  <td>$137,500</td>
                  <td>9608</td>
                  <td>h.chandler@datatables.net</td>
                </tr>
                <tr>
                  <td>Rhona</td>
                  <td>Davidson</td>
                  <td>Integration Specialist</td>
                  <td>Tokyo</td>
                  <td>55</td>
                  <td>2010/10/14</td>
                  <td>$327,900</td>
                  <td>6200</td>
                  <td>r.davidson@datatables.net</td>
                </tr>
                <tr>
                  <td>Colleen</td>
                  <td>Hurst</td>
                  <td>Javascript Developer</td>
                  <td>San Francisco</td>
                  <td>39</td>
                  <td>2009/09/15</td>
                  <td>$205,500</td>
                  <td>2360</td>
                  <td>c.hurst@datatables.net</td>
                </tr>
                <tr>
                  <td>Sonya</td>
                  <td>Frost</td>
                  <td>Software Engineer</td>
                  <td>Edinburgh</td>
                  <td>23</td>
                  <td>2008/12/13</td>
                  <td>$103,600</td>
                  <td>1667</td>
                  <td>s.frost@datatables.net</td>
                </tr>
                <tr>
                  <td>Jena</td>
                  <td>Gaines</td>
                  <td>Office Manager</td>
                  <td>London</td>
                  <td>30</td>
                  <td>2008/12/19</td>
                  <td>$90,560</td>
                  <td>3814</td>
                  <td>j.gaines@datatables.net</td>
                </tr>
                <tr>
                  <td>Quinn</td>
                  <td>Flynn</td>
                  <td>Support Lead</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td>2013/03/03</td>
                  <td>$342,000</td>
                  <td>9497</td>
                  <td>q.flynn@datatables.net</td>
                </tr>
                <tr>
                  <td>Charde</td>
                  <td>Marshall</td>
                  <td>Regional Director</td>
                  <td>San Francisco</td>
                  <td>36</td>
                  <td>2008/10/16</td>
                  <td>$470,600</td>
                  <td>6741</td>
                  <td>c.marshall@datatables.net</td>
                </tr>
                <tr>
                  <td>Haley</td>
                  <td>Kennedy</td>
                  <td>Senior Marketing Designer</td>
                  <td>London</td>
                  <td>43</td>
                  <td>2012/12/18</td>
                  <td>$313,500</td>
                  <td>3597</td>
                  <td>h.kennedy@datatables.net</td>
                </tr>
                <tr>
                  <td>Tatyana</td>
                  <td>Fitzpatrick</td>
                  <td>Regional Director</td>
                  <td>London</td>
                  <td>19</td>
                  <td>2010/03/17</td>
                  <td>$385,750</td>
                  <td>1965</td>
                  <td>t.fitzpatrick@datatables.net</td>
                </tr>
                <tr>
                  <td>Michael</td>
                  <td>Silva</td>
                  <td>Marketing Designer</td>
                  <td>London</td>
                  <td>66</td>
                  <td>2012/11/27</td>
                  <td>$198,500</td>
                  <td>1581</td>
                  <td>m.silva@datatables.net</td>
                </tr>
                <tr>
                  <td>Paul</td>
                  <td>Byrd</td>
                  <td>Chief Financial Officer (CFO)</td>
                  <td>New York</td>
                  <td>64</td>
                  <td>2010/06/09</td>
                  <td>$725,000</td>
                  <td>3059</td>
                  <td>p.byrd@datatables.net</td>
                </tr>
                <tr>
                  <td>Gloria</td>
                  <td>Little</td>
                  <td>Systems Administrator</td>
                  <td>New York</td>
                  <td>59</td>
                  <td>2009/04/10</td>
                  <td>$237,500</td>
                  <td>1721</td>
                  <td>g.little@datatables.net</td>
                </tr>
                <tr>
                  <td>Bradley</td>
                  <td>Greer</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td>41</td>
                  <td>2012/10/13</td>
                  <td>$132,000</td>
                  <td>2558</td>
                  <td>b.greer@datatables.net</td>
                </tr>
                <tr>
                  <td>Dai</td>
                  <td>Rios</td>
                  <td>Personnel Lead</td>
                  <td>Edinburgh</td>
                  <td>35</td>
                  <td>2012/09/26</td>
                  <td>$217,500</td>
                  <td>2290</td>
                  <td>d.rios@datatables.net</td>
                </tr>
                <tr>
                  <td>Jenette</td>
                  <td>Caldwell</td>
                  <td>Development Lead</td>
                  <td>New York</td>
                  <td>30</td>
                  <td>2011/09/03</td>
                  <td>$345,000</td>
                  <td>1937</td>
                  <td>j.caldwell@datatables.net</td>
                </tr>
                <tr>
                  <td>Yuri</td>
                  <td>Berry</td>
                  <td>Chief Marketing Officer (CMO)</td>
                  <td>New York</td>
                  <td>40</td>
                  <td>2009/06/25</td>
                  <td>$675,000</td>
                  <td>6154</td>
                  <td>y.berry@datatables.net</td>
                </tr>
                <tr>
                  <td>Caesar</td>
                  <td>Vance</td>
                  <td>Pre-Sales Support</td>
                  <td>New York</td>
                  <td>21</td>
                  <td>2011/12/12</td>
                  <td>$106,450</td>
                  <td>8330</td>
                  <td>c.vance@datatables.net</td>
                </tr>
                <tr>
                  <td>Doris</td>
                  <td>Wilder</td>
                  <td>Sales Assistant</td>
                  <td>Sidney</td>
                  <td>23</td>
                  <td>2010/09/20</td>
                  <td>$85,600</td>
                  <td>3023</td>
                  <td>d.wilder@datatables.net</td>
                </tr>
                <tr>
                  <td>Angelica</td>
                  <td>Ramos</td>
                  <td>Chief Executive Officer (CEO)</td>
                  <td>London</td>
                  <td>47</td>
                  <td>2009/10/09</td>
                  <td>$1,200,000</td>
                  <td>5797</td>
                  <td>a.ramos@datatables.net</td>
                </tr>
                <tr>
                  <td>Gavin</td>
                  <td>Joyce</td>
                  <td>Developer</td>
                  <td>Edinburgh</td>
                  <td>42</td>
                  <td>2010/12/22</td>
                  <td>$92,575</td>
                  <td>8822</td>
                  <td>g.joyce@datatables.net</td>
                </tr>
                <tr>
                  <td>Jennifer</td>
                  <td>Chang</td>
                  <td>Regional Director</td>
                  <td>Singapore</td>
                  <td>28</td>
                  <td>2010/11/14</td>
                  <td>$357,650</td>
                  <td>9239</td>
                  <td>j.chang@datatables.net</td>
                </tr>
                <tr>
                  <td>Brenden</td>
                  <td>Wagner</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td>28</td>
                  <td>2011/06/07</td>
                  <td>$206,850</td>
                  <td>1314</td>
                  <td>b.wagner@datatables.net</td>
                </tr>
                <tr>
                  <td>Fiona</td>
                  <td>Green</td>
                  <td>Chief Operating Officer (COO)</td>
                  <td>San Francisco</td>
                  <td>48</td>
                  <td>2010/03/11</td>
                  <td>$850,000</td>
                  <td>2947</td>
                  <td>f.green@datatables.net</td>
                </tr>
              
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