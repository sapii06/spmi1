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
                                        <label>NIM</label>
                                        <input type="number" class="form-control input-default" name="nim" value="<?php echo set_value('nim'); ?>" autofocus>
                                        <small class="text-danger"><?php echo form_error('nim'); ?></small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nama</label>
                                        <input type="text" class="form-control input-default" name="nama" value="<?php echo set_value('nama'); ?>">
                                        <small class="text-danger"><?php echo form_error('nama'); ?></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Username</label>
                                        <input type="text" class="form-control input-default" name="username" value="<?php echo set_value('username'); ?>">
                                        <small class="text-danger"><?php echo form_error('username'); ?></small>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Email</label>
                                        <input type="text" class="form-control input-default" name="email" value="<?php echo set_value('email'); ?>">
                                        <small class="text-danger"><?php echo form_error('email'); ?></small>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Semester</label>
                                        <input type="number" min="1" class="form-control input-default" name="sms" value="<?php echo set_value('sms'); ?>">
                                        <small class="text-danger"><?php echo form_error('sms'); ?></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Tahun</label>
                                        <input type="number" min="2000" class="form-control input-default" name="tahun" value="<?php echo set_value('tahun'); ?>">
                                        <small class="text-danger"><?php echo form_error('tahun'); ?></small>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Program Studi</label>
                                        <select name="prodi" class="form-control">
                                                <option value="">-Pilih-</option>
                                            <?php foreach($prodi as $prd): ?>
                                                <option value="<?php echo $prd['prodi_id']; ?>"><?php echo $prd['prodi_nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-danger"><?php echo form_error('prodi'); ?></small>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Mata Kuliah</label>
                                        <?php foreach ($makul as $mkl) { ?>
                <div class="form-check">
                    <input class="form-check-input" id="<?php echo $mkl['makul_id']; ?>" type="checkbox" name="makul[]" value="<?php echo $mkl['makul_id']; ?>">
                    <label for="<?php echo $mkl['makul_id']; ?>" class="form-check-label"><?php echo $mkl['makul_nama']; ?></label>
                </div>
            <?php } ?>
                                        <small class="text-danger"><?php echo form_error('makul'); ?></small>
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
