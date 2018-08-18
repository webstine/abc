<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Update Prosecution Under Minor Acts</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data</a></li>
                            <li><a href="#">Special Report</a></li>
                            <li><a href="#">Prosecution Under Minor Acts List</a></li>
                            <li class="active">Update</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-color panel-teal">
                        <div class="panel-heading text-right">
                            <a href="<?php echo base_url(); ?>SpecialReport/ProsecutionUnderMinorActs" class="f18 text-white"><i class="ion-android-system-back"></i> Back</a>
                        </div>
                        <div class="panel-body">
                        <?php
                            echo form_open('#', array('id'=>'firform','data-parsley-validate'=>''));
                        ?>
                            <div class="row">
                                <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                    <label for="slno">Sl No.</label>
                                    <input type="text" readonly="readonly" class="form-control" name="" id="">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Minor Acts </label>
                                        <select id="" class="form-control" required="">
                                            <option selected="selected" disabled="disabled">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Undersection </label>
                                        <input type="text" readonly="readonly" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Person Arrested</label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Person Prosecuted</label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Remarks </label>
                                        <input type="text" class="form-control" name="" id="" required="">
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row text-center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light"><i class="fa fa-refresh"></i> Update</button>
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