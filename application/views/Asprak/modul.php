<!-- Main content -->
<div class="content">
    <hr />
    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Upload Modul</a>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silahkan Upload Modul dalam format pdf</h5>
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
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/asprak/proses">
                        <div>Nama : </div>
                        <div><input type="text" class="form-control" name="nama" value="<?= $user['name']; ?>" readonly></div>
                        <div>Berkas : </div>
                        <div><input type="file" name="berkas"></div>
                        <div>Keterangan : </div>
                        <div><input type="text" name="keterangan_berkas"></input></div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Simpan" />
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="col-lg">
        <hr>

        <h4 style="text-align: center;" style="text-align: center;">Daftar Modul </h4>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Keterangan Berkas</th>
                        <th>Tanggal Upload</th>
                        <th>Nama yang Uplod</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 1;
                    foreach ($berkas->result() as $row) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>

                            <td><?php echo $row->keterangan_berkas; ?></td>
                            <td><?php echo $row->tanggal_upload; ?></td>
                            <td><?php echo $row->nama_asprak; ?></td>

                            <td>
                                <a href="<?= site_url('praktikum') ?>/<?= $row->kd_berkas; ?>">view pertemuan</a>

                            </td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

</div>