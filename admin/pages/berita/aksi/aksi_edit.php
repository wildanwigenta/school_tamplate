<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $id_berita = $_POST['id_berita'];
            $judul = $_POST['judul'];
            $tanggal = $_POST['tanggal'];
            $isi = $_POST['isi'];

            $pass_foto = $_FILES['pass_foto']['tmp_name'];
            //ubah nama dengan kombinasi ID dan nama lengkap
            $namaFoto = time().".png";

            if(file_exists("../../../../assets/images/berita/".$namaFoto)){
                //unlink adalah hapus file yang mana akan di gantikan oleh file baru
                unlink("../../../../assets/images/berita/".$namaFoto);
            }
            //upload ke folder images
            move_uploaded_file($pass_foto, "../../../../assets/images/berita/".$namaFoto);

            //buat query untuk insert
            $query = "UPDATE berita SET judul='$judul',tanggal='$tanggal',isi='$isi',gambar='$namaFoto' WHERE id_berita='$id_berita'";

            //eksekusi query insert
            $result = mysqli_query($koneks,$query) or die (mysqli_error($koneks));
            //ketika sudah bisa insert
            if($result){
                //muncul pesan berhasil dan pindah ke halaman awal  data
                echo"
                <script>
                    alert('Data berhasil ditambahkan!');
                    window.location.href = '../../../index.php?page=view_berita';
                </script>
                ";
            }else{
                //muncul pesan gagal dan pindah ke halaman awal data
                echo"
                <script>
                    alert('Data gagal ditambahkan!');
                    window.location.href = '../../../index.php?page=view_berita';
                </script>
                ";
            }
            

        }

?>