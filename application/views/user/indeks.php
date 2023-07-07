<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $title; ?></h4>
                        <?php if($this->session->flashdata('flash')): ?>
                            <div class="alert alert-success"><strong><i class="fa fa-check-circle"></i></strong> <?php echo $this->session->flashdata('flash'); ?></div>
                        <?php endif; ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Jenis</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($indeks as $idx): ?>
<?php $limap = $this->db->get_where('tb_makul_mhs',['promhs_mhs' => $this->session->userdata('mhs_id'),'promhs_id' => $idx['indeks_for']])->result_array(); ?>
<?php if($limap) { ?>
    <?php foreach($limap as $lp): ?>
    <td><?php echo $idx['indeks_judul']; ?></td>
    <td>
        <a href="user/indeks/<?php echo $idx['indeks_id']; ?>" class="btn mb-1 btn-info">Tanggapi</a>
    </td>
                                    </tr>
    <?php endforeach; ?>
<?php }else { ?>
<?php } ?>
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
