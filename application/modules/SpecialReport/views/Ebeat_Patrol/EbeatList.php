<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Ebeat Patrol</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data</a></li>
                            <li><a href="#">Special Report</a></li>
                            <li class="active">Ebeat Patrol</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            <h4 class="m-t-0 header-title"><b>Existing Records of <?php echo $this->session->userdata('PSNAME');?> on <span class="date"><?php echo $this->session->userdata('LAST_RECORD_DATE');?></span></b></h4>
                            <div class="text-right">
                                <button class="btn btn-primary btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-plus"></i> Add New</button>
                            </div>
                        </div>
                        <hr/>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-colored table-teal">
                                <thead>
                                    <tr>
                                        <th>Ambit</th>
                                        <th>Force Detailed</th>
                                        <th>Timing</th>
                                        <th>Comm. Equipment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container -->
</div> <!-- content -->


<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="header-title m-t-0">Ebeat Patrol</h4>
            </div>
            <br/>
            <div class="modal-body">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table m-0 appendtable">
                            <thead>
                                <tr>
                                    <th class="text-center">PS</th>
                                    <th class="text-center">Ambit</th>
                                    <th class="text-center">Timing</th>
                                    <th class="text-center">
                                        <i class="fa fa-plus f18 text-success addrow"></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" name="" class="form-control" id="">
                                    </td>
                                    <td>
                                        <input type="text" name="" class="form-control" id="">
                                    </td>
                                    <td>
                                        <input type="text" name="" class="form-control" id="">
                                    </td>
                                    <td>
                                        <i class="fa fa-minus text-danger f18 m-t-10 deleterow"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-rounded waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Save</button>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/contentFooter'); ?>