<div class="wrapper" style="background-color:lightblue;">


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 style="text-align: center;">REVIEW LAPORAN</h1>

                    <a href="<?= site_url('asprak/pengumpulan') ?>" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-backward" viewBox="0 0 16 16">
                            <path d="M.5 3.5A.5.5 0 0 1 1 4v3.248l6.267-3.636c.52-.302 1.233.043 1.233.696v2.94l6.267-3.636c.52-.302 1.233.043 1.233.696v7.384c0 .653-.713.998-1.233.696L8.5 8.752v2.94c0 .653-.713.998-1.233.696L1 8.752V12a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm7 1.133L1.696 8 7.5 11.367V4.633zm7.5 0L9.196 8 15 11.367V4.633z" />
                        </svg> Back to Pengumpulan


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