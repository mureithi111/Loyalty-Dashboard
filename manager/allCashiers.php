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
                            <h1 class="text-uppercase m-2">All Cashiers</h1>
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
                                    <h3 class="card-title">List of Managers</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="allCashiers"
                                            class="table m-0">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th>Firstname</th>
                                                    <th>Middlename</th>
                                                    <th>Lastname</th>
                                                    <th>Gender</th>
                                                    <th>National Id</th>
                                                    <th>phonenumber</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Date Registered</th>
                                                    <th>Update(Password / Details)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Trident</td>
                                                    <td>Internet</td>
                                                    <td>Win 95+</td>
                                                    <td> 4</td>
                                                    <td>Two</td>
                                                    <td>Three</td>
                                                    <td>Four</td>
                                                    <td>nine</td>
                                                    <td>Five</td>
                                                    <td><a href="#"
                                                            class="btn btn-warning">Update Details</a></td>
                                                    <td><a href="#"
                                                            class="btn btn-warning">UPDATE PASSWORD</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Trident</td>
                                                    <td>Internet</td>
                                                    <td>Win 95+</td>
                                                    <td> 4</td>
                                                    <td>Two</td>
                                                    <td>Three</td>
                                                    <td>Four</td>
                                                    <td>nine</td>
                                                    <td>Five</td>
                                                    <td><a href="#"
                                                            class="btn btn-warning">Update Details</a></td>
                                                    <td><a href="#"
                                                            class="btn btn-warning">UPDATE PASSWORD</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Trident</td>
                                                    <td>Internet</td>
                                                    <td>Win 95+</td>
                                                    <td> 4</td>
                                                    <td>Two</td>
                                                    <td>Three</td>
                                                    <td>Four</td>
                                                    <td>nine</td>
                                                    <td>Five</td>
                                                    <td><a href="#"
                                                            class="btn btn-warning">Update Details</a></td>
                                                    <td><a href="#"
                                                            class="btn btn-warning">UPDATE PASSWORD</a>
                                                    </td>
                                                </tr>

                                            </tbody>

                                        </table>
                                    </div>
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