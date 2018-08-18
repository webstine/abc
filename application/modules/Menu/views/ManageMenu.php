<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Manage Menu</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Navigation</a></li>
                            <li class="active">Manage Menu</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-colored table-teal">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Menu Name</th>
                                        <th>Parent Menu</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach($menus as $m){ ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $m['LABEL'];?></td>
                                        <td>
                                            <?php
                                                if($m['PARENT']==0){
                                                    echo "#";
                                                }
                                                else{
                                                    echo $m['PARENT_LABEL'];       
                                                }
                                             ?>
                                        </td>
                                        <td>
                                            <?php
                                                if($m['DISPLAY_BLOCK']==1){
                                                    echo "Active";
                                                } else {
                                                    echo "Inctive";
                                                }
                                            ?>
                                        </td>
                                        <td><a href="<?php echo base_url();?>Menu/editMenu/<?php echo myEncode($m['MENU_ID']);?>"><i class="fa fa-pencil-square-o"></i></a></td>
                                    </tr>
                                    <?php
                                        $i++; }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container -->
</div> <!-- content -->
<?php $this->load->view('includes/contentFooter'); ?>