<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $id_fasilitas = $_POST['id_fasilitas'];
            $nama = $_POST['nama'];
            $jurusan = $_POST['jurusan'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $hobi = $_POST['hobi'];
            $keterangan = $_POST['keterangan'];

            $pass_foto = $_FILES['pass_foto']['tmp_name'];
            //ubah nama dengan kombinasi ID dan nama lengkap
            $namaFoto = time().".png";

            if(file_exists("../../../../assets/images/siswa/".$namaFoto)){
                //unlink adalah hapus file yang mana akan di gantikan oleh file baru
                unlink("../../../../assets/images/siswa/".$namaFoto);
            }
            //upload ke folder images
            move_uploaded_file($pass_foto, "../../../../assets/images/siswa/".$namaFoto);

            //buat query untuk insert
            $query = "UPDATE siswa SET nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',agama='$agama',hoby='$hobi',keterangan='$keterangan',pass_foto='$namaFoto' WHERE nik='$nik'";

            //eksekusi query insert
            $result = mysqli_query($koneks,$query) or die (mysqli_error($koneks));
            //ketika sudah bisa insert
            if($result){
                //muncul pesan berhasil dan pindah ke halaman awal  data
                echo"
                <script>
                    alert('Data berhasil ditambahkan!');
                    window.location.href = '../../../index.php?page=view_siswa';
                </script>
                ";
            }else{
                //muncul pesan gagal dan pindah ke halaman awal data
                echo"
                <script>
                    alert('Data gagal ditambahkan!');
                    window.location.href = '../../../index.php?page=view_siswa';
                </script>
                ";
            }
            

        }

?>