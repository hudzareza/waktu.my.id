<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $title ?></title>
<<<<<<< Updated upstream
		<link rel="shortcut icon" href="favicon.ico">
		<!-- jQuery -->
	    <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js') ?>"></script>
=======
		<link rel="shortcut icon" href="<?php echo base_url('favicon.ico') ?>">
>>>>>>> Stashed changes
		<!-- Bootstrap -->
	    <link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
	    <!-- Font Awesome -->
	    <link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	    <!-- NProgress -->
	    <link href="<?php echo base_url('vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
	    <!-- jQuery custom content scroller -->
	    <link href="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') ?>" rel="stylesheet"/>
	    <!-- Custom Theme Style -->
	    <link href="<?php echo base_url('assets/css/custom.min.css') ?>" rel="stylesheet">
	    <!-- SUMMERNOTE -->
	    <link href="<?php echo base_url('vendors/summernote/dist/summernote.css') ?>" rel="stylesheet">
	    

<<<<<<< Updated upstream
		<link href="<?php echo base_url('vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">

	    <!-- bootstrap-wysiwyg -->
	    <link href="<?php echo base_url('vendors/google-code-prettify/bin/prettify.min.css') ?>" rel="stylesheet">
	    <!-- Select2 -->
	    <link href="<?php echo base_url('vendors/select2/dist/css/select2.min.css') ?>" rel="stylesheet">
	    <!-- Switchery -->
	    <link href="<?php echo base_url('vendors/switchery/dist/switchery.min.css') ?>" rel="stylesheet">
	    <!-- starrr -->
	    <link href="<?php echo base_url('vendors/starrr/dist/starrr.css') ?>" rel="stylesheet">

	    <!-- bootstrap-progressbar -->
	    <link href="<?php echo base_url('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">
	    <!-- JQVMap -->
	    <link href="<?php echo base_url('vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet"/>
	    <!-- bootstrap-daterangepicker -->
	    <link href="<?php echo base_url('vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">

	    <!-- Custom Theme Style -->
	    <link href="<?php echo base_url('build/css/custom.min.css') ?>" rel="stylesheet">
	    <link href="<?php echo base_url('assets/css/master.css') ?>" rel="stylesheet">

=======
		<style media="screen">
	        .file-drag-handle {

	            display: none;
	        }
	    </style>
>>>>>>> Stashed changes
	</head>
	<body class="nav-md">

		<div class="container body">
			<div class="main_container">
				<?php echo $sidenavs ?>
				<?php echo $navs ?>
				<!-- Page Content -->
				<div class="right_col" role="main">
					<div>
						<div class="page-title">
							<div class="title_left">
								<h3><?php echo $header ?></h3>
							</div>
							<div class="title_right">
								<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for...">
										<span class="input-group-btn"><button class="btn btn-default" type="button">Go!</button></span>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<?php echo $content ?>
					</div>
				</div>
				<!-- /Page Content -->
				<!-- Footer Content -->
				<footer>
					<div class="pull-right">
						<?php echo $footer; ?>
					</div>
			        <div class="clearfix"></div>
				</footer>
				<!-- /Footer Content -->
			</div>
		</div>

	    <!-- Bootstrap -->
	   	<script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
	    <!-- NProgress -->
	    <script src="<?php echo base_url('vendors/nprogress/nprogress.js') ?>"></script>
	    <!-- jQuery custom content scroller -->
	    <script src="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
	    <!-- Custom Theme Scripts -->
	    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
	    <!-- NSUMMERNOTE -->
	    <script src="<?php echo base_url('vendors/summernote/dist/summernote.min.js') ?>"></script>

	    <script type="text/javascript">
	    	$(document).ready(function() {
		  		$('#artikelId').summernote({
			        placeholder: 'Tulis artikel anda disini',
			        minHeight: 400,
			        height: 100,
			        toolbar: [
				        ['para', ['ul', 'ol']],
				        ['insert', ['link', 'picture', 'video']],
				    ]
		      	});
			});
	    </script>

	</body>
</html>
