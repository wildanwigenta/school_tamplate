<?php

    // ketika nilai nisn pada url tidak ada
    // maka kembali ke halaman data siswa
    if(!isset($_GET['id_berita'])){
        echo"<script>
        alert('Tidak ada NIK, silahkan coba lagi!');
        window.location.href = 'index.php?page=view_berita';
    </script>
    ";
    }

    include "include/konek.php";

    $id_berita = $_GET['id_berita'];

    $query = "SELECT * FROM berita WHERE id_berita='$id_berita'";
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
                                <h1 class="h4 text-gray-900 mb-4">Edit Data Berita</h1>
                                <!-- halooo saya menambahkan perubahan baru -->
                            </div>
                            <form class="user" action="pages/berita/aksi/aksi_edit.php" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="id_berita" id="exampleInputEmail"
                                        placeholder="id" value="<?= $data['id_berita']?>" hidden>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="judul" id="exampleInputEmail"
                                        placeholder="judul" value="<?= $data['judul']?>">
                                </div>

                                <div class="form-group">
                                    <input type="datetime-local" class="form-control form-control-user" name="tanggal" id="exampleInputEmail"
                                        placeholder="tanggal" value="<?= $data['tanggal']?>">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="isi" id="exampleInputEmail"
                                        placeholder="isi" value="<?= $data['isi']?>">
                                </div>
    
                                <div class="form-group">
                                    <label for="filefoto">Image</label><br>
                                    <input type="file"  name="pass_foto" id="exampleInputEmail"
                                        placeholder="Image" id="filefoto">
                                </div>

                                <button type="submit" class="btn btn-primary">Edit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>