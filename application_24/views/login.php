<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lazada - Malaysia | Seller tools</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>"  rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css');?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/vendors/animate.css/animate.min.css');?>" rel="stylesheet">

    <!-- Custom Theme Style -->
  <link href="<?php echo base_url('assets/build/css/custom.min.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/build/css/new_customs.css');?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
 <?php
     if(isset($is_signup) && $is_signup){ ?>
        <script type="text/javascript">
        $(function() {
                document.location.href = '#signup';
            });</script>
    <?php } ?>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

            <?php
               $form_attributes = array('class' => 'form-horizontal', 'id' => 'seller_login','name' => 'seller_login');
              echo form_open('login/validate_credentials',$form_attributes);?>
              <h1>Lazada Seller Login</h1>
            <?php
                if(isset($message_error) && $message_error==TRUE){
                      echo '<div class="alert alert-error">';
                        echo '<a class="close" data-dismiss="alert">x</a>';
                        echo 'Invalid Username or Password!';
                      echo '</div>';
                }
                //When user created successfully
                if($this->session->flashdata('flash_message')){
                  if($this->session->flashdata('flash_message') == 'created'){
                    echo '<div class="alert alert-success">';
                      echo '<a class="close" data-dismiss="alert">x</a>';
                      echo 'Account has been created!';
                    echo '</div>';
                  }
              }

              ?>
              <div>
                <input type="text" class="form-control" placeholder="Registered Email" name="user_name" id="user_name"  />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
              </div>
              <div>
                <!--<a class="btn btn-default submit" href="index.html">Log in</a>-->
                <input type="submit" name="login" value="Log in" class="btn btn-default submit">
                <a class="reset_pass" href="#forget" data-toggle="modal" data-target="#myModal">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa user-circle"></i>Lazada-Malaysia</h1>
                  <p>© Platform-Seller Performance Team 2017.All Rights Reserved.</p>
                </div>
              </div>
            <?php echo form_close();?>
          </section>
        </div>
        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <?php // Registration form
                  //form data
                  $attributes = array('class' => 'form-horizontal', 'id' => 'seller_register','name' => 'seller_register');
                  //form validation

                  echo validation_errors();
                echo form_open('register',$attributes);?>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Full Name" name="name" id="name"  value="<?php echo set_value('name'); ?>" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="email" id="email"  value="<?php echo set_value('email'); ?>"/>
              </div>

              <div>
                <input type="text" class="form-control" placeholder="Seller Short Code" name="seller_id" id="seller_id"  value="<?php echo set_value('seller_id'); ?>" />
              </div>

              <div>
                <input type="text" class="form-control" placeholder="API Key" name="api_key" id="api_key"  value="<?php echo set_value('api_key'); ?>" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password"  value="<?php echo set_value('password'); ?>" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password"  value="<?php echo set_value('confirm_password'); ?>" />
              </div>

              <div>
              <input type="submit" name="register" value="Submit" class="btn btn-default submit"><!-- <a class="btn btn-default submit" href="index.html">Submit</a>-->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa user-circle"></i>Lazada-Malaysia</h1>
                  <p>© Platform-Seller Performance Team 2017.All Rights Reserved.</p>
                </div>
              </div>
            <?php echo form_close();?>
          </section>
        </div>
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Forget Password</h4>
      </div>
      <div class="modal-body">
         <?php $attributes = array('class' => 'form-horizontal', 'id' => 'forget_form','name' => 'forget_form');  echo form_open('register',$attributes);?>

          <input type="email" class="form-control" placeholder="Enter Registered Email" name="forget_email" id="forget_email"  />
          <span id="msg_disp"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="forget_button">Submit</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>
<!-- Modal -->

<script src="<?php echo base_url('assets/build/js/jquery.validate.js'); ?>"></script>
<script src="<?php echo base_url('assets/build/js/validate.js'); ?>"></script>
 <script type="text/javascript">
   $('#forget_button').click(function(){
      var email = $('#forget_email').val();
      email = email.trim();
      if(!isValidEmailAddress(email)){
        html = '<div class="alert alert-error">';
        html += '<a class="close" data-dismiss="alert">x</a>Error | Invalid EmailID!</div>';
        $("#msg_disp").html(html);
        return false;
      }
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('forget');?>",
          data: "email="+email,
          success: function(response){
               data = JSON.parse(response);
               if(data.error==true){
                  html = '<div class="alert alert-error">';
               }else{
                  html = '<div class="alert alert-success">';
               }

               html += '<a class="close" data-dismiss="alert">x</a>'+data.message+'</div>';

              console.log(data.message);
              $("#msg_disp").html(html);
          },
          error: function() {
             //alert("BROKEN REQUEST.");
            html = '<div class="alert alert-error">';
            html += '<a class="close" data-dismiss="alert">x</a>Error! There are some technical issue</div>';
            $("#msg_disp").html(html);
          }
      });

   });

function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};

 </script>

  </body>
</html>
