<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col-lg">

        <table class="table" border="1" width="75%" style="text-align:center;">
            <tr class="table-dark">
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Email</th>

                <th>Role</th>
                <th>Date Created</th>
                <th>Actions</th>

            </tr>
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

                    <td><?php echo $row->role_id; ?></td>
                    <td><?= date('d F Y', $user['date_created']); ?></td>
                    <td>

                        <a href="hapus_user/<?= $row->id; ?>" class="btn btn-danger " onclick="return confirm('Anda YAKIN ingin menghapus data ini ..?');"><i class="fas fa-trash-alt"></i><br> HAPUS</a>
                    </td>

                </tr>
            <?php
            }
            ?>
        </table>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->