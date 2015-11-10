
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inventory PHO</title>

        <!-- Vendor CSS -->
       
        <link href="<?php echo url::base(); ?>assets/vendors/bootgrid/jquery.bootgrid.min.css" rel="stylesheet">
        <link href="<?php echo url::base(); ?>assets/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="<?php echo url::base(); ?>assets/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="<?php echo url::base(); ?>assets/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
        <link href="<?php echo url::base(); ?>assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="<?php echo url::base(); ?>assets/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
        <link href="<?php echo url::base(); ?>assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
            
        <!-- CSS -->
        <link href="<?php echo url::base(); ?>assets/vendors/bower_components/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo url::base(); ?>assets/css/app.min.1.css" rel="stylesheet">
        <link href="<?php echo url::base(); ?>assets/css/app.min.2.css" rel="stylesheet">
        

        
    </head>
    <body>
        <header id="header">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>
            
                <li class="logo hidden-xs">
                    <a href="<?php echo url::base(); ?>">
                        <?php echo $settings->name; ?>
                    </a>
                </li>
                
                <li class="pull-right">
                <ul class="top-menu">
                    <li id="toggle-width">
                        <div class="toggle-switch">
                            <input id="tw-switch" type="checkbox" hidden="hidden">
                            <label for="tw-switch" class="ts-helper"></label>
                        </div>
                    </li>
                    <li id="top-search">
                        <a class="tm-search" href="#"></a>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-message" href="#"><i class="tmn-counts">6</i></a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview">
                                <div class="lv-header">
                                    Messages
                                </div>
                                <div class="lv-body">
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a class="lv-footer" href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-notification" href="#"><i class="tmn-counts">9</i></a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview" id="notifications">
                                <div class="lv-header">
                                    Notification
                    
                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="#" data-clear="notification">
                                                <i class="zmdi zmdi-check-all"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lv-body">
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                    
                                <a class="lv-footer" href="#">View Previous</a>
                            </div>
                    
                        </div>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a data-toggle="dropdown" class="tm-task" href="#"><i class="tmn-counts">2</i></a>
                        <div class="dropdown-menu pull-right dropdown-menu-lg">
                            <div class="listview">
                                <div class="lv-header">
                                    Tasks
                                </div>
                                <div class="lv-body">
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">HTML5 Validation Report</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                <span class="sr-only">95% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Google Chrome Extension</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Social Intranet Projects</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Bootstrap Admin Template</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Youtube Client App</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                                <a class="lv-footer" href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-settings" href="#"></a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li class="hidden-xs">
                                <a data-action="fullscreen" href="#"><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                            </li>
                            <li>
                                <a data-action="clear-localstorage" href="#"><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-settings"></i> Other Settings</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs" id="chat-trigger" data-trigger="#chat">
                        <a class="tm-chat" href="#"></a>
                    </li>
                </li>
            </ul>
            
            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <input type="text">
                <i id="top-search-close">&times;</i>
            </div>
        </header>
        
        <section id="main">
            <aside id="sidebar">
                <div class="sidebar-inner c-overflow">
                    <div class="profile-menu">
                        <a href="#">
                            <div class="profile-pic">
                                <img src="<?php echo url::base(); ?>assets/img/profile-pics/4.jpg" alt="">
                            </div>

                            <div class="profile-info">
                               <!--  Ritchie Prades -->
                                <?php echo $this->auth->get_user()->username; ?>
                                <i class="zmdi zmdi-arrow-drop-down"></i>
                            </div>
                        </a>

                        <ul class="main-menu">
                            <li>
                                <a href="<?php echo url::base().'profile'?>"><i class="zmdi zmdi-account"></i> View Profile</a>
                            </li>
                            <!-- <li>
                                <a href="#"><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                            </li> -->
                            <li>
                                <a href="#"><i class="zmdi zmdi-settings"></i> Settings</a>
                            </li>
                            <li>
                                <a href="<?php echo url::base().'dashboard/logout'; ?>"><i class="zmdi zmdi-time-restore"></i> Logout</a>
                            </li>
                        </ul>
                    </div>

                    <ul class="main-menu">
                        <li class="active"><a href="<?php echo url::base(); ?>dashboard"><i class="zmdi zmdi-view-dashboard"></i> Dashboard</a></li>
                        <li class="sub-menu">
                            <a href="#"><i class="zmdi zmdi-pin-drop"></i> Districts</a>

                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#addDistrictModal">Add</a></li>
                                <li><a href="<?php echo url::base(); ?>districts">List</a></li>
                                <li><a href="#">Reports</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="#"><i class="zmdi zmdi-case"></i> Offices</a>

                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#addOfficeModal">Add</a></li>
                                <li><a href="<?php echo url::base(); ?>offices">List</a></li>
                                <li><a href="#">Reports</a></li>
                            </ul>
                        </li>
                        
                        <li class="sub-menu">
                            <a href="#"><i class="zmdi zmdi-money"></i> Office Budgets</a>

                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#addOfficeBudgetModal">Add</a></li>
                                <li><a href="<?php echo url::base(); ?>office_budgets">List</a></li>
                                <li><a href="#">Reports</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="#"><i class="zmdi zmdi-format-list-numbered"></i> Categories</a>

                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#addCategoryModal">Add</a></li>
                                <li><a href="<?php echo url::base(); ?>categories">List</a></li>
                                <li><a href="#">Reports</a></li>
                            </ul>
                        </li>
                        
                        <li class="sub-menu">
                            <a href="#"><i class="zmdi zmdi-truck"></i> Suppliers</a>

                           <ul>
                                <li><a href="#" data-toggle="modal" data-target="#addSupplierModal">Add</a></li>
                                <li><a href="<?php echo url::base(); ?>suppliers">List</a></li>
                                <li><a href="#">Reports</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="#"><i class="zmdi zmdi zmdi-dropbox"></i> Items</a>

                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#addItemModal">Add</a></li>
                                <li><a href="<?php echo url::site(); ?>all-items">All Items</a></li>
                                <li><a href="<?php echo url::site(); ?>all-on-stock">On Stock</a></li>
                                <li><a href="<?php echo url::site(); ?>all-out-of-stock">Out of Stock</a></li>
                                <li><a href="<?php echo url::site(); ?>all-expired">Expired</a></li>
                                <li><a href="<?php echo url::site(); ?>items">Reports</a></li>
                            </ul>
                        </li>
                        
                        <li class="sub-menu">
                            <a href="#"><i class="zmdi zmdi-shopping-cart-plus"></i>Purchases</a>
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#addPurchaseModal">Add</a></li>
                                <li><a href="<?php echo url::base(); ?>purchases">List</a></li>
                                <li><a href="#">Reports</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#"><i class="zmdi zmdi-money-box"></i>Transactions</a>
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#addTransactionModal">Add</a></li>
                                <li><a href="<?php echo url::base(); ?>transactions">All</a></li>
                                <li><a href="<?php echo url::base(); ?>all-partial-transactions">Partials</a></li>
                                <li><a href="<?php echo url::base(); ?>transactions">Paid</a></li>
                                <li><a href="#">Reports</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#"><i class="zmdi zmdi-mail-send"></i>Requests</a>
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#addRequestModal">Add</a></li>
                                <li><a href="<?php echo url::base(); ?>requests">List</a></li>
                                <li><a href="#">Reports</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#"><i class="zmdi zmdi-accounts-alt"></i>Users</a>
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#addUserModal">Add</a></li>
                                <li><a href="<?php echo url::base(); ?>categories">List</a></li>
                                <li><a href="#">Reports</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#"><i class="zmdi zmdi-chart"></i>Reports</a>
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#addItemModal">Add</a></li>
                                <li><a href="<?php echo url::base(); ?>categories">List</a></li>
                                <li><a href="#">Reports</a></li>
								<li><a href="<?php echo url::base(); ?>logs">System Logs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#editSettingsModal"><i class="zmdi zmdi-settings"></i>System Settings</a>
                            
                        </li>
                    </ul>
                </div>
            </aside>
            
            <aside id="chat">
                <ul class="tab-nav tn-justified" role="tablist">
                    <li role="presentation" class="active"><a href="#friends" aria-controls="friends" role="tab" data-toggle="tab">Friends</a></li>
                    <li role="presentation"><a href="#online" aria-controls="online" role="tab" data-toggle="tab">Online Now</a></li>
                </ul>
            
                <div class="chat-search">
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Search People">
                    </div>
                </div>
                
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="friends">
                        <div class="listview">
                            <a class="lv-item" href="#">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/2.jpg" alt="">
                                        <i class="chat-status-busy"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Jonathan Morris</div>
                                        <small class="lv-small">Available</small>
                                    </div>
                                </div>
                            </a>
                            
                            <a class="lv-item" href="#">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">David Belle</div>
                                        <small class="lv-small">Last seen 3 hours ago</small>
                                    </div>
                                </div>
                            </a>
                            
                            <a class="lv-item" href="#">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/3.jpg" alt="">
                                        <i class="chat-status-online"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Fredric Mitchell Jr.</div>
                                        <small class="lv-small">Availble</small>
                                    </div>
                                </div>
                            </a>
                            
                            <a class="lv-item" href="#">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/4.jpg" alt="">
                                        <i class="chat-status-online"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Glenn Jecobs</div>
                                        <small class="lv-small">Availble</small>
                                    </div>
                                </div>
                            </a>
                            
                            <a class="lv-item" href="#">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/5.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Bill Phillips</div>
                                        <small class="lv-small">Last seen 3 days ago</small>
                                    </div>
                                </div>
                            </a>
                            
                            <a class="lv-item" href="#">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/6.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Wendy Mitchell</div>
                                        <small class="lv-small">Last seen 2 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <a class="lv-item" href="#">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/7.jpg" alt="">
                                        <i class="chat-status-busy"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Teena Bell Ann</div>
                                        <small class="lv-small">Busy</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="online">
                        <div class="listview">
                            <a class="lv-item" href="#">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/2.jpg" alt="">
                                        <i class="chat-status-busy"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Jonathan Morris</div>
                                        <small class="lv-small">Available</small>
                                    </div>
                                </div>
                            </a>
                            
                            <a class="lv-item" href="#">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/3.jpg" alt="">
                                        <i class="chat-status-online"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Fredric Mitchell Jr.</div>
                                        <small class="lv-small">Availble</small>
                                    </div>
                                </div>
                            </a>
                            
                            <a class="lv-item" href="#">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/4.jpg" alt="">
                                        <i class="chat-status-online"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Glenn Jecobs</div>
                                        <small class="lv-small">Availble</small>
                                    </div>
                                </div>
                            </a>

                            <a class="lv-item" href="#">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="<?php echo url::base(); ?>assets/img/profile-pics/7.jpg" alt="">
                                        <i class="chat-status-busy"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Teena Bell Ann</div>
                                        <small class="lv-small">Busy</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>
            
            
            <section id="content">
                <div class="container">
                    
                        <?php 
                            echo $content; 
                            require Kohana::find_file('views/partials','modals');
                        ?>   
                    
                </div>
            </section>
        </section>
        
       
    

        <footer id="footer">
            Copyright &copy; 2015 <a href="#todo">Design Interactive</a> Inventory System 
            
            <!-- <ul class="f-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Contact</a></li>
            </ul> -->
        </footer>
        
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="<?php echo url::base(); ?>assets/img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="<?php echo url::base(); ?>assets/img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="<?php echo url::base(); ?>assets/img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="<?php echo url::base(); ?>assets/img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="<?php echo url::base(); ?>assets/img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->
        
        <!-- Javascript Libraries -->
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/datatables/js/dataTables.bootstrap.min.js"></script>

        <script src="<?php echo url::base(); ?>assets/js/libs/ko.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/sparklines/jquery.sparkline.min.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        
        <script src="<?php echo url::base(); ?>assets/js/flot-charts/curved-line-chart.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/flot-charts/line-chart.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/charts.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/fileinput/fileinput.min.js"></script>
        <script src="<?php echo url::base(); ?>assets/vendors/input-mask/input-mask.min.js"></script>
 
        <script src="<?php echo url::base(); ?>assets/js/functions.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/demo.js"></script>

        <script src="<?php echo url::base(); ?>assets/vendors/bootgrid/jquery.bootgrid.min.js"></script>
        
        <!-- Knockout ViewModels -->
        <script src="<?php echo url::base(); ?>assets/js/app/customBindings.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/settings.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/xhr.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/view-models/allDataObjects.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/view-models/categoryVM.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/view-models/itemVM.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/view-models/districtVM.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/view-models/officeVM.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/view-models/supplierVM.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/view-models/profileVM.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/view-models/settingVM.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/view-models/purchaseVM.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/view-models/userVM.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/view-models/requestVM.js"></script>         
        <script src="<?php echo url::base(); ?>assets/js/app/view-models/officeBudgetVM.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/view-models/transactionVM.js"></script>
        <script src="<?php echo url::base(); ?>assets/js/app/view-models/masterVM.js"></script>

    </body>
  
</html>