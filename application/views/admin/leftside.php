<!-- sidebar -->
<div class="sidebar app-aside" id="sidebar">
    <div class="sidebar-container perfect-scrollbar">
        <nav>
            <!-- start: SEARCH FORM -->
            <div class="search-form">
                <a class="s-open" href="#">
                    <i class="ti-search"></i>
                </a>
                <form class="navbar-form" role="search">
                    <a class="s-remove" href="#" target=".navbar-form">
                        <i class="ti-close"></i>
                    </a>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <button class="btn search-button" type="submit">
                            <i class="ti-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- end: SEARCH FORM -->
            <!-- start: MAIN NAVIGATION MENU -->
            <div class="navbar-title">
                <span>Main Navigation</span>
            </div>
            <ul class="main-navigation-menu">
                <li class="<?php echo isset($sidebar) && ($sidebar['main'] == ADMIN_SIDEBAR_DASHBOARD) ?'active open':''?>">
                    <a href="<?php echo base_url()?>admin/dashboard">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-home"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> <?php echo lang('admin_left_dashboard');?> </span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="<?php echo isset($sidebar) && ($sidebar['main'] == ADMIN_SIDEBAR_MANAGEMENT) ?'active open':''?>">
                    <a href="javascript:void(0)">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-settings"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> <?php echo lang('admin_left_management');?> </span>
                                <i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu">
                        <li class="<?php echo isset($sidebar) && ($sidebar['sub'] == ADMIN_SIDEBAR_MANAGEMENT_CUSTOMER_LIST || $sidebar['sub'] == ADMIN_SIDEBAR_MANAGEMENT_CUSTOMER_ADD || $sidebar['sub'] == ADMIN_SIDEBAR_MANAGEMENT_CUSTOMER_EDIT) ?'active':''?>">
                            <a href="<?php echo base_url()?>admin/management/customers">
                                <span class="title"> <?php echo lang('admin_left_customers');?> </span>
                            </a>
                        </li>
                        <li class="<?php echo isset($sidebar) && ($sidebar['sub'] == ADMIN_SIDEBAR_MANAGEMENT_CATEGORY_LIST || $sidebar['sub'] == ADMIN_SIDEBAR_MANAGEMENT_CATEGORY_ADD || $sidebar['sub'] == ADMIN_SIDEBAR_MANAGEMENT_CATEGORY_EDIT) ?'active':''?>">
                            <a href="<?php echo base_url()?>admin/management/categories">
                                <span class="title"> <?php echo lang('admin_left_categories');?> </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>admin/management/requirements">
                                <span class="title"> <?php echo lang('admin_left_requirements');?> </span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- end: MAIN NAVIGATION MENU -->
            <!-- start: CORE FEATURES -->
            <div class="navbar-title">
                <span>Core Features</span>
            </div>
            <ul class="folders">
                <li>
                    <a href="pages_calendar.html">
                        <div class="item-content">
                            <div class="item-media">
                                <span class="fa-stack"> <i class="fa fa-square fa-stack-2x"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Calendar </span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="pages_messages.html">
                        <div class="item-content">
                            <div class="item-media">
                                <span class="fa-stack"> <i class="fa fa-square fa-stack-2x"></i> <i class="fa fa-folder-open-o fa-stack-1x fa-inverse"></i> </span>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Messages </span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- end: CORE FEATURES -->
        </nav>
    </div>
</div>
<!-- / sidebar -->