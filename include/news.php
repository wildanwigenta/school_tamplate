<div class="w3l-homeblock3 py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <h5 class="title-small text-center mb-1">From the news</h5>
        <h3 class="title-big text-center mb-sm-5 mb-4">Berita Terkini</h3>
        <div class="row top-pics">
                <!-- <?php 
                    include "admin/include/konek.php";
                    $select = "SELECT * FROM berita";
                    $query = mysqli_query($koneks, $select) or die (mysqli_error($koneks));
                    while ($row = mysqli_fetch_array($query)){
                ?>
                <div class="col-md-6 mt-md-0 mt-4">
                <div class="top-pic2" style="background:url('assets/images/berita/<?= $row['gambar'] ?>'); background-size: cover;" >
                    <div class="card-body blog-details">
                        <a href="#blog-single" class="blog-desc">
                            <?= $row['judul'] ?>
                        </a>
                        <div class="author align-items-center">
                            <img src="assets/images/berita/<?= $row['gambar'] ?>" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> <?= $row['tanggal'] ?> </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                <?php } ?> -->
            </div>
        </div>

        <div class="mt-md-5 mt-4 text-more text-center">
            <a href="blog.php">View All Posts <span class="pl-2 fa fa-long-arrow-right"></span></a>
        </div>
    </div>
</div>