<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Siswa</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="index.php?page=tambah_siswa" class="btn btn-primary"> Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Hobi</th>
                            <th>Keterangan</th>
                            <th>Image</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include "include/konek.php";
                            $no = 1;
                            $query = "SELECT * FROM siswa";
                            $result = mysqli_query($koneks, $query) or die(mysqli_error($koneks));
                            while ($row = mysqli_fetch_array($result)) {
                            // $dataResult = mysqli_fetch_array($result);
                            // foreach($dataResult as $row) {
                                // print_r($dataResult);
                                ?>
                                <tr>
                                    <td scope="row"><?= $no++ ?></td>
                                    <td><?= $row['nik']  ?></td>
                                    <td><?= $row['nama']  ?></td>
                                    <td><?= $row['jurusan']  ?></td>
                                    <td><?= $row['jenis_kelamin'] ?></td>
                                    <td><?= $row['agama'] ?></td>
                                    <td><?= $row['hoby'] ?></td>
                                    <td><?= $row['keterangan'] ?></td>

                                    <td>
                                        <img src="../assets/images/siswa/<?= $row['pass_foto']  ?>" width="150" height=150>
                                    </td>

                                    <td>
                                        <a href="index.php?page=edit_siswa&nik_siswa=<?= $row['nik']?>" class= "btn btn-warning">Edit</a>
                                        <a href="pages/siswa/aksi/aksi_hapus.php?nik_siswa=<?=$row['nik']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</a>
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