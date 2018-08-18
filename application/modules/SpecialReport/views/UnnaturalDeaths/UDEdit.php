<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Unnatural Death Cases</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data</a></li>
                            <li><a href="#">Special Report</a></li>
                            <li><a href="<?php echo base_url();?>SpecialReport/UnnaturalDeath">UDList</a></li>
                            <li class="active">Update UD Cases</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-color panel-teal">
                        <div class="panel-heading text-right">
                            <a href="<?php echo base_url(); ?>SpecialReport/UnnaturalDeath" class="f18 text-white"><i class="ion-android-system-back"></i> Back</a>
                        </div>
                        <div class="panel-body">
                        <?php
                            echo form_open('#', array('id'=>'firform','data-parsley-validate'=>''));
                        ?>
                            <div class="row">
                                <div class="col-md-1 col-lg-1 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Sl No.</label>
                                        <input type="text" readonly="readonly" class="form-control" name="" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>GDE No </label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>GDE Date</label>
                                        <input type="text" class="form-control datepicker-autoclose" name="" id="" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>FIR No </label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>FIR Date </label>
                                        <input type="text" class="form-control datepicker-autoclose" name="" id="" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Person Name</label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Age </label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Sex </label>
                                        <select class="form-control" name="">
                                            <option selected="selected" disabled="disabled">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>UD Case No </label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>UD Case Date </label>
                                        <input type="text" class="form-control datepicker-autoclose" name="" id="" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Cause of Death</label>
                                        <input type="text" name="" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Facts</label>
                                        <input type="text" name="" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
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
</div>
<?php $this->load->view('includes/contentFooter'); ?>