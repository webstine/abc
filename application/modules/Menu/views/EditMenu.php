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
                        <?php
                            echo form_open(base_url('Menu/updateMenu'), array('id'=>'menuform','data-parsley-validate'=>''));
                        ?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Menu Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="LABEL" id="menunm" required="" value="<?php echo $mdata[0]['LABEL'];?>">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Link<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="LINK" id="" required="" value="<?php echo $mdata[0]['LINK'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Menu Icon<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="ICON" id="" required=""\ value="<?php echo $mdata[0]['ICON'];?>">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Parent Menu<span class="text-danger">*</span></label>
                                        <select name="PARENT" class="form-control">
                                            <option value="" selected="selected" disabled="disabled" required="required">Select</option>
                                            <?php foreach($parent as $p){ ?>
                                            <option value="<?php echo $p['MENU_ID']?>"<?php if($mdata[0]['PARENT'] == $p['MENU_ID'])echo "selected";?>><?php echo $p['LABEL'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Menu Order<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="MENUORDER" id="" required=""\ value="<?php echo $mdata[0]['MENUORDER'];?>">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Menu Status<span class="text-danger">*</span></label>
                                        <select name="DISPLAY_BLOCK" class="form-control" required="required">
                                            <?php 
                                                $active = "";
                                                $inactive = "";
                                                if($mdata[0]['DISPLAY_BLOCK'] == 1){
                                                    $active = "selected";
                                                }
                                                else{
                                                    $inactive = "selected";
                                                }
                                            ?>
                                            <option selected="selected" disabled="disabled">Select</option>
                                            <option value="1"<?php echo $active; ?>>Active</option>
                                            <option value="0"<?php echo $inactive; ?>>Inactive</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="MENU_ID" value="<?php echo myEncode($mdata[0]['MENU_ID']);?>">
                                </div>
                            </div>
                        </div>
                        <!-- BUTTON OUTSIDE PANEL -->
                        <div class="row text-center">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="fa fa-save"></i> Save</button>
                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="fa fa-times"></i> Cancel</button>
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