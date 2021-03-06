<!DOCTYPE html>
<html>

   
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN CORE CSS FRAMEWORK -->
        <link href="<?php echo base_url(); ?>application_resources/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?php echo base_url(); ?>application_resources/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>application_resources/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>application_resources/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>application_resources/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <!-- END CORE CSS FRAMEWORK -->
        <!-- BEGIN CSS TEMPLATE -->
        <link href="<?php echo base_url(); ?>application_resources/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>application_resources/css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>application_resources/css/animate-login.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>application_resources/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>application_resources/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
        <!-- END CSS TEMPLATE -->

        <!-- CUSTOM CSS -->
        <link href="<?php echo base_url(); ?>application_resources/css/custom_css.css" rel="stylesheet" type="text/css"/>
        <!-- END CUSTOM CSS -->

         <!-- favicon icon -->
        <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>application_resources/img/favicon.ico" />

        
        <title><?php echo $this->config->item('APPLICATION_MAIN_TITLE'); ?> - Login</title>


        <style>
            .input-group .form-control {
                position: static;
            }
        </style>


    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="error-body no-top">
        <div class="load-anim">
            <center>
                <i id="animate-icon" class="fa fa-spinner fa fa-3x fa-spin loader-icon-margin"></i>
            </center>

        </div>
        <div class="container">
            <div class="row login-container column-seperation">  
                <div class="col-md-5 col-md-offset-1" style="margin-top:47px;">
                    <img src="<?php echo base_url(); ?>application_resources/img/capture.png" style="width:100%" class="fadeInDown animated"/>
                    <h2>Sign in to Beauty Of SriLanka</h2>
                    <!--<p>Collaborative remote working made easy.<br>-->
                        <!--<a href="#">Sign up Now!</a> for a BeautyOfSriLanka account,It's free and always will be..</p>-->
                    <br>
                  
                   
                </div>
                <div class="col-md-5 "> <br>
                    <form id="login_form" class="login-form"  method="post">
                        <div class="row">
                            <div class="form-group col-md-10">
                                <label class="form-label">Username</label>
                                <div class="controls">
                                    <div class="input-group"> 
                                        <span class="input-group-addon primary">
                                            <span class="arrow"></span>
                                            <i class="fa fa-align-justify"></i>
                                        </span>
                                        <div class="input-with-icon right">
                                            <i class=""></i>
                                            <input type="text" name="txtusername" id="txtusername" class="form-control" onFocus="validkey(event)" onClick="validkey(event)" onKeyPress="validkey(event)" placeholder="User Name">                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-10">
                                <label class="form-label">Password</label>
                                <span class="help"></span>
                                <div class="controls">
                                    <div class="input-group">  
                                        <span class="input-group-addon primary">
                                            <span class="arrow"></span>
                                            <i class="fa fa-unlock"></i>
                                        </span>
                                        <div class="input-with-icon right ">
                                            <i class=""></i>
                                            <input type="password" name="txtpassword" id="txtpassword" class="form-control" onFocus="validkey(event)" onClick="validkey(event)" onKeyPress="validkey(event)" placeholder="Password"> 
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                        <div class="row">
                            <div class="control-group  col-md-10">
                                <div id="login_msg"></div>
                                <div class="checkbox checkbox check-success"> <a href="#">Trouble login in?</a>&nbsp;&nbsp;
                                    <input type="checkbox" id="checkbox1" value="1">
                                    <label for="checkbox1">Keep me reminded </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">

                                <button class="btn btn-primary btn-cons pull-right" type="button"id="login-submit" onclick="login()">Login</button>
<!--                                <button class="btn btn-success btn-cons pull-right pull-right" type="button"id="login-submit" data-toggle="modal" data-target="#comapnymodal">Sign In</button>-->


                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>

        <!-- END CONTAINER -->
        <!-- BEGIN CORE JS FRAMEWORK-->

        <script type="text/javascript">

                      var js_base_url = "<?php echo base_url(); ?>";
                      var js_site_url = "<?php echo site_url(); ?>";

                                                //alert(js_url_path);
        </script>

        <script src="<?php echo base_url(); ?>application_resources/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>application_resources/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>application_resources/plugins/pace/pace.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>application_resources/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>application_resources/custom_js/custom_login.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>application_resources/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>application_resources/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>application_resources/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <!-- BEGIN CORE TEMPLATE JS -->
        <!-- END CORE TEMPLATE JS -->
    </body>

    
</html>
