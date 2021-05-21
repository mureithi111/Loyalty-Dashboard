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
                            <h1 class="text-uppercase m-2">Update Cashier Details</h1>
                            <p>Please fill all fields</p>
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
                        <section class="col-lg-12">
                            <!-- Custom tabs (Charts with tabs)-->

                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">Enter cashier Details</div>
                                <div class="card-body">

                                    <form method="post"
                                        action="#"
                                        name="addCashierForm">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstname">Firstname</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        name="firstname"
                                                        id="firstname"
                                                        placeholder="Firstname">
                                                    <span id="errorFirstname"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="middlename">Middlename</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        name="middlename"
                                                        id="middlename"
                                                        placeholder="middlename">
                                                    <span id="errormiddlename"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input type="text"
                                                class="form-control"
                                                name="lastname"
                                                id="lastname"
                                                placeholder="lastname">
                                            <span id="errorLastname"></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="gender">Gender</label>
                                                    <select class="custom-select form-control-border"
                                                        name="gender"
                                                        id="gender">
                                                        <option value="">Select Gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                    <span id="errorGender"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="idNumber">National ID Number</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        name="nationalId"
                                                        id="idNumber"
                                                        placeholder="22334455">
                                                    <span id="erroridNumber"></span>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="Phonenumber">Cashier Phonenumber </label>
                                            <input type="text"
                                                class="form-control"
                                                name="phonenumber"
                                                id="phonenumber"
                                                placeholder="254700100100">
                                            <span id="errorPhonenumber"></span>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email"
                                                        class="form-control"
                                                        name="email"
                                                        id="email"
                                                        placeholder="manager@domain.com">
                                                    <span id="errorEmail"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cashierRole">Cashier Role</label>
                                                    <select class="custom-select form-control-border"
                                                        name="cashierRole"
                                                        id="cashierRole">
                                                        <option value="">Select Role</option>
                                                        <option value="cashier">cashier</option>
                                                        <option value="manager">Manager</option>
                                                    </select>
                                                    <span id="errorCashierRole"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit"
                                            name="updateCashierDetails"
                                            id="updateCashierDetails"
                                            class="btn btn-outline-primary btn-lg w-100 text-uppercase">Update
                                            Cashier Details</button>
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