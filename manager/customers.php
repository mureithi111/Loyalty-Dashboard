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
                            <h1 class="text-uppercase m-2">All registered customers</h1>
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
                    <!-- Small boxes (Stat box) -->

                    <!-- Main row -->


                    <div class="row">

                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">All registered customers</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="customerTable"
                                        class="table m-0">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th>Phonenumber</th>
                                                <th>Firstname</th>
                                                <th>Middlename</th>
                                                <th>Lastname</th>
                                                <th>Gender</th>
                                                <th>Id Number</th>
                                                <th>Email</th>
                                                <th>Date Registered</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet Explorer</td>
                                                <td>Win 95+</td>
                                                <td>Five</td>
                                                <td>Seven</td>
                                                <td>Windows</td>
                                                <td>Sixty</td>
                                                <td>20/1/2011</td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet Explorer</td>
                                                <td>Win 95+</td>
                                                <td>Five</td>
                                                <td>Seven</td>
                                                <td>Windows</td>
                                                <td>Sixty</td>
                                                <td>20/1/2011</td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
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