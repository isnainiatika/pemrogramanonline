<div class="wrapper" style="background-color:lightblue;">
    <?php if ($this->session->userdata('role_id') == 2) { ?>
        <?= $this->session->flashdata('message'); ?>
        <a type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Form Pengumpulan</a>

        <hr />
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Silahkan Upload Berkas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                        if (isset($error)) {
                            echo "ERROR UPLOAD : <br/>";
                            print_r($error);
                            echo "<hr/>";
                        }
                        ?>
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>user/proses">
                            <?= $this->session->flashdata('message'); ?>
                            <div>Nama : </div>
                            <div><input type="text" class="form-control" name="nama" value="<?= $user['name']; ?>" readonly></div>
                            <div>Email : </div>
                            <div><input type="text" class="form-control" name="email" value="<?= $user['email']; ?>" readonly></div>
                            <div>Kelas : </div>
                            <div><input type="text" class="form-control" name="kelas" value="<?= $user['class']; ?>" readonly></div>
                            <div>Modul : </div>
                            <div><input type="text" class="form-control" name="modul"></div>
                            <div>Nama Asprak : </div>
                            <div><input type="text" class="form-control" name="nama_asprak"></div>
                            <div>Laporan : </div>
                            <div><input type="file" name="kumpul"></div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Simpan" />
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    <?php } ?>

    <!-- Content Header (Page header) -->


    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" background-color="blue">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="text-align: center;">Modul Praktikum</h5>

                            <embed type="application/pdf" src="<?= base_url('modul/' . $pdf[0]->nama_berkas) ?>" width="580" height="700"></embed>


                        </div>
                    </div>


                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0" style="text-align: center;">Training Coding </h5>

                            <iframe height="700px" width="100%" src="https://repl.it/@<?= $user['nama_repl']; ?>/praktikum?lite=true" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>
                        </div>
                    </div>


                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</div>