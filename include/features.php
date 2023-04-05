<section class="w3l-features py-5" id="facilities">
    <div class="call-w3 py-lg-5 py-md-4 py-2">
        <div class="container">
            <div class="row main-cont-wthree-2">
                <div class="col-lg-5 feature-grid-left">
                    <h5 class="title-small mb-1">Fasilitas Sekolah</h5>
                    <h3 class="title-big mb-4">Apa saja fitur di sekolah ini </h3>
                    <p class="text-para">Fasilitas yang mendukung dapat meningkatkan produktifitas siswa untuk lebih semangat dalam menimba ilmu di sekolah ini. </p>
                    <a href="#url" class="btn btn-primary btn-style mt-md-5 mt-4">Discover More</a>
                </div>

                <div class="col-lg-7 feature-grid-right mt-lg-0 mt-5">
                    <div class="call-grids-w3 d-grid">

                        <?php
                        $fitur = [
                            ["Lingkungan yang mendukung","Lingkungan sekolah yang mendukung akan membuat belajar lebih nyaman dan menyenangkan"],
                            ["Lab Komputer","Lab komputer yang memadai juga menjadi pendukung siswa untuk melakukan pembelajaran dengan mudah"],
                            ["Beasiswa","Sekolah juga menyediakan beasiswa"],
                            ["Disalurkan ke beberapa perusahaan","Menghasilkan lulusan yang terbaik, dan disalurkan ke beberapa perusahaan terkenal"]
                        ];
                            foreach($fitur as $row){
                        ?>
                            <div class="grids-1 box-wrap">
                                <a href="#more" class="icon"><span class="fa fa-certificate"></span></a>
                                <h4><a href="#feature" class="title-head"><?= $row[0] ?></a></h4>
                                <p><?= $row[1] ?></p>
                            </div>
                            
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>