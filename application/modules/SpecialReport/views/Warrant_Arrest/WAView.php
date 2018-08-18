<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Status of Warrant of Arrest Execution</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data</a></li>
                            <li><a href="#">Special Report</a></li>
                            <li class="active">Warrant of Arrest Execution</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            <h3 class="m-t-0 header-title"><b>W.A.E status of <?php echo $this->session->userdata('PSNAME');?> on <span class="date"><?php echo $this->session->userdata('LAST_RECORD_DATE');?></span></b></h3>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered m-0">
                                        <thead>
                                            <tr>
                                                <th class="text-center" colspan="2">Execution</th>
                                                <th class="text-center" colspan="2">Recall</th>
                                                <th class="text-center" colspan="2">Otherwise Disposed</th>
                                                <th class="text-center" colspan="2">Received</th>
                                                <th class="text-center" colspan="2">Pending</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center text-pink"><b>Red</b></td>
                                                <td class="text-center text-primary"><b>Blue</b></td>
                                                <td class="text-center text-pink"><b>Red</b></td>
                                                <td class="text-center text-primary"><b>Blue</b></td>
                                                <td class="text-center text-pink"><b>Red</b></td>
                                                <td class="text-center text-primary"><b>Blue</b></td>
                                                <td class="text-center text-pink"><b>Red</b></td>
                                                <td class="text-center text-primary"><b>Blue</b></td>
                                                <td class="text-center text-pink"><b>Red</b></td>
                                                <td class="text-center text-primary"><b>Blue</b></td>
                                            </tr>
                                            <tr>
                                                <td><input type="number" name="" class="form-control"></td>
                                                <td><input type="number" name="" class="form-control"></td>
                                                <td><input type="number" name="" class="form-control"></td>
                                                <td><input type="number" name="" class="form-control"></td>
                                                <td><input type="number" name="" class="form-control"></td>
                                                <td><input type="number" name="" class="form-control"></td>
                                                <td><input type="number" name="" class="form-control"></td>
                                                <td><input type="number" name="" class="form-control"></td>
                                                <td><input type="number" name="" class="form-control"></td>
                                                <td><input type="number" name="" class="form-control"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row text-center">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light"><i class="fa fa-refresh"></i> Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div> <!-- content -->
</div>
<?php $this->load->view('includes/contentFooter'); ?>