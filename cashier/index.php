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
                            <h1 class="text-uppercase m-2">Reward Points</h1>
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
                                        <div class="card-header">
                                            <h3 class="card-title">Reward points rate</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <h4>Today's reward rate is coins <strong>200</strong></h4>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <!-- /.card -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="#">
                                                <div class="form-group">
                                                    <label for="Phonenumber">Customer Phonenumber(+254700100100)</label>
                                                    <input type="text" class="form-control" id="Phonenumber" placeholder="Customer Phonenumber">
                                                </div>
                                                <div class="form-group">
                                                    <label for="totalpurchase">Total Purchase</label>
                                                    <input type="text" class="form-control" id="totalpurchase" placeholder="Total Purchase of Goods">
                                                </div>
                                                <button type="submit" class="btn btn-outline-primary btn-lg text-uppercase w-100">Reward Points</button>
                                            </form>
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
        <?php
        include('./includes/footer.php');
        ?>