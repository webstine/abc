<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('includes/header'); ?>
	<body class="fixed-left">
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                    	<div class="inner-spin"></div>
                    	<div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- Begin page -->
        <div id="wrapper">
        	<?php $this->load->view('includes/topbar'); ?>
        	<?php $this->load->view('includes/sidebar'); ?>
            <?php echo $subview; ?>
        </div>
        <!-- End page -->
        <?php $this->load->view('includes/footer'); ?>
    </body>
</html>