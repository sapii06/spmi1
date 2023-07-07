<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <?php if($this->session->flashdata('flash')): ?>
                        <div class="alert alert-success"><strong><i class="fa fa-check-circle"></i></strong> <?php echo $this->session->flashdata('flash'); ?></div>
                    <?php endif; ?>
                    <div class="basic-form">
                            <?php $i = 1; ?>
                            <?php foreach($kuesioner as $kue): ?>
<?php $listpil = $this->db->get('tb_jawaban')->result_array(); ?>
<?php $myhasil = $this->db->get_where('tb_hasil',['hasil_kuesioner' => $kue['kuesioner_id'], 'hasil_user' => $this->session->userdata('mhs_id'), 'hasil_prodi' => $me['mhs_prodi'], 'hasil_sms' => $me['mhs_semester']])->row_array(); ?>
                            <h4 class="card-title"><?php echo $i; ?>. <?php echo $kue['kuesioner_judul']; ?></h4>
<?php if($myhasil) { ?>
    <ul>
                            <?php foreach($listpil as $pil): ?>
<?php if($myhasil['hasil_jawaban'] == $pil['jawab_id']) { ?>
    <li><a href="user/indeks/submit/<?php echo $kue['kuesioner_id']; ?>/<?php echo $pil['jawab_id']; ?>" class="btn btn-success btn-sm btn-block text-left mb-1"><?php echo $pil['jawab_jenis']; ?></a></li>
<?php }else { ?>
                                <li><a href="user/indeks/submit/<?php echo $kue['kuesioner_id']; ?>/<?php echo $pil['jawab_id']; ?>" class="btn btn-primary btn-sm btn-block text-left mb-1"><?php echo $pil['jawab_jenis']; ?></a></li>
<?php } ?>
                            <?php endforeach; ?>
                            </ul>
<?php }else { ?>
    <ul>
                            <?php foreach($listpil as $pil): ?>
                                <li><a href="user/indeks/submit/<?php echo $kue['kuesioner_id']; ?>/<?php echo $pil['jawab_id']; ?>" class="btn btn-primary btn-sm btn-block text-left mb-1"><?php echo $pil['jawab_jenis']; ?></a></li>
                            <?php endforeach; ?>
                            </ul>
<?php } ?>
                            
                            <?php $i++; ?>
                            <?php endforeach; ?>
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
