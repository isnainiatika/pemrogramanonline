<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="col-lg">

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Kelas</th>
                        <th>Email</th>
                        <th>Nama Repl</th>

                        <th>Role</th>
                        <th>Date Created</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($orang->result() as $row) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>

                            <td><?php echo $row->name; ?></td>
                            <td><?php echo $row->nim; ?></td>
                            <td><?php echo $row->class; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->nama_repl; ?></td>

                            <td><?php echo $row->role_id; ?></td>
                            <td><?php echo date('d F Y', $row->date_created); ?></td>
                            <td>

                                <a href="edit/<?= $row->id; ?>" class="btn btn-success "><i class="fas fa-edit"></i></a>
                                <a href="hapus_user/<?= $row->id; ?>" class="btn btn-danger " onclick="return confirm('Anda YAKIN ingin menghapus data ini ..?');"><i class="fas fa-trash-alt"></i></a>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->