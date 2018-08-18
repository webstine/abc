<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Accused Details</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data</a></li>
                            <li><a href="#">Special Report</a></li>
                            <li><a href="#">FIR</a></li>
                            <li class="active">Accused Details</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0">FIR Details</h4>
                        <hr/>
                        <?php
                            echo form_open('#', array('id'=>'firform','data-parsley-validate'=>''));
                        ?>
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="ps">PS</label>
                                        <input type="text" readonly="readonly" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="firno">FIR No </label>
                                        <input type="text" readonly="readonly" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="firyr">FIR Year </label>
                                        <input type="text" readonly="readonly" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="cat">Accused Category </label>
                                        <select id="" class="form-control">
                                            <option selected="selected" disabled="disabled">Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0">Accused Personal Details</h4>
                        <hr/>
                        <div class="panel-body append_panel">
                            <div class="append_row">
                                <div class="row">
                                    <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="slno">Sl No.</label>
                                            <input type="text" readonly="readonly" class="form-control" name="" id="">
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
                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
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
                                    <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
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
        </div> <!-- container -->
    </div> <!-- content -->
</div>
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