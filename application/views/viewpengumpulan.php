<div class="wrapper" style="background-color:lightblue;">


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 style="text-align: center;">Belajar Pemrograman Online</h1>
                    <h3 style="text-align: center;">Review Laporan</h3>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <hr />

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" background-color="blue">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card" style="align-content: center;">

                        <embed type="application/pdf" src="<?= base_url('berkas/' . $pdf[0]->nama_berkas) ?>" width="1500" height="900"></embed>

                    </div>

                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</div>