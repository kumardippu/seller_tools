
<link rel="stylesheet" href="//static-asc.sellercenter.lazada.com.my/lazada/sc/0.0.104/orders-overview.css">
<body class="la-print-scroll">
<?php if(isset($error) && $error==FALSE) { ?>
<div class="next-row next-row-justify-center la-print-header">
  <div class="next-col"><h1>Print carrier manifest for selected items</h1></div>
  <div class="next-col right-col">
    <button type="button" class="next-btn next-btn-primary next-btn-medium" onclick="printDoc()">Print</button>
    <a href="http://localhost:8080/seller_tools/dashboard" >
      <button type="button" class="next-btn next-btn next-btn-medium">Dashboard</button></a>
    </div>
</div>

<span id="printarea">

<div class="print-pick-list">
    <div class="logo">
        <img class="logo-bg" src="/assets/img/print_logo_bg.png">
        <div class="logo-label"><img src="/assets/img/print_logo_label.png"></div>
        <div class="logo_content">
           <!-- <div class="headline">Shipping provider: LGS-FM41
                &nbsp;
                Carrier manifest printed on: Thu Aug 24 10:57:05 GMT+08:00 2017
            </div>-->
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Order Number</th>
                <th>Package Tracking Number</th>
                <th>Number of Pieces in Package</th>
                <th>Shipping Provider</th>
            </tr>
        </thead>
        <tbody>
           <?php 
              $item_count = 0;
              $total_pac  = 0;
              foreach ($fileData as $val) {
                   $item_count = count(explode(',',$val['itemids']));
                   echo "<tr>";
                       echo "<td>".$val['order_no']."</td>";
                       echo "<td>".$val['tracking_no']."</td>";
                       echo "<td>".$item_count."</td>";
                       echo "<td>".$val['shipping_provider']."</td>";
                       
                   echo "</tr>";
                   $total_pac++;
           } ?> 
       
        </tbody>
    </table>

    <div class="footer">
        <div class="small-footer-placeholder">
            <div class="placeholder-inner">
                Total of Packages
            </div>
        </div><div class="small-footer-placeholder">
            <div class="placeholder-inner">
                    <?php echo $total_pac;?>
            </div>
        </div>
        <div class="footer-placeholder">
            <div class="placeholder-inner">
                Date: <?php echo date('Y-m-d H:i:s') //Thu Aug 24 10:57:05 GMT+08:00 2017 ?>
            </div>
        </div><div class="footer-placeholder">
            <div class="placeholder-inner">
                Signature
            </div>
        </div>
    </div>
</div>
</span>
<?php }else{?> 

    <div class="next-row next-row-justify-center la-print-header">
    <div class="next-col"><h3 class="error"><?php echo $error_msg;?></h3></div>
    <div class="next-col right-col">
        
        <a href="<?php echo base_url('dashboard');?>" >
            <button type="button" class="next-btn next-btn next-btn-medium">Dashboard</button></a>
        </div>
</div>
    
<?php } ?>
</body>
<!-- jQuery -->
<script src="<?php echo base_url();?>/assets/vendors/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.logo-bg').attr('src', '<?php echo base_url();?>'+'/assets/images/print_logo_bg.png');
   $('.logo-label').children('img').attr('src', '<?php echo base_url();?>'+'/assets/images/print_logo_label.png');
});

function printDoc() {
  printarea = 'printarea';   
  var printContents = document.getElementById(printarea).innerHTML;
  var originalContents = document.body.innerHTML;
  document.body.innerHTML = printContents;
  window.print();
  document.body.innerHTML = originalContents;
}
</script>