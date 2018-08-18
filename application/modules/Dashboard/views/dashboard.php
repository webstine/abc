<div class="content-page"><!-- Start content -->
    <div class="content">
        <div class="container">
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-color panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Recent Users</h3>
                        </div>
                        <div class="panel-body">
                            
                        </div> <!-- end panel body -->
                    </div>
                    <!-- end panel -->
                </div>

                <div class="col-md-4">
                    <div class="panel panel-color panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Facts & Figures
                                <input type="hidden" id="dbdate">
                                <i class="glyphicon glyphicon-calendar pull-right datepicker-autoclose add"></i></h3>
                        </div>
                        <div class="panel-body">

                            <div class="inbox-widget slimscroll-alt" id="dbfacts" style="min-height: 350px;">
                                
                                <?php echo dashboardFacts($facts); ?>
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
            </div>
        </div> <!-- container -->
    </div> <!-- content -->
    <?php $this->load->view('includes/contentFooter'); ?>
</div>
