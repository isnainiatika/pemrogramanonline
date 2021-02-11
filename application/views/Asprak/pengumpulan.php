<!-- Main content -->
<div class="content" background-color="blue">
    <h6 style="text-align: center;">Halaman khusus asprak :) </h6>

    <div class="col">
        <div class="card">
            <div class="card shadow mb-4">



                <?php if ($this->session->userdata('role_id') == 3) { ?>

                    <div class="card-header py-3">
                        <h4 style="text-align: center;" class="m-0 font-weight-bold text-primary">Daftar Pengumpulan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>

                                        <th>No</th>
                                        <th>Modul</th>
                                        <th>Nama Asprak</th>
                                        <th>Kelas</th>
                                        <th>Nama Praktikan</th>
                                        <th>Email</th>
                                        <th>View </th>
                                        <th>Tanggal Upload</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($kumpul->result() as $row) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->modul; ?></td>
                                            <td><?php echo $row->nama_asprak; ?></td>
                                            <td><?php echo $row->kelas; ?></td>

                                            <td><?php echo $row->nama; ?> </td>
                                            <td><?php echo $row->email; ?></td>
                                            <td><a href="<?= site_url('viewpengumpulan') ?>/<?= $row->id; ?>" class="btn btn-warning "><i class="fas fa-eye"></i></td>

                                            <td><?php echo $row->date_uploded; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>






                                </tbody>
                            </table>
                        </div>
                    </div>



            </div>
        </div>
    </div>
<?php } ?>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

</div>