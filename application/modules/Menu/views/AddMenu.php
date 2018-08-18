<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add Menu</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Navigation</a></li>
                            <li class="active">Add Menu</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-color panel-teal">
                        <div class="panel-heading text-right">
                            <!-- <a href="<?php #echo base_url(); ?>SpecialReport/AllArrest" class="f18 text-white"><i class="ion-android-system-back"></i> Back</a> -->
                        </div>
                        <?php
                            echo form_open(base_url('Navigation/Menu/insertMenu'), array('id'=>'menuform','data-parsley-validate'=>''));
                        ?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Menu Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="LABEL" id="menunm" required=""\>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Link<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="LINK" id="" required=""\>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Menu Icon<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="ICON" id="" required=""\>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Parent Menu<span class="text-danger">*</span></label>
                                        <select name="PARENT" class="form-control">
                                            <option value="" selected="selected" disabled="disabled" required="required">Select</option>
                                            <?php foreach($parent as $p){ ?>
                                            <option value="<?php echo $p['MENU_ID'];?>"><?php echo $p['LABEL'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Menu Order<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="MENUORDER" id="" required=""\>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="arrestee">Menu Status<span class="text-danger">*</span></label>
                                        <select name="DISPLAY_BLOCK" class="form-control" required="required">
                                            <option value="" selected="selected" disabled="disabled">Select</option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- BUTTON OUTSIDE PANEL -->
                        <div class="row text-center">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="fa fa-save"></i> Save</button>
                                <button type="submit" id="cancel" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="fa fa-times"></i> Cancel</button>
                            </div>
                        </div>
                        <?php
                            echo form_close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</div> <!-- content -->
<?php $this->load->view('includes/contentFooter'); ?>