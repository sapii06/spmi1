<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $title; ?></h4>
                                <a href="admin/laporan/responden/print" target="_blank" class="btn mb-1 btn-primary">Print</a>
                                <a href="admin/laporan/responden/excel" class="btn mb-1 btn-warning">Excel</a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Prodi</th>
                                        <th>Semester</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($responden as $mhs): ?>
                                    <tr>
                                        <td><?php echo $i; ?>.</td>
                                        <td><?php echo $mhs['mhs_nim']; ?></td>
                                        <td><?php echo $mhs['mhs_nama']; ?></td>
                                        <td><?php echo $mhs['mhs_username']; ?></td>
                                        <td><?php echo $mhs['mhs_email']; ?></td>
                                        <td><?php echo $mhs['prodi_nama']; ?></td>
                                        <td><?php echo $mhs['mhs_semester']; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                                </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        