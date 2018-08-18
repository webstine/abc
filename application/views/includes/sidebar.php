<?php 
$sidemenu_arg = $this->{$this->model}->getSideMenu();
?>
<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- DYNAMIC SIDEBAR CODE STARTS HERE -->
                        <ul>
                            <li class="has_sub">
                                <a href="<?php echo base_url(); ?>Dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>
                            <?php foreach($sidemenu_arg as $p => $value) { //1
                                $childs = $this->{$this->model}->getChildMenu($value['MENU_ID']);
                                $has_2nd_child = false;
                                if(!empty(count($childs))){
                                    $has_2nd_child = true;
                                }
                            ?>
                                <li class="has_sub">
                                    <a href="#" class="waves-effect"><i class="fa <?php echo $value['ICON']; ?>"></i> <span><?php echo $value['LABEL']; ?></span> <?php if($has_2nd_child){ echo '<span class="menu-arrow"></span>'; } ?></a>
                                     <?php if($has_2nd_child){ ?>
                                        <ul class="list-unstyled">
                                            <?php foreach($childs as $c => $child) {
                                                $link = ($child['LINK'] != '' && $child['LINK'] != '#')?base_url().$child['LINK']:'#';
                                                $childs1 = $this->{$this->model}->getChildMenu($child['MENU_ID']);
                                                $has_3rd_child = false;
                                                if(!empty(count($childs1))){
                                                    $has_3rd_child = true;
                                                }
                                            ?>
                                                <li><a href="<?php echo $link; ?>"><?php echo $child['LABEL']; ?><?php if($has_3rd_child){ echo '<span class="menu-arrow"></span>'; } ?></a>
                                                <?php if($has_3rd_child){ ?>
                                                    <ul class="list-unstyled">
                                                        <?php foreach($childs1 as $c => $child1) { // 3
                                                            $link = ($child1['LINK'] != '' && $child1['LINK'] != '#')?base_url().$child1['LINK']:'#';
                                                        ?>
                                                        <li><a href="<?php echo $link; ?>"><?php echo $child1['LABEL']; ?></a></li>
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                            <?php } } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?> 
                        </ul>
                        <!-- DYNAMIC SIDEBAR CODE ENDS HERE -->
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">Need Help?</h5>
                        <p class="m-b-0"><span class="text-dark"><b>Call:</b></span> <br/>e-Governance Cell, KPD<br /> (033) 2250-5163</p>
                    </div>
                </div>
                <!-- Sidebar -left -->
            </div>
        </div>
        <!-- Sidebar -->
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->