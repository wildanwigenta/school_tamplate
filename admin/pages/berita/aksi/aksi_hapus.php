<?php

    if(!isset($_GET['id_berita'])){
        echo"<script>
        alert('Tidak ada ID, silahkan coba lagi!');
        window.location.href = '../../index.php?page=view_siswa';
    </script>
    ";
    }
    include ("../../../include/konek.php");
    $id_berita=$_GET['id_berita'];

    $query = "DELETE FROM berita WHERE id_berita='$id_berita'";
    $result = mysqli_query($koneks,$query) or die(mysqli_error($koneks));

    if($result){
        //muncul pesan berhasil dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data berhasil dihapus!');
            window.location.href = '../../../index.php?page=view_berita';
        </script>
        ";
    }else{
        //muncul pesan gagal dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data gagal dihapus!');
            window.location.href = '../../../index.php?page=view_berita';
        </script>
        ";
    }
    
?>