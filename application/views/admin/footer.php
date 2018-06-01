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
	</body>
</html>