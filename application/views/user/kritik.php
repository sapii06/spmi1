<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $title; ?></h4>
                        <?php if($this->session->flashdata('flash')): ?>
                            <div class="alert alert-success"><strong><i class="fa fa-check-circle"></i></strong> <?php echo $this->session->flashdata('flash'); ?></div>
                        <?php endif; ?>
                        <div class="basic-form">
                            <form action="" method="post">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <div class="form-group">
                                    <label>Kritik/Saran</label>
                                    <input type="text" class="form-control input-default" name="isi" autofocus>
                                    <small class="text-danger"><?php echo form_error('isi'); ?></small>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn mb-1 btn-success">Kirim</button>
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
