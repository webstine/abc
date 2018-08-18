<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Minor Acts</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Master Data</a></li>
                            <li class="active">Minor Acts</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            <h4 class="m-t-0 header-title"><b>Minor Acts</b></h4>
                            <div class="text-right">
                                <button class="btn btn-primary btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-plus"></i> Add New</button>
                            </div>
                        </div>
                        <hr/>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-colored table-teal">
                                <thead>
                                    <tr>
                                        <th class="text-center">Minor Acts</th>
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
<?php $this->load->view('includes/contentFooter'); ?>
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="header-title m-t-0">Add New Minor Acts</h4>
            </div>
            <br/>
            <div class="modal-body">
                <div class="row">
                    <div class="demo-box">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Minor Act Name</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>
                        </div>
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