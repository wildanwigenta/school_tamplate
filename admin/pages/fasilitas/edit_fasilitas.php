<?php

    // ketika nilai nisn pada url tidak ada
    // maka kembali ke halaman data siswa
    if(!isset($_GET['id_fasilitas'])){
        echo"<script>
        alert('Tidak ada id, silahkan coba lagi!');
        window.location.href = 'index.php?page=view_fasilitas';
    </script>
    ";
    }

    include "include/konek.php";

    $id_fasilitas = $_GET['id_fasilitas'];

    $query = "SELECT * FROM fasilitas WHERE id_fasilitas='$id_fasilitas'";
    $result = mysqli_query($koneks,$query) or die(mysqli_error($koneks));
    // tampung 1 data saja dengan menggunakan mysqli_fetch_assoc
    // hal ini berbeda dengan kita menggunakan mysqli_fetch_array
    $data = mysqli_fetch_assoc($result);
?>
<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="p-5">
                            <div class="text">
                                <h1 class="h4 text-gray-900 mb-4">Edit Data Fasilitas</h1>
                                <!-- saya menambahkan perubahan baru -->
                            </div>
                            <form class="user" action="pages/fasilitas/aksi/aksi_edit.php" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="id_fasilitas" id="exampleInputEmail"
                                        placeholder="id_fasilitas" value="<?= $data['id_fasilitas']?>" hidden>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="fasilitas" id="exampleInputEmail"
                                        placeholder="fasilitas" value="<?= $data['fasilitas']?>">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="deskripsi" id="exampleInputEmail"
                                        placeholder="deskripsi" value="<?= $data['deskripsi']?>">
                                </div>
                            

                                <button type="submit" class="btn btn-primary">Edit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>