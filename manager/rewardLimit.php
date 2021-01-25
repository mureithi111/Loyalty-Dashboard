<?php
include('./includes/header.php');
?>

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
                            <h1 class="m-0">Reward points rate</h1>
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

                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <h2 class="text-center text-uppercase">Current reward rate is coins <strong>200</strong> per total purchase</h2>
                                    <a href="./updateRewardLimit.php" class="text-center text-uppercase btn btn-outline-primary btn-lg w-100 m-2">Update Reward Limit <i class="fas fa-arrow-right"></i> </a>
                                </div>
                            </div>

                            <!-- /.card -->
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
        <?php
        include('./includes/footer.php');
        ?>

