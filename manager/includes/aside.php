<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link"
                data-widget="pushmenu"
                href="#"
                role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <p class="brand-link">
        <span class="brand-text font-weight-light">LOYALTY ADMIN</span>
    </p>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#"
                    class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon classwith font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="./index.php"
                        class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#"
                        class="nav-link">
                        <i class="nav-icon fas fa-coins"></i>
                        <p>
                            Points
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./rewardPoints.php"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reward Points</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./PointsRewarded.php"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Points Rewarded</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./transferedPoints.php"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transfered Points</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./redeemedPoints.php"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Redeemed Points</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="./customers.php"
                        class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Customers</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#"
                        class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>
                            Cashiers
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./addCashier.php"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Cashiers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./allCashiers.php"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Cashiers</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#"
                        class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./cashierDetails.php"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cashier Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./rewardLimit.php"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Update Rewards Limit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./updatePassword.php"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Update Password</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="../index.php"
                        class="nav-link">
                        <i class="nav-icon fas fa-arrow-right"></i>
                        <p>
                            Logout
                            <span class="right badge badge-danger">Exit</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>