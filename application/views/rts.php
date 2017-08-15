 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
  <div class="row top_tiles" style="margin: 10px 0;">

      <!--<div class="x_panel">
                      <div class="x_title">
                <h2>Form Design <small>different form elements</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
      </div>-->














<div class="col-md-12 col-sm-12 col-xs-12" style="min-height: 550px;">

     <div class="x_content">
      <h2>RTS(Ready To Ship) Form<small></small></h2>
      <?php 
           $form_attributes = array('class' => 'form-horizontal form-label-left', 'id' => 'rts_froms','name' => 'rts_form');
          echo form_open('rts',$form_attributes);
      ?>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Enter Tracking No</label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <textarea class="resizable_textarea form-control" name="tn" placeholder="Please scan/input Tracking No here  in comma seprated. Ex.- LZD4100005594073MY,LZD4100005594323MY" required=""></textarea>
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
  </div>


</div>

</div>