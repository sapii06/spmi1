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
                                        <input type="number" class="form-control input-default" name="nim" value="<?php echo $mhid['mhs_nim']; ?>" autofocus>
                                        <small class="text-danger"><?php echo form_error('nim'); ?></small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nama</label>
                                        <input type="text" class="form-control input-default" name="nama" value="<?php echo $mhid['mhs_nama']; ?>">
                                        <small class="text-danger"><?php echo form_error('nama'); ?></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Username</label>
                                        <input type="text" class="form-control input-default" name="username" value="<?php echo $mhid['mhs_username']; ?>">
                                        <small class="text-danger"><?php echo form_error('username'); ?></small>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Email</label>
                                        <input type="text" class="form-control input-default" name="email" value="<?php echo $mhid['mhs_email']; ?>">
                                        <small class="text-danger"><?php echo form_error('email'); ?></small>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Semester</label>
                                        <input type="number" min="1" class="form-control input-default" name="sms" value="<?php echo $mhid['mhs_semester']; ?>">
                                        <small class="text-danger"><?php echo form_error('sms'); ?></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Tahun</label>
                                        <input type="number" min="2000" class="form-control input-default" name="tahun" value="<?php echo $mhid['mhs_tahun']; ?>">
                                        <small class="text-danger"><?php echo form_error('tahun'); ?></small>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Program Studi</label>
                                        <select name="prodi" class="form-control">
                                            <?php if($mhid['mhs_prodi'] == 0) { ?>
                                                <option value="">-Pilih-</option>
                                                <?php foreach($prodi as $prd): ?>
                                                    <option value="<?php echo $prd['prodi_id']; ?>"><?php echo $prd['prodi_nama']; ?></option>
                                                <?php endforeach; ?>
                                            <?php }else { ?>
                                                <?php foreach($prodi as $prd): ?>
                                                <option <?php if($mhid['mhs_prodi'] == $prd['prodi_id']) {echo 'selected="selected"'; } ?> value="<?php echo $prd['prodi_id']; ?>"><?php echo $prd['prodi_nama']; ?></option>
                                                <?php endforeach; ?>
                                            <?php } ?>
                                        </select>
                                        <small class="text-danger"><?php echo form_error('prodi'); ?></small>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Mata Kuliah</label>
                                        <?php foreach ($makul as $mkl): ?>
<div class="form-check">
    <input class="form-check-input" id="<?php echo $mkl['makul_id']; ?>" type="checkbox" name="makul[]" value="<?php echo $mkl['makul_id']; ?>" <?php echo (in_array($mkl['makul_id'], array_column($makulby, 'promhs_id'))) ? 'checked' : ''; ?>>
    <label for="<?php echo $mkl['makul_id']; ?>" class="form-check-label"><?php echo $mkl['makul_nama']; ?></label>
</div>
        <?php endforeach; ?>
                                        <small class="text-danger"><?php echo form_error('makul'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control input-default" name="password">
                                    <small class="text-muted">Kosongkan kolom ini jika tidak ingin mengganti password.</small>
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
