<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $title; ?></h4>
                        <form action="" method="post">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label>Semester</label>
                                <input type="number" min="1" class="form-control input-default" name="sms" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Angkatan</label>
                                <select name="tahun" class="form-control input-default" required>
                                    <option value="">-Pilih-</option>
                                    <?php foreach($listahun as $lt): ?>
                                        <option value="<?php echo $lt['mhs_tahun']; ?>"><?php echo $lt['mhs_tahun']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <button style="margin-top: 32px;" type="submit" class="btn mb-1 btn-primary">Lihat</button>
                            </div>
                        </div>
                        </form>
                        <div class="table-responsive">
                            <canvas id="donutChart"></canvas>
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
