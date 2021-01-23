<!-- Main content -->
<div class="content" background-color="blue">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4 style="text-align: center;">Daftar Pengumpulan </h4>

                <table border="1" width="100%" style="text-align:center;">
                    <tr>
                        <th>No</th>
                        <th>Modul</th>
                        <th>Kelas</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Hasil</th>
                        <th>Tanggal Upload</th>

                    </tr>
                    <?php
                    $no = 1;
                    foreach ($kumpul->result() as $row) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row->modul; ?></td>
                            <td><?php echo $row->kelas; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->nim; ?></td>
                            <td> <a href="<?= site_url('viewpengumpulan') ?>/<?= $row->id; ?>">view pdf</a></td>
                            <td><?php echo $row->date_uploded; ?></td>


                        </tr>
                    <?php
                    }
                    ?>
                </table>

            </div>
        </div>
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

</div>