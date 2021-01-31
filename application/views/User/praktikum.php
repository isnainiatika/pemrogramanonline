<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800" style="text-align: center;"><?= $title; ?></h1>


    <div class="content" background-color="blue">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 style="text-align: center;">Petunjuk Pembelajaran</h4>
                            <hr>
                            <h5 style="text-align: justify;">
                                <p>1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quia eos culpa perferendis labore nostrum eaque iure saepe consequuntur laborum veniam pariatur cum aliquam provident, accusantium hic, libero quidem quaerat?</p>
                                <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore praesentium aspernatur alias! Facilis commodi a optio dolore ipsum illo nulla doloribus nisi, delectus tempore sequi esse nostrum quibusdam aliquid vel?</p>
                                <p>3. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis veniam consequuntur eveniet? Recusandae, quis quo aut non velit consequatur vitae, corrupti temporibus repudiandae cum quibusdam perspiciatis nemo nam cupiditate delectus?</p>
                            </h5>

                        </div>
                    </div>


                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="text-align: center;">Modul Pertemuan</h4>
                            <hr>
                            <div class="col-lg">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Keterangan Berkas</th>

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
                        </div>


                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


    </div>
    <!-- End of Main Content -->