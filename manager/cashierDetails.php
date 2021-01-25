<?php include('./includes/header.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <?php include('includes/aside.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="text-uppercase m-2">Your Details</h1>
                        </div>
                        <!-- /.col -->
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- Main row -->

                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12">
                            <!-- Custom tabs (Charts with tabs)-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <p><strong>Firstname:</strong> Alex</p>
                                            <p><strong>Middlename:</strong> Mureithi</p>
                                            <p><strong>Lastname:</strong> Njagi</p>
                                            <p><strong>Gender:</strong> Male</p>
                                            <p><strong>National ID:</strong> 22334455</p>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <!-- /.card -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-body">
                                                <p><strong>Phonenumber:</strong> +254711900900</p>
                                                <p><strong>Email Address:</strong> yourname@gmail.com</p>
                                                <p><strong>Manger Role:</strong> Admin</p>
                                                <p><a href="./updatePassword.php" class="text-center text-uppercase btn btn-outline-primary btn-lg w-100 m-2">Update Your Password <i class="fas fa-arrow-right"></i> </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    </div>
                    <!-- /.row (main row) -->


                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include('./includes/footer.php'); ?>