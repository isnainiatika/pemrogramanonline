<div class="wrapper">



    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">

                    <h3 style="text-align: center;">Daftar Pengumpulan</h3>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <table border="1" width="100%" style="text-align:center;">
                        <tr>
                            <th>No</th>
                            <th>Modul</th>
                            <th>Kelas</th>
                            <th>Nama</th>
                            <th>Email</th>
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
                                <td><?php echo $row->email; ?></td>
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
</div>