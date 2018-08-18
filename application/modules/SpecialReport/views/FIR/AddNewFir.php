<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">First Investigation Report</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data</a></li>
                            <li><a href="#">Special Report</a></li>
                            <li><a href="<?php echo base_url();?>SpecialReport/fir">FIR List</a></li>
                            <li class="active">Add New FIR</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-color panel-teal">
                        <div class="panel-heading text-right">
                            <a href="<?php echo base_url(); ?>SpecialReport/Fir" class="f18 text-white"><i class="ion-android-system-back"></i> Back</a>
                        </div>
                        <?php
                            echo form_open(base_url('SpecialReport/addNewFir'), array('id'=>'firform','data-parsley-validate'=>''));
                        ?>
                        <div class="panel-body">
                            <span class="text-danger"><b>* marks fields are mandatory</b></span>
                            <br><br>
                            <h4 class="header-title m-t-0">FIR Details</h4>
                            <hr/>
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="firno">FIR No <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="CASENO" required="required" id="firno">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="firdate">FIR Date <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control datepicker-autoclose" name="CASEDATE" required="required" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="gdeno">GDE No <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="GDENO" required="required">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="gdedate">GDE Date <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control datepicker-autoclose" name="GDEDATE" required="required" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="udno">UD Case No:</label>
                                        <input type="text" class="form-control" name="UDCASENO">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="uddate">UD Case Date:</label>
                                        <input type="text" class="form-control datepicker-autoclose" name="UDCASEDATE" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="unit">Unit <span class="text-danger">*</span></label>
                                        <select class="form-control" required="required" id="unit" name="OTHER_UNIT">
                                            <option value="DD">DD</option>
                                            <option value="EB">EB</option>
                                            <option value="SCO">SCO</option>
                                            <option value="SB">SB</option>
                                            <option value="STF">STF</option>
                                            <option value="TP">TP</option>
                                            <option value="PS" selected>PS</option>
                                            <option value="CID">CID</option>
                                            <option value="CBI">CBI</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="io">Investigating Officer <span class="text-danger">*</span></label>
                                        <select class="form-control" required="required" id="io" name="IO">
                                            <option selected="selected" disabled="disabled">Select IO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <h5 class="text-danger">*Note: To add New IO go to Master Data</h5>
                            <br/>
                            <h4 class="header-title m-t-0">Complainant Details</h4>
                            <hr/>
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="cmpname">Complainant Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control upprCase spclChar" name="COMPLAINANT" required="required">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="age">Age </label>
                                        <input type="text" class="form-control" name="COMPLAINANT_AGE" id="age">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="sex">Sex </label>
                                        <select id="sex" class="form-control" name="COMPLAINANT_SEX">
                                            <option selected="selected" disabled="disabled">Select</option>
                                            <option value="F">Female</option>
                                            <option value="M">Male</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="religion">Religion </label>
                                        <select id="religion" class="form-control" name="RELIGION">
                                            <option selected="selected" disabled="disabled">Select</option>
                                            <?php foreach($religion as $rel){ ?>
                                            <option value="<?php echo $rel['RELIGION'];?>"><?php echo $rel['RELIGION'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="nationality">Nationality </label>
                                        <select id="nationality" class="form-control" name="NATIONALITY">
                                            <option selected="selected" disabled="disabled">Select</option>
                                            <?php foreach($nationality as $nat){ ?>
                                            <option value="<?php echo $nat['Nationality'];?>"><?php echo $nat['Nationality'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="caste">Caste </label>
                                        <select id="caste" class="form-control" name="CASTE">
                                            <option selected="selected" disabled="disabled">Select</option>
                                            <?php foreach($caste as $cas){ ?>
                                            <option value="<?php echo $cas['CASTE'];?>"><?php echo $cas['CASTE'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="mobile">Mobile No </label>
                                        <input type="number" class="form-control" name="COMPLAINANT_CONTACTNO" id="mobile">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="idcat">ID Category </label>
                                        <select id="idcat" class="form-control" name="COMPLAINANT_IDTYPE">
                                            <?php foreach($idcat as $idcat){ ?>
                                            <option value="<?php echo $idcat['IDTYPE'];?>"><?php echo $idcat['IDTYPE'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="idno">ID No <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="COMPLAINANT_IDNO" id="idno" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="father_husband">Father/Husband </label>
                                        <select id="father_husband" class="form-control">
                                            <option selected="selected" disabled="disabled">Select</option>
                                            <option value="Father">Father</option>
                                            <option value="Husband">Husband</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="f_h_name">Father/Husband's Name </label>
                                        <input type="text" class="form-control upprCase spclChar" name="FATHER_NAME" id="f_h_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="address">Address </label>
                                        <input type="text" class="form-control upprCase" name="COMPLAINANT_ADDR" id="address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="brieffact">Brief Fact (<span id="char" class="text-danger">4000</span> <span class="text-danger">Characters Remaining</span>)</label>
                                        <textarea id="brieffact" class="form-control" name="BRIEF_FACT"></textarea>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <h4 class="header-title m-t-0">FIR Victim Details</h4>
                            <hr/>
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table kpTable appendtable">
                                        <thead>
                                            <tr>
                                                <th class="tw5">Sl No.</th>
                                                <th class="tw13">Victim Name<span class="text-danger">*</span></th>
                                                <th class="tw6">Age</th>
                                                <th class="tw11">Sex</th>
                                                <th class="tw15">Address</th>
                                                <th class="tw13">Religion</th>
                                                <th class="tw15">Caste</th>
                                                <th class="tw10">Nationality</th>
                                                <th class="tw13">Relationship</th>
                                                <th class="tw5"><i class="fa fa-plus text-success addrow"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" name="VIC_SLNO[]" id="sl" required="required" value="1" readonly="readonly">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control upprCase spclChar" name="VIC_VICTIM[]" id="" required="required">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="VIC_AGE[]" id="">
                                                </td>
                                                <td>
                                                    <select id="" class="form-control" name="VIC_SEX[]">
                                                        <option selected="selected" value="">Select</option>
                                                        <option value="M">Male</option>
                                                        <option value="F">Female</option>
                                                        <option value="O">Others</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="VIC_ADDRESS[]" id="">
                                                </td>
                                                <td>
                                                    <select id="" class="form-control" name="VIC_RELIGION[]">
                                                        <option selected="selected" value="">Select</option>
                                                        <?php foreach($religion as $rel){ ?>
                                                            <option value="<?php echo $rel['RELIGION'];?>"><?php echo $rel['RELIGION'];?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select id="" class="form-control" name="VIC_CASTE[]">
                                                        <option selected="selected" value="">Select</option>
                                                        <?php foreach($caste as $cas){ ?>
                                                            <option value="<?php echo $cas['CASTE'];?>"><?php echo $cas['CASTE'];?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select id="" class="form-control" name="VIC_NATIONALITY[]">
                                                        <option selected="selected" value="">Select</option>
                                                        <?php foreach($nationality as $nat){ ?>
                                                            <option value="<?php echo $nat['Nationality'];?>"><?php echo $nat['Nationality'];?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select id="" class="form-control" name="RELATIONSHIP[]">
                                                        <option selected="selected" value="">Select</option>
                                                        <?php foreach($relationship as $relation){ ?>
                                                            <option value="<?php echo $relation['RELATIONSHIP'];?>"><?php echo $relation['RELATIONSHIP'];?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                                <td><i class="fa fa-minus text-pink m-t-10 deleterow"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br/>
                            <h4 class="header-title m-t-0">Date and Time of Incidence</h4>
                            <hr/>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="timing">Timing</label>
                                        <select id="timing" class="form-control" name="OCCUR_TIMING">
                                            <option selected="selected" disabled="disabled">Select Timing</option>
                                            <option value="Day">Day</option>
                                            <option value="Early Morning">Early Morning</option>
                                            <option value="Morning">Morning</option>
                                            <option value="Evening">Evening</option>
                                            <option value="Night">Night</option>
                                            <option value="Late Night">Late Night</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Occured on/Between</label>
                                        <div>
                                            <input class="form-control input-daterange-datepicker" type="text" name="OCCUR_FROM_DT" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Occured at/between (From)</label>
                                        <input id="timepicker" type="text" class="form-control" name="OCCUR_FROM_TIME">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Occured at/between (To)</label>
                                        <input id="timepicker3" type="text" class="form-control" name="OCCUR_TO_TIME">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="other">Other</label>
                                        <input type="text" class="form-control" name="OCCUR_DETAILS" id="other">
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <h4 class="header-title m-t-0">Area of Crime</h4>
                            <hr/>
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="crimearea">Crime Area</label>
                                        <input type="text" class="form-control" name="CRIME_AREA" id="crimearea">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="street">Street</label>
                                        <input type="text" class="form-control" name="CRIME_STREET" id="">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="gdeno">PS Beat No</label>
                                        <input type="text" class="form-control" name="PS_BEAT_NO" id="">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="gdeno">Latitude<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" required="required" name="PO_LAT" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="gdeno">Longitude <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" required="required" class="form-control" name="PO_LONG" id="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <h4 class="header-title m-t-0">Undersection <span class="text-danger">*</span></h4>
                            <hr/>
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table kpTable appendtable">
                                        <thead>
                                            <tr>
                                                <th class="tw5">Sl No.</th>
                                                <th class="tw15">Law</th>
                                                <th class="tw30">Category Of Crime</th>
                                                <th class="tw15">Undersection</th>
                                                <th class="tw30">Modus Operandi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" name="US_SLNO" id="" readonly="readonly" value="1">
                                                </td>
                                                <td>
                                                    <select id="law" class="form-control" required="required" name="US_CLASS">
                                                        <option selected="selected" disabled="disabled">Select</option>
                                                        <option value="IPC">IPC</option>
                                                        <option value="SLL">SLL</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select id="cat" class="form-control" required="required" name="CATEGORY">
                                                        <option selected="selected" disabled="disabled">Select</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="UNDER_SECTION" id="" required="required">
                                                </td>
                                                <td>
                                                    <select class="form-control" name="MOD_OPER">
                                                        <option selected="selected" disabled="disabled">Select</option>
                                                        <?php foreach($mod_oper as $mod_oper){ ?>
                                                            <option value="<?php echo $mod_oper['MOD_OPER'];?>"><?php echo $mod_oper['MOD_OPER'];?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr/>
                            <h4 class="header-title m-t-0">Accused Personal Details</h4><br>
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="cat">Accused Category </label>
                                        <select id="" class="form-control">
                                            <option value="FIR">FIR</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="card-box">
                                        <div class="panel-body append_panel">
                                            <div class="append_row">
                                                <div class="row">
                                                    <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="slno">Sl No.</label>
                                                            <input type="text" readonly="readonly" class="form-control" name="" id="slno" value="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="name">Accused Name <span style="color:red"> *</span></label>
                                                            <input type="text" class="form-control" name="" id="" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="alias1">Alias 1 </label>
                                                            <input type="text" class="form-control" name="" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="alias2">Alias 2 </label>
                                                            <input type="text" class="form-control" name="" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="alias3">Alias 3 </label>
                                                            <input type="text" class="form-control" name="" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="alias4">Alias 4 </label>
                                                            <input type="text" class="form-control" name="" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="age">Age</label>
                                                            <input type="text" readonly="readonly" class="form-control" name="" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="sex">Sex</label>
                                                            <select id="" class="form-control">
                                                                <option selected="selected" disabled="disabled">Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="religion">Religion </label>
                                                            <select id="" class="form-control">
                                                                <option selected="selected" disabled="disabled">Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="nationality">Nationality</label>
                                                            <select id="" class="form-control">
                                                                <option selected="selected" disabled="disabled">Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="caste">Caste</label>
                                                            <select id="" class="form-control">
                                                                <option selected="selected" disabled="disabled">Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="birthyr">Birth Year</label>
                                                            <input type="text" class="form-control year" name="" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="father_husband">Father/Husband </label>
                                                            <select id="" class="form-control">
                                                                <option selected="selected" disabled="disabled">Select</option>
                                                                <option value="Father">Father</option>
                                                                <option value="Husband">Husband</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="f_h_name">Father/Husband('s) Name </label>
                                                            <input type="text" class="form-control" name="" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="idcat">ID Category </label>
                                                            <select id="" class="form-control">
                                                                <option selected="selected" disabled="disabled">Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="idno">ID No </label>
                                                            <select id="" class="form-control">
                                                                <option selected="selected" disabled="disabled">Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="occupation">Occupation</label>
                                                            <select id="" class="form-control">
                                                                <option selected="selected" disabled="disabled">Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <textarea id="" class="form-control" name=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12 text-center">
                                                        <button class="btn btn-rounded btn-purple waves-effect waves-light m-t-50" data-toggle="modal" data-target="#con-close-modal">Details</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-offset-11">
                                                    <i class="fa fa-plus text-success f20 add"></i> &nbsp;&nbsp;&nbsp;
                                                    <i class="fa fa-minus text-danger f20 delete"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="fa fa-save"></i> Save & Next <i class="fa fa-arrow-right"></i></button>
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
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="slno" class="control-label">Sl No</label>
                            <input type="text" class="form-control" id="" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="firno" class="control-label">FIR No</label>
                            <input type="text" class="form-control" id="" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="ps" class="control-label">PS</label>
                            <input type="text" class="form-control" id="" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="year" class="control-label">Case Year</label>
                            <input type="text" class="form-control" id="" readonly="readonly">
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <h4 class="header-title m-t-0">Descriptive Roles</h4>
            <hr/>
            <div class="modal-body">
                <div class="row">
                   <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="ear">Ear</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="eye">Eye</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="face">Face</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="frhd">Forehead</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="hair">Hair</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="eyebrw">Eyebrow</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="moustache">Moustache</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="nose">Nose</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="beard">Beard</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="cmplxn">Complexion</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="mole">Mole</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="blt">Built</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="brnmrk">Burn Mark</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="scrmrk">Scar Mark</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="tatto">Tatto Mark</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="cut">Cut Mark</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="birthmrk">Birth Mark</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="wart">Wart Mark</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="deformity">Deformity</label>
                            <select id="" class="form-control">
                                <option selected="selected" disabled="disabled">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="roughsec">Rough Section</label>
                            <input type="text" name="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="roughpart">Rough Part</label>
                            <input type="text" name="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="idntifr">Identifier</label>
                            <input type="text" name="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="ft">Height in Feet</label>
                            <input type="text" name="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="cms">Height in Cms</label>
                            <input type="text" name="" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Save</button>
            </div>
        </div>
    </div>
</div>
