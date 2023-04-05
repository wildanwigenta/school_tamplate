<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Berita</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="index.php?page=tambah_berita" class="btn btn-primary"> Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>id Berita</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Isi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include "include/konek.php";
                            $no = 1;
                            $query = "SELECT * FROM berita";
                            $result = mysqli_query($koneks, $query) or die(mysqli_error($koneks));
                            while ($row = mysqli_fetch_array($result)) {
                            // $dataResult = mysqli_fetch_array($result);
                            // foreach($dataResult as $row) {
                                // print_r($dataResult);
                                ?>
                                <tr>
                                    <td scope="row"><?= $no++ ?></td>
                                    <td><?= $row['id_berita']  ?></td>
                                    <td><?= $row['judul']  ?></td>
                                    <td><?= $row['tanggal']  ?></td>
                                    <td><?= $row['isi'] ?></td>

                                    <td>
                                        <img src="../assets/images/berita/<?= $row['gambar']  ?>" width="150" height=150>
                                    </td>

                                    <td>
                                        <a href="index.php?page=edit_berita&id_berita=<?= $row['id_berita']?>" class= "btn btn-warning">Edit</a>
                                        <a href="pages/berita/aksi/aksi_hapus.php?id_berita=<?=$row['id_berita']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>