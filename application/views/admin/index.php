

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card-body card-widget">
                                        <div class="media">
                                            <span class="card-widget__icon text-primary"><i class="icon-globe-alt"></i></span>
                                            <div class="media-body">
                                                <h2 class="card-widget__title"><?php echo $cindeks; ?></h2>
                                                <h5 class="card-widget__subtitle">Indeks</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-sm-6 col-lg-3 border-left">
                                    <div class="card-body card-widget">
                                        <div class="media">
                                            <span class="card-widget__icon text-warning"><i class="icon-grid"></i></span>
                                            <div class="media-body">
                                                <h2 class="card-widget__title"><?php echo $ckuesio; ?></h2>
                                                <h5 class="card-widget__subtitle">Kuesioner</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-sm-6 col-lg-3 border-left">
                                    <div class="card-body card-widget">
                                        <div class="media">
                                            <span class="card-widget__icon text-success"><i class="icon-note"></i></span>
                                            <div class="media-body">
                                                <h2 class="card-widget__title"><?php echo $chasil; ?></h2>
                                                <h5 class="card-widget__subtitle">Jawaban</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-sm-6 col-lg-3 border-left">
                                    <div class="card-body card-widget">
                                        <div class="media">
                                            <span class="card-widget__icon text-info"><i class="icon-user"></i></span>
                                            <div class="media-body">
                                                <h2 class="card-widget__title"><?php echo count($crespon); ?></h2>
                                                <h5 class="card-widget__subtitle">Responden</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Berdasarkan Jawaban</h4>
                                <canvas id="donutChart"></canvas>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grafik Jawaban Kuesioner Harian</h4>
                                <canvas id="bychart" width="750" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Hasil Berdasarkan Indeks</h4>
                                <canvas id="grafik"></canvas>
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