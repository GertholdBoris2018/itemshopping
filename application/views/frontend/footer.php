<!-- start: FOOTER -->
<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 padding-bottom-25">
                    <a class="logo" href="index.html"> <img alt="Just Ask" src="<?php echo FRONTENDNEW_IMAGES_PATH;?>logo_en.png"> </a>
                    <p class="padding-top-20">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Nulla consequat massa quis enim. Donec pede justo fringilla vel, aliquet nec, vulputate eget, arcu...
                    </p>
                    <button type="button" class="btn btn-red margin-top-15 btn-block btn-scroll btn-scroll-top fa-shopping-cart">
                        <span>Buy Now</span>
                    </button>
                </div>
                <div class="col-md-3 padding-bottom-25">
                    <h4 class="margin-bottom-25">Latest Tweet</h4>
                    <div class="twitter margin-bottom-15" id="tweet">
                        <i class="fa fa-twitter pull-left"></i>
                        <p class="padding-left-30">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.
                            <a href="#" class="time"> 12 Dec </a>
                        </p>
                    </div>
                    <div class="twitter margin-bottom-15" id="tweet">
                        <i class="fa fa-twitter pull-left"></i>
                        <p class="padding-left-30">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.
                            <a href="#" class="time"> 12 Dec </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 padding-bottom-25">
                    <div class="contact-details">
                        <h4 class="margin-bottom-25">Recent Posts</h4>
                        <ul class="posts">
                            <li>
                                <a href="#"> MVC directory structure </a>
                            </li>
                            <li>
                                <a href="#"> Dependency injection </a>
                            </li>
                            <li>
                                <a href="#"> Service vs Factory </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 padding-bottom-25">
                    <h4 class="margin-bottom-25">Follow Us</h4>
                    <div class="social-icons">
                        <ul>
                            <li class="social-twitter tooltips" data-original-title="Twitter" data-placement="bottom">
                                <a target="_blank" href="#"> Twitter </a>
                            </li>
                            <li class="social-facebook tooltips" data-original-title="Facebook" data-placement="bottom">
                                <a target="_blank" href="#" data-original-title="Facebook"> Facebook </a>
                            </li>
                            <li class="social-google tooltips" data-original-title="LinkedIn" data-placement="bottom">
                                <a target="_blank" href="#" data-original-title="LinkedIn"> Google + </a>
                            </li>
                            <li class="social-linkedin tooltips" data-original-title="LinkedIn" data-placement="bottom">
                                <a target="_blank" href="#" data-original-title="LinkedIn"> LinkedIn </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            &copy; Copyright <span class="current-year"></span> by Appbank888. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <nav id="sub-menu">
                            <ul>
                                <li>
                                    <a href="#"> FAQ's </a>
                                </li>
                                <li>
                                    <a href="#"> Sitemap </a>
                                </li>
                                <li>
                                    <a href="#"> Contact </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a id="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
        <!-- end: FOOTER -->
</div>
<!-- end: APP CONTENT -->
</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="<?php echo BOWER_COMPONENT_PATH;?>jquery/dist/jquery.min.js"></script>
		<script src="<?php echo BOWER_COMPONENT_PATH;?>bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="<?php echo BOWER_COMPONENT_PATH;?>bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="<?php echo BOWER_COMPONENT_PATH;?>sticky-kit/jquery.sticky-kit.min.js"></script>
		<script src="<?php echo BOWER_COMPONENT_PATH;?>jquery.appear.js/jquery.appear.js"></script>
		<script src="<?php echo BOWER_COMPONENT_PATH;?>slick.js/slick/slick.min.js"></script>
		<script src="<?php echo BOWER_COMPONENT_PATH;?>swiper/dist/js/swiper.jquery.min.js"></script>
		<script src="<?php echo BOWER_COMPONENT_PATH;?>jquery.stellar/jquery.stellar.min.js"></script>
		<script src="<?php echo BOWER_COMPONENT_PATH;?>countto/jquery.countTo.js"></script>
		<script src="<?php echo BOWER_COMPONENT_PATH;?>magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo FRONTENDNEW_JS_PATH;?>main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo FRONTENDNEW_JS_PATH;?>index.js"></script>
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="<?php echo BOWER_COMPONENT_PATH;?>gmaps/gmaps.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo FRONTENDNEW_JS_PATH;?>contact.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo FRONTENDNEW_JS_PATH;?>animations.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo FRONTENDNEW_JS_PATH;?>blog.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo BOWER_COMPONENT_PATH;?>mixitup/build/jquery.mixitup.min.js"></script>
        <script src="<?php echo FRONTENDNEW_JS_PATH;?>portfolio.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
				Blog.init();
                Portfolio.init();
			});
		</script>
	</body>
</html>