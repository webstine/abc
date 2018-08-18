<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="#" class="logo"><span><img src="<?php echo base_url(); ?>assets/images/crs.png"></span><i><img src="<?php echo base_url(); ?>assets/images/logo_sm.png" height="50" width="50"></i></a>
    </div>
    
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Navbar-left -->
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <button class="button-menu-mobile open-left waves-effect waves-light">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>
                <!-- Date Select -->
                <?php if($this->module == 'SpecialReport'){
                        echo $this->getTopBarHtml; 
                } ?>
            </ul>

            <!-- Right(Notification) -->
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden-xs" style="padding-top: 10px;">
                    <h4 class="text-white"><?php echo $this->session->userdata('PSNAME');?></h4>
                </li>
                <li class="dropdown user-box">
                    <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="<?php echo base_url(); ?>assets/images/police2.png" alt="user-img" class="img-circle user-img">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                        <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i>User Account</a></li>
                        <!-- <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li> -->
                        <li><a href="<?php echo base_url(); ?>Login/logout"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                    </ul>
                </li>
            </ul> <!-- end navbar-right -->
        </div><!-- end container -->
    </div><!-- end navbar -->
</div>
<!-- Top Bar End -->
