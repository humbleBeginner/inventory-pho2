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
                <!--    <a href="javascript:void(0);" id="changePassword" data-id="<?php echo $this->user_id?>"><i class="zmdi zmdi-settings"></i>Change Password</a> -->
                </li>
                <li>
                    <a href="<?php echo url::base().'dashboard/logout'; ?>"><i class="zmdi zmdi-time-restore"></i> Logout</a>
                </li>
            </ul>
        </div>

        <ul class="main-menu">
            <li><a href="<?php echo url::base(); ?>dashboard"><i class="zmdi zmdi-view-dashboard"></i> Dashboard</a></li>
            <li class="sub-menu">
                <a href="<?php echo url::base(); ?>districts"><i class="zmdi zmdi-pin-drop"></i> Districts</a>

                <ul>
                    <li><a href="#" data-toggle="modal" data-target="#addDistrictModal">Add</a></li>
                    <li><a href="<?php echo url::base(); ?>districts">List</a></li>
                    <li><a href="<?php echo url::base(); ?>districts/reports">Reports</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="<?php echo url::base(); ?>offices"><i class="zmdi zmdi-case"></i> Offices</a>

                <ul>
                    <li><a href="#" data-toggle="modal" data-target="#addOfficeModal">Add</a></li>
                    <li><a href="<?php echo url::base(); ?>offices">List</a></li>
                </ul>
            </li>
            
            <li class="sub-menu">
                <a href="<?php echo url::base(); ?>office_budgets"><i class="zmdi zmdi-money"></i> Office Budgets</a>

                <ul>
                    <li><a href="#" data-toggle="modal" data-target="#addOfficeBudgetModal">Add</a></li>
                    <li><a href="<?php echo url::base(); ?>all-budgets">All</a></li>
                    <li><a href="<?php echo url::base(); ?>approved-budgets">Approved</a></li>
                    <li><a href="<?php echo url::base(); ?>pending-budgets">Pending</a></li>
                    <li><a href="<?php echo url::base(); ?>office_budgets/reports">Reports</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="#"><i class="zmdi zmdi-format-list-numbered"></i> Categories</a>

                <ul class="">
                    <li><a href="#" data-toggle="modal" data-target="#addCategoryModal">Add</a></li>
                    <li><a class="" href="<?php echo url::base(); ?>categories">List</a></li>
                    <li><a href="<?php echo url::base(); ?>categories/reports">Reports</a></li>
                </ul>
            </li>
            
            <li class="sub-menu">
                <a href="#"><i class="zmdi zmdi-truck"></i> Suppliers</a>

               <ul>
                    <li><a href="#" data-toggle="modal" data-target="#addSupplierModal">Add</a></li>
                    <li><a href="<?php echo url::base(); ?>suppliers">List</a></li>
                    <li><a href="<?php echo url::base(); ?>suppliers/reports">Reports</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="#"><i class="zmdi zmdi zmdi-dropbox"></i> Items</a>

                <ul>
                    <li><a href="#" data-toggle="modal" data-target="#addItemModal">Add</a></li>
                    <li><a href="<?php echo url::site(); ?>all-items">All Items</a></li>
                    <li><a href="<?php echo url::site(); ?>newly-added-items">Newly added</a></li>
                    <li><a href="<?php echo url::site(); ?>all-on-stock-items">On Stock</a></li>
                    <li><a href="<?php echo url::site(); ?>all-out-of-stock-items">Out of Stock</a></li>
                    <li><a href="<?php echo url::site(); ?>all-expired-items">Expired</a></li>
                    <li><a href="<?php echo url::site(); ?>items/reports">Reports</a></li>
                </ul>
            </li>
            
            <li class="sub-menu">
                <a href="#"><i class="zmdi zmdi-shopping-cart-plus"></i>Purchases</a>
                <ul>
                    <li><a href="#" data-toggle="modal" data-target="#addPurchaseModal">Add</a></li>
                    <li><a href="<?php echo url::base(); ?>purchases">List</a></li>
                    <li><a href="<?php echo url::base(); ?>purchases/reports">Reports</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="#"><i class="zmdi zmdi-money-box"></i>Transactions</a>
                <ul>
                    <li><a href="#" data-toggle="modal" data-target="#addTransactionModal">Add</a></li>
                    <li><a href="<?php echo url::base(); ?>all-transactions">All</a></li>
                    <li><a href="<?php echo url::base(); ?>all-partial-transactions">Partials</a></li>
                    <li><a href="<?php echo url::base(); ?>all-paid-transactions">Paid</a></li>
                    <li><a href="<?php echo url::base(); ?>transactions/reports">Reports</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="#"><i class="zmdi zmdi-mail-send"></i>Requests</a>
                <ul>
                    <li><a href="#" data-toggle="modal" data-target="#addRequestModal">Add</a></li>
                    <li><a href="<?php echo url::base(); ?>requests">List</a></li>
                    <li><a href="<?php echo url::base(); ?>requests/reports">Reports</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="#"><i class="zmdi zmdi-accounts-alt"></i>Users</a>
                <ul>
                    <li><a href="#" data-toggle="modal" data-target="#addUserModal">Add</a></li>
                    <li><a href="<?php echo url::base(); ?>users">List</a></li>
                    <li><a href="<?php echo url::base(); ?>users/reports">Reports</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="#"><i class="zmdi zmdi-chart"></i>Reports</a>
                <ul>
                    <li><a href="#" data-toggle="modal" data-target="#addItemModal">Add</a></li>
                    <li><a href="<?php echo url::base(); ?>categories">List</a></li>
                    <li><a href="<?php echo url::base(); ?>reports">Reports</a></li>
                    <li><a href="<?php echo url::base(); ?>logs">System Logs</a></li>
                </ul>
            </li>
            <li>
                <a href="#" data-toggle="modal" data-target="#editSettingsModal"><i class="zmdi zmdi-settings"></i>System Settings</a>
                
            </li>
        </ul>
    </div>
</aside>