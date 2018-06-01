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
                <li class="active open">
                    <a href="<?php echo base_url()?>admin/dashboard">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-home"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Dashboard </span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-settings"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> UI Elements </span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="ui_elements.html">
                                <span class="title"> Elements </span>
                            </a>
                        </li>
                        <li>
                            <a href="ui_buttons.html">
                                <span class="title"> Buttons </span>
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