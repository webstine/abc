<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">All Arrest</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data</a></li>
                            <li><a href="#">Special Report</a></li>
                            <li class="active">All Arrest</li>
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
                        <?php
                            echo form_open('#', array('id'=>'firform','data-parsley-validate'=>''));
                        ?>
                        <div class="panel-body append_panel">
                            <div class="append_row">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="arrestee">Arrestee Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="" id="arrestee" required=""\>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="alias">Alias</label>
                                            <input type="text" class="form-control" name="" id="alias" >
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="sex">Sex<span class="text-danger">*</span></label>
                                            <select id="sex" class="form-control">
                                                <option selected="selected" disabled="disabled">Select Sex</option>
                                                <option value="F">Female</option>
                                                <option value="M">Male</option>
                                                <option value="O">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="age">Age<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="" id="age" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="aadhar">Aadhaar No.<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="" id="aadhar" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="address">Address<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="" id="address" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="father_husband">Father/Husband<span class="text-danger">*</span></label>
                                            <select id="father_husband" class="form-control">
                                                <option selected="selected" disabled="disabled">Select</option>
                                                <option value="Father">Father</option>
                                                <option value="Husband">Husband</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="f_h_name">Father/Husband ('s) Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="" id="f_h_name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="religion">Religion<span class="text-danger">*</span></label>
                                            <select id="religion" class="form-control">
                                                <option selected="selected" disabled="disabled">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="occupation">Occupation<span class="text-danger">*</span></label>
                                            <select id="occupation" class="form-control">
                                                <option selected="selected" disabled="disabled">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="arrestdate">Arrest Date<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control datepicker-autoclose" name="" id="arrestdate" required="" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="arresthalf">Arrest Half<span class="text-danger">*</span></label>
                                            <select id="arresthalf" class="form-control">
                                                <option selected="selected" disabled="disabled">Select</option>
                                                <option value="1st">1st</option>
                                                <option value="2nd">2nd</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="arrestagainst">Arrest Against<span class="text-danger">*</span></label>
                                            <select class="form-control arrestagainst">
                                                <option selected="selected" disabled="disabled">Select</option>
                                                <option value="FIR">Against FIR</option>
                                                <option value="WARRANT">Against Warrant</option>
                                                <option value="PETTY">In Petty Case</option>
                                                <option value="SPECIFIC">Specific Arrest</option>
                                                <option value="PART-II">Part-II Case</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="firno">FIR No.<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="" id="firno" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="firdate">FIR Date<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control datepicker-autoclose" name="" id="firdate" placeholder="dd/mm/yyyy" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="placeofarrest">Place of Arrest<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="" id="placeofarrest" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="l/o">Local/Outside<span class="text-danger">*</span></label>
                                            <select id="l/o" class="form-control">
                                                <option selected="selected" disabled="disabled">Select</option>
                                                <option value="LOCAL">LOCAL</option>
                                                <option value="OUTSIDE">OUTSIDE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 crimehead">
                                        <div class="form-group">
                                            <label for="crimehead">Crime Head</label>
                                            <input type="text" class="form-control" name="" id="crimehead">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 ipcsllact">
                                        <div class="form-group">
                                            <label for="ipcsllact">IPC/SLL Act</label>
                                            <input type="text" class="form-control" name="" id="ipcsllact">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-offset-11">
                                    <i class="fa fa-plus text-success f20 add"></i> &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-minus text-danger f20 delete"></i>
                                </div>
                                <label id="msg">*Note:Enter FIR No. and Fir Date</label>
                                <br/>
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