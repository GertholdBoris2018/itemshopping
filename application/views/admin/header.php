<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Clip-Two - Responsive Admin Template</title>
		<!-- start: META -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: GOOGLE FONTS -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<!-- end: GOOGLE FONTS -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="<?php echo ADMIN_NEW_VENDER_PATH?>bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo ADMIN_NEW_VENDER_PATH?>fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo ADMIN_NEW_VENDER_PATH?>themify-icons/themify-icons.min.css">
		<link href="<?php echo ADMIN_NEW_VENDER_PATH?>animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo ADMIN_NEW_VENDER_PATH?>perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo ADMIN_NEW_VENDER_PATH?>switchery/switchery.min.css" rel="stylesheet" media="screen">
		<!-- end: MAIN CSS -->
		<!-- start: CLIP-TWO CSS -->
		<link rel="stylesheet" href="<?php echo ADMIN_NEW_CSS_PATH?>styles.css">
		<link rel="stylesheet" href="<?php echo ADMIN_NEW_CSS_PATH?>plugins.css">
        <?php
            if(isset($selected) && $selected != 'login'){ ?>
		        <link rel="stylesheet" href="<?php echo ADMIN_NEW_CSS_PATH?>themes/theme-1.css" id="skin_color" />
            <?php
            }
        ?>
		<!-- end: CLIP-TWO CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link href="<?php echo ADMIN_NEW_VENDER_PATH?>select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo ADMIN_NEW_VENDER_PATH?>DataTables/css/DT_bootstrap.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="<?php echo ADMIN_NEW_CSS_PATH?>rtl.css"/>
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->

		<!-- start: MAIN JAVASCRIPTS -->
<script src="<?php echo ADMIN_NEW_VENDER_PATH?>jquery/jquery.min.js"></script>
		<script src="<?php echo ADMIN_NEW_VENDER_PATH?>bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo ADMIN_NEW_VENDER_PATH?>modernizr/modernizr.js"></script>
		<script src="<?php echo ADMIN_NEW_VENDER_PATH?>jquery-cookie/jquery.cookie.js"></script>
		<script src="<?php echo ADMIN_NEW_VENDER_PATH?>perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="<?php echo ADMIN_NEW_VENDER_PATH?>switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo ADMIN_NEW_VENDER_PATH?>Chart.js/Chart.min.js"></script>
		<script src="<?php echo ADMIN_NEW_VENDER_PATH?>jquery.sparkline/jquery.sparkline.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo ADMIN_NEW_VENDER_PATH?>jquery-validation/jquery.validate.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="<?php echo ADMIN_NEW_JS_PATH?>main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="<?php echo ADMIN_NEW_JS_PATH?>login.js"></script>
        <?php
            if(isset($selected) && $selected != 'login'){?>
        <!-- start: JavaScript Event Handlers for this page -->
		<script src="<?php echo ADMIN_NEW_JS_PATH?>index.js"></script>
        <?php
        }
        ?>
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo ADMIN_NEW_VENDER_PATH?>select2/select2.min.js"></script>
		<script src="<?php echo ADMIN_NEW_VENDER_PATH?>DataTables/jquery.dataTables.min.js"></script>
		<script src="http://malsup.github.io/jquery.blockUI.js"></script>
		<script src="<?php echo ADMIN_NEW_JS_PATH?>jquery.mockjax.min.js"></script>
		<script src="<?php echo ADMIN_NEW_JS_PATH?>bootbox.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="<?php echo ADMIN_NEW_JS_PATH?>main.js"></script>
		<script src="<?php echo ADMIN_NEW_JS_PATH?>form-validation.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script>
			jQuery(document).ready(function() {
                Main.init();
                <?php
                if(isset($selected) && $selected != 'login'){?>
                    Index.init();
                <?php
                    }
                ?>
				
                Login.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</head>
    <body class="<?php echo isset($selected) && $selected == 'login'?'login':'';?>">