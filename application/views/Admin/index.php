<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="col" style="background: url('assets/img/bg.jpg');">


        <div class="card" style="background: cadetblue;">

            <h3 style="text-align: center; color: white">Welcome back <?= $user['name']; ?> as a Administrator</h3>

        </div>
        <br>

        <div class="row">


            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">

                <div class="card" style="text-align: center; color:chartreuse;">
                    <a href="user">
                        <br>
                        <h2>
                            <i class="fas fa-user"></i>
                        </h2>
                        <h2>
                            My Profile
                        </h2>
                        <br>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="card" style="text-align: center;">
                    <a href="asprak/modul">
                        <br>
                        <h2>
                            <i class="fas fa-user-tie"></i>
                        </h2>
                        <h2>
                            Halaman Asprak
                        </h2>
                        <br>
                    </a>

                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">

                <div class="card" style="text-align: center;">
                    <a href="admin/mahasiswa">
                        <br>
                        <h2>
                            <i class="fas fa-user-cog col-xl"></i>
                        </h2>
                        <h2>Kelola Mahasiswa</h2>
                        <br>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="card" style="text-align: center;">
                    <a href="menu">
                        <br>
                        <h2>
                            <i class="fas fa-cogs"></i>
                        </h2>
                        <h2>
                            Menu Management
                        </h2>
                        <br>
                    </a>
                </div>
                <br>
            </div>
            <br>
            <!-- Page Heading -->

            <!-- Donut Chart -->
            <div class="col-lg-6">
                <div class="card shadow ">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">User Role</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <hr>

                        <div class="mt-4 text-center small">
                            <span class="mr-2">
                                <i class="fas fa-circle text-primary"></i> Mahasiswa
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-success"></i> Asisten Praktikum
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-info"></i> Administrator
                            </span>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-lg-6">
                <div class="card shadow ">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Kelas</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4">
                            <canvas id="PieChartclass"></canvas>
                        </div>
                        <hr>

                        <div class="mt-4 text-center small">
                            <span class="mr-2">
                                <i class="fas fa-circle text-primary"></i>IF 07 A
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-success"></i> IF 07 B
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-info"></i> IF 07 C
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-warning"></i> IF 07 D
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-danger"></i> IF 07 E
                            </span>
                        </div>
                    </div>
                </div>
                <br>
            </div>



        </div>
    </div>
    <br>
</div>
<br>
</div>
<!-- End of Main Content -->