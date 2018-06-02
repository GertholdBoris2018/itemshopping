<!DOCTYPE html>
<!-- Template Name: Clip-Two - Frontend | Build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<html lang="en">
<!-- start: HEAD -->
<head>
    <title><?php echo lang('site_title');?></title>
    <!-- start: META -->
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link href="<?php echo BOWER_COMPONENT_PATH;?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo BOWER_COMPONENT_PATH;?>font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo BOWER_COMPONENT_PATH;?>themify-icons/themify-icons.css" rel="stylesheet" media="screen">
    <link href="<?php echo BOWER_COMPONENT_PATH;?>animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo BOWER_COMPONENT_PATH;?>slick.js/slick/slick.css" rel="stylesheet" media="screen" />
    <link href="<?php echo BOWER_COMPONENT_PATH;?>slick.js/slick/slick-theme.css" rel="stylesheet" media="screen" />
    <link href="<?php echo BOWER_COMPONENT_PATH;?>swiper/dist/css/swiper.min.css" rel="stylesheet" media="screen" />
    <link href="<?php echo BOWER_COMPONENT_PATH;?>magnific-popup/dist/magnific-popup.css" rel="stylesheet" media="screen" />
    <link href="<?php echo FRONTENDNEW_CSS_PATH;?>styles.css" rel="stylesheet" media="screen">
    <link href="<?php echo FRONTENDNEW_CSS_PATH;?>plugins.css" rel="stylesheet" media="screen">
    <!-- end: MAIN CSS -->
    <!-- start: FAVICON -->
    <link rel="shortcut icon" href="<?php echo FRONTENDNEW_IMAGES_PATH;?>favicon.png" />
    <!-- end: FAVICON -->
</head>
<!-- end: HEAD -->
<body>
    <div id="app">
        <!-- start: HEADER -->
        <header>
            <div class="navbar navbar-default" role="navigation">
                <!-- start: TOP NAVIGATION CONTAINER -->
                <div class="container">
                    <div class="navbar-header">
                        <!-- start: RESPONSIVE MENU TOGGLER -->
                        <a class="pull-left menu-toggler hidden-md hidden-lg mobile-button" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <i class="ti-align-justify"></i> </a>
                        <!-- end: RESPONSIVE MENU TOGGLER -->
                        <!-- start: RESPONSIVE MENU SEARCH -->
                        <a class="pull-right hidden-md hidden-lg margin-right-20 mobile-button mobile-menu-search" href="#"> <span class="sr-only">Search Button</span> <i class="ti-search"></i> </a>
                        <!-- end: RESPONSIVE MENU SEARCH -->
                        <!-- start: LOGO -->
                        <a href="<?php echo base_url();?>frontend/" class="navbar-brand"> 
                            <img src="<?php echo FRONTENDNEW_IMAGES_PATH.lang('site_logo_name');?>" alt="<?php echo lang('site_title');?>"> 
                        </a>
                        <!-- end: LOGO -->
                    </div>
                    <!-- start: NAVBAR -->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            
                            <?php
                                if(!$this->session->userdata('isCustomerlogin')){
                                    ?>
                                    <li class="dropdown" class="<?php echo isset($selected) && $selected == 'find'?'active':'';?>">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo lang('find_requirements');?></a>
                                        <ul class="dropdown-menu">
                                            <li class="padding-no"><a href="<?php echo base_url();?>frontend/pages/searchRequirement"><?php echo lang('search_requirements');?></a></li>
                                        </ul>
                                    </li>
                                    <li class="<?php echo isset($selected) && $selected == 'home'?'active':'';?>"><a href="<?php echo base_url();?>frontend/welcome"><?php echo lang('top_home');?></a></li>
                                    
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo lang('top_more');?></a>
                                        <ul class="dropdown-menu">
                                            <li class="padding-no"><a style='font-size:1em;' href="<?php echo base_url();?>frontend/pages/help"><?php echo lang('top_help');?></a></li>
                                            <li class="padding-no"><a style='font-size:1em;' href="#"><?php echo lang('top_settings');?></a></li>
                                        </ul>
                                    </li>

                                    
                                    <li class="<?php echo isset($selected) && $selected == 'about'?'active':'';?>"><a href="<?php echo base_url();?>frontend/about"><?php echo lang('top_contactus');?></a></li>                                    
                                    <li class="<?php echo isset($selected) && $selected == 'login'?'active':'';?>"><a href="<?php echo base_url();?>frontend/login"><?php echo lang('top_login');?></a></li>
                                <?php
                                }
                                else {
                                    ?>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo lang('find_requirements');?></a>
                                        <ul class="dropdown-menu">
                                            <li class="padding-no"><a href="<?php echo base_url();?>frontend/pages/searchRequirement"><?php echo lang('search_requirements');?></a></li>
                                        </ul>
                                    </li>
                                    <li class="<?php echo isset($selected) && $selected == 'about'?'active':'';?>"><a href="<?php echo base_url();?>frontend/about"><?php echo lang('top_about');?></a></li>
                                    <li class="<?php echo isset($selected) && $selected == 'home'?'active':'';?>"><a href="<?php echo base_url();?>frontend/welcome"><?php echo lang('top_home');?></a></li>
                                    <li class="<?php echo isset($selected) && $selected == 'content'?'active':'';?>"><a href="<?php echo base_url();?>frontend/pages/contentManagement"><?php echo lang('top_content_management');?></a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo lang('top_more');?></a>
                                        <ul class="dropdown-menu">
                                            <li class="padding-no"><a style='font-size:1em;' href="<?php echo base_url();?>frontend/pages/help"><?php echo lang('top_help');?></a></li>
                                            <li class="padding-no"><a style='font-size:1em;' href="#"><?php echo lang('top_settings');?></a></li>
                                            <li class="padding-no"><a style='font-size:1em;' href="<?php echo base_url();?>frontend/Login/doLogout"><?php echo lang('top_logout');?></a></li>
                                        </ul>
                                    </li>
                                <?php
                                }
                            ?>
                            <li class="menu-search hidden-sm hidden-xs">
                                <!-- start: SEARCH BUTTON -->
                                <a href="#"> <i class="ti-search"></i> </a>
                                <!-- end: SEARCH BUTTON -->
                            </li>
                        </ul>
                        <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
                        <div class="close-handle visible-sm-block visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                            <div class="arrow-left"></div>
                            <div class="arrow-right"></div>
                        </div>
                        <!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
                    </div>
                    <!-- end: NAVBAR -->
                </div>
                <!-- end: TOP NAVIGATION CONTAINER -->
                <div id="overlay-search">
                    <form method="get" action="search.html">
                        <input type="text" placeholder="Type &amp; Hit Enter.." value="" class="form-control" name="q">
                    </form>
                    <a href="#" class="pull-right margin-right-20 close-search mobile-button" data-toggle-target="body" data-toggle-class="search-open"> <i class="ti-close"></i> </a>
                </div>
            </div>
        </header>
        <!-- end: HEADER -->
