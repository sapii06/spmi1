
<!DOCTYPE html>
<html class="h-100" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <base href="<?php echo base_url(); ?>"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>UNIQHBA | Login Mahasiswa</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="assets/css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href=""> <h4>Universitas Qamarul Huda Badaruddin</h4></a>
                                <?php if($this->session->flashdata('error')): ?>
                                    <div class="alert alert-danger"><strong><i class="fa fa-times-circle"></i></strong> <?php echo $this->session->flashdata('error'); ?></div>
                                <?php endif; ?>
                                <?php if($this->session->flashdata('flash')): ?>
                                    <div class="alert alert-success"><strong><i class="fa fa-check-circle"></i></strong> <?php echo $this->session->flashdata('flash'); ?></div>
                                <?php endif; ?>
                                <form class="mt-5 mb-5 login-input" action="" method="post">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="nim" value="82793729" placeholder="NIM">
                                        <!-- <input type="text" class="form-control" name="nim" placeholder="NIM"> -->
                                        <small class="text-danger"><?php echo form_error('nim'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="password" value="82793729" placeholder="Password = NIM">
                                        <small class="text-danger"><?php echo form_error('password'); ?></small>
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="assets/plugins/common/common.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/gleek.js"></script>
    <script src="assets/js/styleSwitcher.js"></script>
</body>
</html>





