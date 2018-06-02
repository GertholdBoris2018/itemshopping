<!-- start: LOGIN -->
<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
                    <a href="/admin/dashboard" class="logo">
					    <img src="<?php echo FRONTENDNEW_IMAGES_PATH;?>logo_en.png" alt="Just Ask"/>                    
                    </a>
				</div>
				<!-- start: LOGIN BOX -->
				<div class="box-login">
					<form class="form-login" action="<?php echo base_url();?>admin/dashboard/login"  method="post">
						<fieldset>
							<legend>
								<?php echo lang('admin_login_form_guide');?>
							</legend>
							<p>
                                <?php echo lang('admin_login_form_label');?>
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="emailaddress" placeholder="Username">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password">
									<i class="fa fa-lock"></i>
									<a class="forgot" href="javascript:;">
										<?php echo lang('admin_login_form_forgetpw');?>
									</a> </span>
							</div>
							<div class="form-actions">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="remember" value="1">
									<label for="remember">
										<?php echo lang('admin_login_keep_me_sign_in');?>
									</label>
								</div>
								<button type="submit" class="btn btn-primary pull-right">
									<?php echo lang('admin_login_form_btn');?> <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<!-- <div class="new-account">
								Don't have an account yet?
								<a href="login_registration.html">
									Create an account
								</a>
							</div> -->
						</fieldset>
					</form>
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> Appbank888</span>. <span>All rights reserved</span>
					</div>
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: LOGIN BOX -->
			</div>
		</div>
		<!-- end: LOGIN -->