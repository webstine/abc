<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Seizures</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data</a></li>
                            <li><a href="#">Special Report</a></li>
                            <li><a href="<?php echo base_url();?>SpecialReport/Seizures">Seizures List</a></li>
                            <li class="active">Add New Seizures</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-color panel-teal">
                        <div class="panel-heading text-right">
                            <a href="<?php echo base_url(); ?>SpecialReport/Seizures" class="f18 text-white"><i class="ion-android-system-back"></i> Back</a>
                        </div>
                        <?php
                            echo form_open('#', array('id'=>'firform','data-parsley-validate'=>''));
                        ?>
                        <div class="panel-body append_panel2">
                            <div class="append_row">
                                <div class="row">
                                    <div class="col-md-1 col-lg-1 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Sl No.</label>
                                            <input type="text" readonly="readonly" class="form-control" name="" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>GDE No </label>
                                            <input type="text" class="form-control" name="" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>GDE Date </label>
                                            <input type="text" class="form-control datepicker-autoclose" name="" id="" required="required" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Undersections (if any) </label>
                                            <input type="text" class="form-control" name="" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Items Category</label>
                                            <select id="" class="form-control" required="">
                                                <option selected="selected" disabled="disabled">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Quantity Seized </label>
                                            <input type="text" class="form-control" name="" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Measurement Unit </label>
                                            <select id="" class="form-control" required="">
                                                <option selected="selected" disabled="disabled">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Item Validation (if any)</label>
                                            <input type="text" class="form-control" name="" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-10 col-xs-12">
                                        <div class="form-group">
                                            <label>Details</label>
                                            <input type="text" class="form-control" name="" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-offset-11">
                                    <h3>
                                        <i class="fa fa-plus text-success f20 add"></i> &nbsp;&nbsp;&nbsp;
                                        <i class="fa fa-minus text-danger f20 delete1"></i>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- BUTTON OUTSIDE PANEL -->
                        <div class="row text-center">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="fa fa-save"></i> Save</button>
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