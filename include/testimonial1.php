<section class="w3l-testimonials" id="clients">
    <!-- /grids -->
    <div class="cusrtomer-layout py-5">
        <div class="container py-lg-4 py-md-3 pb-lg-0">

            <h5 class="title-small text-center mb-1">Testimonials</h5>
            <h3 class="title-big text-center mb-sm-5 mb-4">Happy Clients & Feedbacks</h3>
            <!-- /grids -->
            <div class="testimonial-width">
                <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
                    <?php
                    $testimonial = [
                        ["Andi","Saya suka sekolah ini, Penjelasan guru sangat seru dan mudah di pahami"],
                        ["Budi","Setelah saya belajar di sekolah ini saya diterima di PT Lawba"]
                    ];
                    foreach($testimonial as $row){
                    ?>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q><?= $row[1]  ?></q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img"><img src="assets/images/team1.jpg" class="img-fluid"
                                            alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3><?= $row[0]  ?></h3>
                                        <p class="indentity">Student</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- /grids -->
    </div>
    <!-- //grids -->
</section>