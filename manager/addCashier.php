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
                            <h1 class="text-uppercase m-2">Add Cashier</h1>
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
                                        name="addCashierForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstname">Firstname</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        id="firstname"
                                                        placeholder="Firstname">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="middlename">Middlename</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        id="middlename"
                                                        placeholder="middlename">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input type="text"
                                                class="form-control"
                                                id="lastname"
                                                placeholder="lastname">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="gender">Gender</label>
                                                    <select class="custom-select form-control-border"
                                                        id="gender">
                                                        <option value="">Select Gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="idNumber">National ID Number</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        id="idNumber"
                                                        placeholder="22334455">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Select Country code</label>
                                                <select class="custom-select form-control-border"
                                                    name="countryCode"
                                                    id="countryCode">
                                                    <option value="">Select country code</option>
                                                    <option value="+250">+250 Rwanda</option>
                                                    <option value="+251">+251 Ethiopia</option>
                                                    <option value="+254">+254 Kenya</option>
                                                    <option value="+255">+255 Tanzania</option>
                                                    <option value="+256">+256 Uganda</option>
                                                    <option value="+257">+257 Burundi</option>
                                                    <option value="+260">+260 Zambia</option>
                                                </select>
                                                <span id="errorcountryCode"></span>

                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="Phonenumber">Manager Phonenumber </label>
                                                    <input type="text"
                                                        class="form-control"
                                                        name="phonenumber"
                                                        id="phonenumber"
                                                        placeholder="700100100">
                                                    <span id="errorPhonenumber"></span>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email"
                                                        class="form-control"
                                                        id="email"
                                                        placeholder="manager@domain.com">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cashierRole">Cashier Role</label>
                                                    <select class="custom-select form-control-border"
                                                        id="cashierRole">
                                                        <option value="">Select Role</option>
                                                        <option value="casheer">cashier</option>
                                                        <option value="manager">Manager</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Cashier Password</label>
                                            <input type="password"
                                                class="form-control"
                                                id="password"
                                                placeholder="Manager Password">
                                        </div>
                                        <button type="submit"
                                            name="addCashier"
                                            class="btn btn-outline-primary btn-lg w-100 text-uppercase">Add
                                            Cashier</button>
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