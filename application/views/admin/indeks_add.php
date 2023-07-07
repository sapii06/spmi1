<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $title; ?></h4>
                        <div class="basic-form">
                            <form action="" method="post">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Jenis Indeks</label>
                                        <input type="text" class="form-control input-default" name="judul" value="<?php echo set_value('judul'); ?>" autofocus>
                                        <small class="text-danger"><?php echo form_error('judul'); ?></small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Untuk Mata Kuliah</label>
                                        <select name="for" class="form-control input-default">
                                            <option value="">-Pilih-</option>
                                            <?php foreach($makul as $mkl): ?>
                                            <option value="<?php echo $mkl['makul_id']; ?>" <?php echo set_select('for', $mkl['makul_id']); ?>><?php echo $mkl['makul_nama']; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                        <small class="text-danger"><?php echo form_error('for'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" onclick="goBack();" class="btn mb-1 btn-warning">Batal</button>
                                    <button type="submit" class="btn mb-1 btn-success">Simpan</button>
                                </div>
                            </form>
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
