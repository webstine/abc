<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Prosecution Under Cr.PC. Acts</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data</a></li>
                            <li><a href="#">Special Report</a></li>
                            <li><a href="#">Prosecution Under Cr.PC. Acts List</a></li>
                            <li class="active">Edit</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-color panel-teal">
                        <div class="panel-heading text-right">
                            <a href="<?php echo base_url(); ?>SpecialReport/ProsecutionUnderCrpcActs" class="f18 text-white"><i class="ion-android-system-back"></i> Back</a>
                        </div>
                        <div class="panel-body">
                        <?php
                            echo form_open('#', array('id'=>'firform','data-parsley-validate'=>''));
                        ?>
                            <div class="row">
                                <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                    <label for="slno">Sl No.</label>
                                    <input type="text" readonly="readonly" class="form-control" name="" id="slno">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="gdeno">GDE No. </label>
                                        <input type="number" class="form-control" name="" id="gdeno">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="gdedate">GDE Date </label>
                                            <input type="text" class="form-control datepicker-autoclose" id="gdedate" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="pname">Person Name </label>
                                        <input type="text" class="form-control" name="" id="pname">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="alias">Alias Name </label>
                                        <input type="text" class="form-control" name="" id="alias">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="" id="address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="age">Age </label>
                                        <input type="number" class="form-control" name="" id="age">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="sex">Sex </label>
                                        <select id="sex" class="form-control">
                                            <option selected="selected" disabled="disabled">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="nationality">Nationality </label>
                                        <select id="nationality" class="form-control" required="">
                                            <option selected="selected" disabled="disabled">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="religion">Religion </label>
                                        <select id="religion" class="form-control" required="">
                                            <option selected="selected" disabled="disabled">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="caste">Caste </label>
                                        <select id="caste" class="form-control" required="">
                                            <option selected="selected" disabled="disabled">Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="occupation">Occupation </label>
                                        <select id="occupation" class="form-control">
                                            <option selected="selected" disabled="disabled">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="father_husband">Father/Husband </label>
                                        <select id="father_husband" class="form-control">
                                            <option selected="selected" disabled="disabled">Select</option>
                                            <option value="Father">Father</option>
                                            <option value="Husband">Husband</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="f_h_name">Father/Husband('s) Name </label>
                                        <input type="text" class="form-control" name="" id="f_h_name">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="acts_section">Act/Section (s)</label>
                                        <input type="text" class="form-control" name="" id="acts_section">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <input type="text" class="form-control" name="" id="status">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="dutyofficer">Duty Officer </label>
                                        <input type="text" class="form-control" name="" id="dutyofficer">
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="prno">PR No. </label>
                                        <input type="text" class="form-control" name="" id="prno">
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="remarks">Remarks </label>
                                        <input type="text" class="form-control" name="" id="remarks" required="">
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
        </div>
    </div> <!-- container -->
</div> <!-- content -->
<?php $this->load->view('includes/contentFooter'); ?>