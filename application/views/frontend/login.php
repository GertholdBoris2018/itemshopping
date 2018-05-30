<!-- start: APP CONTENT -->
<div class="app-content">
    <div class="main-content">
        <div class="container">
            <section id="page-title">
                <div class="container">
                    <div class="col-md-4 col-md-offset-4">
                    <img id="profile-img" class="profile-img-card" src="https://static.wixstatic.com/media/a3979e_ad1e5ed291cc458b83b2c0d5d51964c0~mv2.png/v1/fill/w_72,h_68,al_c,usm_0.66_1.00_0.01/a3979e_ad1e5ed291cc458b83b2c0d5d51964c0~mv2.png" />
                        <!-- BEGIN FORM-->
                        <form role="form" class="horizontal-form margin-bottom-40" action="<?php echo base_url();?>frontend/login/doLogin" method = "post">
                            <div class="form-group">
                                <label class="control-label"> Name <span class="symbol required"></span> </label>
                                <input type="text" placeholder="Insert your Name" class="form-control" id="username" name="username" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="form-field-22"> Password <span class="symbol required"></span> </label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <button data-caption-delay="900" data-caption-class="fadeIn" class="btn btn-primary margin-top-15 opacity-0 btn-block btn-scroll btn-scroll-top fa-arrow-right animated fadeIn" type="submit">
                                <span>Sign in</span>
                            </button>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
            </section>
        </div>
    </div>