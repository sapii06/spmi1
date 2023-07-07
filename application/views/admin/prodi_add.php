<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $title; ?></h4>
                        <div class="basic-form">
                            <form action="" method="post">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <div class="form-group">
                                    <label>Program Studi</label>
                                    <input type="text" class="form-control input-default" name="nama" value="<?php echo set_value('nama'); ?>" autofocus>
                                    <small class="text-danger"><?php echo form_error('nama'); ?></small>
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
