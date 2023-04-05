<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">fasilitas</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="index.php?page=tambah_fasilitas" class="btn btn-primary"> Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>id_fasilitas</th>
                            <th>fasilitas</th>
                            <th>deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include "include/konek.php";
                            $no = 1;
                            $query = "SELECT * FROM fasilitas";
                            $result = mysqli_query($koneks, $query) or die(mysqli_error($koneks));
                            while ($row = mysqli_fetch_array($result)) {
                            // $dataResult = mysqli_fetch_array($result);
                            // foreach($dataResult as $row) {
                                // print_r($dataResult);
                                ?>
                                <tr>
                                    <td scope="row"><?= $no++ ?></td>
                                    <td><?= $row['id_fasilitas']  ?></td>
                                    <td><?= $row['fasilitas']  ?></td>
                                    <td><?= $row['deskripsi']  ?></td>
                                    <td>
                                        <a href="index.php?page=edit_fasilitas&id_fasilitas=<?= $row['id_fasilitas']?>" class= "btn btn-warning">Edit</a>
                                        <a href="pages/fasilitas/aksi/aksi_hapus.php?id_fasilitas=<?=$row['id_fasilitas']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</a>
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