<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $title; ?></h4>
                        <a href="admin/master/mata-kuliah/new" class="btn mb-1 btn-primary">New Data</a>
                        <a href="admin/master/mata-kuliah/kosongkan" class="btn mb-1 btn-warning" onclick="return confirm('Yakin tabel ini akan dikosongkan?');">Kosongkan Tabel</a>
                        <?php if($this->session->flashdata('flash')): ?>
                            <div class="alert alert-success"><strong><i class="fa fa-check-circle"></i></strong> <?php echo $this->session->flashdata('flash'); ?></div>
                        <?php endif; ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Mata Kuliah</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($makul as $mkl): ?>
                                    <tr>
                                        <td><?php echo $i; ?>.</td>
                                        <td><?php echo $mkl['makul_nama']; ?></td>
                                        <td>
                                            <a href="admin/master/mata-kuliah/edit/<?php echo $mkl['makul_id']; ?>" class="btn mb-1 btn-info"><i class="fa fa-pencil"></i></a>
                                            <a href="admin/master/mata-kuliah/hapus/<?php echo $mkl['makul_id']; ?>" onclick="return confirm('Yakin data ini akan dihapus?');" class="btn mb-1 btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
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
