<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Communal Situation</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data</a></li>
                            <li><a href="#">Special Report</a></li>
                            <li class="active">Edit Communal Situation</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-color panel-teal">
                        <div class="panel-heading text-right">
                            <a href="<?php echo base_url(); ?>SpecialReport/CommunalSituation" class="f18 text-white"><i class="ion-android-system-back"></i> Back</a>
                        </div>
                        <?php
                            echo form_open('#', array('id'=>'firform','data-parsley-validate'=>''));
                        ?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 sl">
                                    <label for="cmnlsit">Communal Situation</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div> 
                        <!-- BUTTON OUTSIDE PANEL -->
                        <div class="row text-center">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="fa fa-refresh"></i> Update</button>
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