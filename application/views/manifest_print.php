<link rel="stylesheet" href="//static-asc.sellercenter.lazada.com.my/lazada/sc/0.0.104/orders-overview.css">
<body class="la-print-scroll">
<?php if(isset($error) && $error==FALSE) { ?>
<div class="next-row next-row-justify-center la-print-header">
	<div class="next-col"><h1>Print carrier manifest for selected items</h1></div>
	<div class="next-col right-col">
		<button type="button" class="next-btn next-btn-primary next-btn-medium" onclick="printDoc()">Print</button>
		<a href="<?php echo base_url('dashboard');?>" >
			<button type="button" class="next-btn next-btn next-btn-medium">Dashboard</button></a>
		</div>
</div>

<span id="printarea">
<?php
	$file_data = $fileData;
	header('Content-type: text/html; charset=utf-8');
	echo $file_data;  
?>
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
<script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
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