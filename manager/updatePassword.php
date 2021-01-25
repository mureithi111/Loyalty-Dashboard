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
                            <h1 class="text-uppercase m-2">Update Password</h1>
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

                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="text-center text-uppercase">Update your Password</h3>
                                </div>
                                <div class="card-body">
                                    <form action="#">

                                        <div class="form-group">
                                            <label for="updatePassword">New Password</label>
                                            <input type="password"
                                                class="form-control"
                                                id="updatePassword"
                                                placeholder="New Password">
                                        </div>
                                        <button type="submit"
                                            class="btn btn-outline-primary btn-lg w-100 text-uppercase">Update
                                            Password</button>
                                    </form>
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
        <?php
        include('./includes/footer.php');
        ?>