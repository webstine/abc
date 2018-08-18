<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Kolkata Police Criminal Record System">
        <meta name="author" content="e-Governance Cell">
        <meta name="theme-color" content="#9DE5F6">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo_sm.png">
        <!-- App title -->
        <title>Kolkata Police Criminal Record System</title>

        <!-- App css -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>
        
    </head>

    <body class="loginBody">
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

         <!-- account-logo-box -->
        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12 loginForm">
                        <div class="wrapper-page">
                            <div class="m-t-50 account-pages" style="background: #a9e4f7;">
                                <div class="text-center">
                                    <h2 class="text-uppercase">
                                        <a href="<?php echo base_url(); ?>" class="text-success">
                                            <span><img src="<?php echo base_url(); ?>assets/images/kplogo.png" alt="KP Logo" class="m-t-10" height="100"></span>
                                        </a>
                                    </h2>
                                    <h4 class="text-uppercase loginTxt">Criminal Record System</h4>
                                    <h5 class="text-primary"><em>an e-Governance initiative</em></h5>
                                </div>
                                <div class="account-content">
                                    <?php
                                        if(!empty($loginmsg)){
                                    ?>
                                            <h5 class="text-pink text-center"><?php echo $loginmsg;?></h5>
                                    <?php
                                        }
                                        echo form_open(base_url('Login/loginProcess'),array('class'=>'form-horizontal'));
                                    ?>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <label class="text-dark">Department</label>
                                                <select class="form-control" id="department" name="dept">
                                                    <option selected="selected" disabled="disabled">Select Department</option>
                                                    <option value="SUP">Superior Officer</option>
                                                    <option value="DIV">Division</option>
                                                    <option value="PS">Police Station</option>
                                                    <option value="DD">Detective Department</option>
                                                    <option value="STF">Special Task Force</option>
                                                    <option value="SB">Special Branch</option>
                                                    <option value="TP">Traffic Department</option>
                                                    <option value="ADMIN">Administrator</option>
                                                </select>
                                            </div>
                                            <label class="text-orange"><?php echo form_error('dept'); ?></label>
                                        </div>

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <label class="text-dark">Username</label>
                                                <select class="form-control" id="username" name="usrnm">
                                                    <option selected="selected" disabled="disabled">Select Username</option>
                                                </select>
                                            </div>
                                            <label class="text-orange"><?php echo form_error('usrnm'); ?></label>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label class="text-dark">Password</label>
                                                <input class="form-control" type="password" name="pwd" required="required" placeholder="Enter Password" autocomplete="off">
                                            </div>
                                            <label class="text-orange"><?php echo form_error('pwd'); ?></label>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <span id="captchaImg"><?php echo $image; // this will show the captcha image ?></span>
                                                <a class="btn btn-sm btn-icon waves-effect waves-light btn-pink" data-toggle="tooltip" data-placement="top" title data-original-title="Reload CAPTCHA" id="reloadBtn"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label class="text-dark">CAPTCHA Code</label>
                                                <input class="form-control" type="text" required="required" placeholder="Enter CAPTCHA" autocomplete="off" name="captcha">
                                            </div>
                                            <label class="text-orange"><?php echo form_error('captcha'); ?></label>
                                        </div>
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-custom waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </div>
                                    <?php
                                        echo form_close();
                                    ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- end card-box-->
                        </div>
                        <!-- end wrapper -->
                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->
        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/login.js"></script>     

        <script>
            var resizefunc = [];

            var base_url = "<?php echo base_url(); ?>";
            $(function($) {
                $.ajaxSetup({
                    data: {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'}
                }); 
            });

        </script>

    </body>
</html>
