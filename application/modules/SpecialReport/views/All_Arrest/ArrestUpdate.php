<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit All Arrest</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data</a></li>
                            <li><a href="#">Special Report</a></li>
                            <li class="active">Edit All Arrest</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-color panel-teal">
                        <div class="panel-heading text-right">
                            <a href="<?php echo base_url(); ?>SpecialReport/AllArrest" class="f18 text-white"><i class="ion-android-system-back"></i> Back</a>
                        </div>
                        <div class="panel-body">
                        <?php
                            echo form_open('#', array('id'=>'firform','data-parsley-validate'=>''));
                        ?>
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="arrestee">Arrestee Name</label>
                                        <input type="text" class="form-control" name="" id="arrestee" required="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="alias">Alias</label>
                                        <input type="text" class="form-control" name="" id="alias">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="sex">Sex</label>
                                        <select id="sex" class="form-control">
                                            <option selected="selected" disabled="disabled">Select Sex</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-1 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="number" class="form-control" name="" id="age" required="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="aadhar">Aadhaar No.</label>
                                        <input type="number" class="form-control" name="" id="aadhar" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="" id="address" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="father_husband">Father/Husband</label>
                                        <select id="father_husband" class="form-control" required="">
                                            <option selected="selected" disabled="disabled">Select</option>
                                            <option value="Father">Father</option>
                                            <option value="Husband">Husband</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="f_h_name">Father/Husband ('s) Name</label>
                                        <input type="text" class="form-control" name="" id="f_h_name" required="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="religion">Religion</label>
                                        <select id="religion" class="form-control">
                                            <option selected="selected" disabled="disabled">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="occupation">Occupation</label>
                                        <select id="occupation" class="form-control">
                                            <option selected="selected" disabled="disabled">Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="arrestdate">Arrest Date</label>
                                        <input type="text" class="form-control datepicker-autoclose" name="" id="arrestdate" required="required" readonly="readonly" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="arresthalf">Arrest Half</label>
                                        <select id="arresthalf" class="form-control" required="">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="arrestagainst">Arrest Against</label>
                                        <select id="arrestagainst" class="form-control">
                                            <option selected="selected" disabled="disabled">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="firno">FIR No.</label>
                                        <input type="text" class="form-control" name="" id="" required="">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="firdate">FIR Date</label>
                                        <input type="text" class="form-control datepicker-autoclose" name="" id="" required="" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="placeofarrest">Place of Arrest</label>
                                        <input type="text" class="form-control" name="" id="placeofarrest" required="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="l/o">Local/Outside</label>
                                        <select id="l/o" class="form-control">
                                            <option selected="selected" disabled="disabled">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="crimehead">Crime Head</label>
                                        <input type="text" class="form-control" name="" id="crimehead" required="required" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="ipcsllact">IPC/SLL Act</label>
                                        <input type="text" class="form-control" name="" id="ipcsllact" required="required" readonly="readonly">
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