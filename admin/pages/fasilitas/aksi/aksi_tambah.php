<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $fasilitas = $_POST['fasilitas'];
            $deskripsi = $_POST['deskripsi'];

            //buat query untuk insert
            $query = "INSERT INTO fasilitas VALUES(null,'$fasilitas','$deskripsi')";

            //eksekusi query insert
            $result = mysqli_query($koneks,$query) or die (mysqli_error($koneks));
            //ketika sudah bisa insert
            if($result){
                //muncul pesan berhasil dan pindah ke halaman awal  data
                echo"
                <script>
                    alert('Data berhasil ditambahkan!');
                    window.location.href = '../../../index.php?page=view_fasilitas';
                </script>
                ";
            }else{
                //muncul pesan gagal dan pindah ke halaman awal data
                echo"
                <script>
                    alert('Data gagal ditambahkan!');
                    window.location.href = '../../../index.php?page=view_fasilitas';
                </script>
                ";
            }
            

        }

?>