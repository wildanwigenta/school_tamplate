<?php

    // ketika nilai nisn pada url tidak ada
    // maka kembali ke halaman data siswa
    if(!isset($_GET['nik_siswa'])){
        echo"<script>
        alert('Tidak ada NIK, silahkan coba lagi!');
        window.location.href = 'index.php?page=view_siswa';
    </script>
    ";
    }

    include "include/konek.php";

    $nikSiswa = $_GET['nik_siswa'];

    $query = "SELECT * FROM siswa WHERE nik='$nikSiswa'";
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
                                <h1 class="h4 text-gray-900 mb-4">Edit Data Siswa</h1>
                                <!-- halooo saya menambahkan perubahan baru -->
                            </div>
                            <form class="user" action="pages/siswa/aksi/aksi_edit.php" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nik" id="exampleInputEmail"
                                        placeholder="nik" value="<?= $data['nik']?>">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama" id="exampleInputEmail"
                                        placeholder="nama" value="<?= $data['nama']?>">
                                </div>
                            

                                <small>jurusan</small>
                                <?php 
                                    $jurusan = $data['jurusan'];
                                ?>
                                <div class="form-group">
                                    <select name="jurusan">
                                        <option value="RPL" <?= ($jurusan == "RPL")? "selected" : '' ?>>RPL</option>
                                        <option value="TKJ" <?= ($jurusan == "TKJ")? "selected" : '' ?>>TKJ</option>
                                        <option value="MM" <?= ($jurusan == "MM")? "selected" : '' ?>>MM</option>
                                    </select>
                                </div>

                                <small>jenis kelamin</small>
                                <?php 
                                    $jenkel = $data['jenis_kelamin'];
                                ?>
                                <div class="form-group">
                                    <select name="jenis_kelamin"  >
                                        <option value="L" <?= ($jenkel == "L")? "selected" : '' ?> >Laki-Laki</option>
                                        <option value="P" <?= ($jenkel == "P")? "selected" : '' ?> >Perempuan</option>
                                    </select>
                                </div>

                                <small>Agama</small>
                                <?php 
                                    $agama = $data['agama'];
                                ?>
                                <div class="form-group">
                                    <select name="agama"  >
                                        <option value="islam" <?= ($agama == "islam")? "selected" : '' ?> >islam</option>
                                        <option value="khatolik" <?= ($agama == "khatolik")? "selected" : '' ?> >khatolik</option>
                                        <option value="kristen" <?= ($agama == "kristen")? "selected" : '' ?> >kristen</option>
                                        <option value="hindu" <?= ($agama == "hindu")? "selected" : '' ?> >hindu</option>
                                        <option value="buddha" <?= ($agama == "buddha")? "selected" : '' ?> >buddha</option>
                                        <option value="konghucu" <?= ($agama == "konghucu")? "selected" : '' ?> >konghucu</option>
                                    </select>
                                </div>

                                <small>Hoby</small>
                                <?php 
                                    $hobi = $data['hoby'];
                                ?>
                                <div class="form-group">
                                    <select name="hobi"  >
                                        <option value="badminton" <?= ($hobi == "badminton")? "selected" : '' ?> >badminton</option>
                                        <option value="berenang" <?= ($hobi == "berenang")? "selected" : '' ?> >berenang</option>
                                        <option value="futsal" <?= ($hobi == "futsal")? "selected" : '' ?> >futsal</option>
                                        <option value="jogging" <?= ($hobi == "jogging")? "selected" : '' ?> >jogging</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="keterangan" id="exampleInputEmail"
                                        placeholder="keterangan" value="<?= $data['keterangan']?>">
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