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
    <?php  } ?>
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
                <!--<a class="reset_pass" href="#">Lost your password?</a>-->
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

<script src="<?php echo base_url('assets/build/js/jquery.validate.js'); ?>"></script>
<script src="<?php echo base_url('assets/build/js/validate.js'); ?>"></script>
  </body>
</html>