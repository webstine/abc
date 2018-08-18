<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Unit IO</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Master Data</a></li>
                            <li class="active">Unit IO</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row text-right">
                            <button class="btn btn-primary btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-plus"></i> Add New IO</button>
                        </div>
                        <hr/>

                        <div class="table-responsive">
                                <ul class="nav nav-tabs navtab-bg nav-justified">
                                    <li class="active">
                                        <a href="#tp" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs">T.P</span>
                                            <span class="hidden-xs">T.P</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#dd" data-toggle="tab" aria-expanded="true">
                                            <span class="visible-xs">D.D</span>
                                            <span class="hidden-xs">D.D</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#eb" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs">E.B</span>
                                            <span class="hidden-xs">E.B</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#sb" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs">S.B</span>
                                            <span class="hidden-xs">S.B</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#stf" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs">S.T.F</span>
                                            <span class="hidden-xs">S.T.F</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#sco" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs">S.C.O</span>
                                            <span class="hidden-xs">S.C.O</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tp">
                                        <table id="datatable" class="table table-striped table-colored table-teal KPdatatable">
                                            <thead>
                                                <tr>
                                                    <th>PSCODE</th>
                                                    <th>IO NAME</th>
                                                    <th>IO CODE</th>
                                                    <th>GPFNO</th>
                                                    <th>ACTIVE</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="dd">
                                        <table id="datatable2" class="table table-striped table-colored table-teal KPdatatable">
                                            <thead>
                                                <tr>
                                                    <th>PSCODE</th>
                                                    <th>IO NAME</th>
                                                    <th>IO CODE</th>
                                                    <th>GPFNO</th>
                                                    <th>ACTIVE</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="eb">
                                        <table id="datatable3" class="table table-striped table-colored table-teal KPdatatable">
                                            <thead>
                                                <tr>
                                                    <th>PSCODE</th>
                                                    <th>IO NAME</th>
                                                    <th>IO CODE</th>
                                                    <th>GPFNO</th>
                                                    <th>ACTIVE</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="sb">
                                        <table id="datatable4" class="table table-striped table-colored table-teal KPdatatable">
                                            <thead>
                                                <tr>
                                                    <th>PSCODE</th>
                                                    <th>IO NAME</th>
                                                    <th>IO CODE</th>
                                                    <th>GPFNO</th>
                                                    <th>ACTIVE</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="stf">
                                        <table id="datatable5" class="table table-striped table-colored table-teal KPdatatable">
                                            <thead>
                                                <tr>
                                                    <th>PSCODE</th>
                                                    <th>IO NAME</th>
                                                    <th>IO CODE</th>
                                                    <th>GPFNO</th>
                                                    <th>ACTIVE</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="sco">
                                        <table id="datatable6" class="table table-striped table-colored table-teal KPdatatable">
                                            <thead>
                                                <tr>
                                                    <th>PSCODE</th>
                                                    <th>IO NAME</th>
                                                    <th>IO CODE</th>
                                                    <th>GPFNO</th>
                                                    <th>ACTIVE</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</div> <!-- content -->

<!-- ADD NEW MODAL -->
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="header-title m-t-0">Add New Investigating Officer</h4>
            </div>
            <br/>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="demo-box">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>I.O. Code</label>
                                        <input type="text" name="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>I.O. Name</label>
                                        <input type="text" name="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>GPF No</label>
                                        <input type="text" name="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Select PS</label>
                                        <select class="form-control" name="">
                                            <option selected="selected" disabled="disabled">Select PS</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Save</button>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/contentFooter'); ?>