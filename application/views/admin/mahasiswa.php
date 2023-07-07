<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $title; ?></h4>
                        <a href="admin/master/mahasiswa/new" class="btn mb-1 btn-primary">New Data</a>
                        <a href="admin/master/mahasiswa/kosongkan" class="btn mb-1 btn-warning" onclick="return confirm('Yakin tabel ini akan dikosongkan?');">Kosongkan Tabel</a>
                        <?php if($this->session->flashdata('flash')): ?>
                            <div class="alert alert-success"><strong><i class="fa fa-check-circle"></i></strong> <?php echo $this->session->flashdata('flash'); ?></div>
                        <?php endif; ?>
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
                                        <th>Makul</th>
                                        <th>Semester</th>
                                        <th>Tahun</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($mahasiswa as $mhs): ?>
                                    <tr>
                                        <td><?php echo $i; ?>.</td>
                                        <td><?php echo $mhs['mhsnim']; ?></td>
                                        <td><?php echo $mhs['mhsname']; ?></td>
                                        <td><?php echo $mhs['mhsuname']; ?></td>
                                        <td><?php echo $mhs['mhsemail']; ?></td>
                                        <td><?php echo $mhs['mhsprodi']; ?></td>
                                        <td><?php echo $mhs['makulname']; ?></td>
                                        <td><?php echo $mhs['mhssms']; ?></td>
                                        <td><?php echo $mhs['tahun']; ?></td>
                                        <td>
                                            <a href="admin/master/mahasiswa/edit/<?php echo $mhs['mhsnim']; ?>" class="btn mb-1 btn-info"><i class="fa fa-pencil"></i></a>
                                            <a href="admin/master/mahasiswa/hapus/<?php echo $mhs['mhsnim']; ?>" onclick="return confirm('Yakin data ini akan dihapus?');" class="btn mb-1 btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <small style="margin-left: 30px;" class="text-danger">*) Password default adalah sama dengan NIM, mahasiswa dapat mengganti password akun di dashboard mahasiswa.</small><br>
                            <small style="margin-left: 30px;" class="text-danger">**) Silahkan edit password mahasiswa jika ada request langsung dari mahasiswa bahwa mahasiswa tersebut lupa password.</small>
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
