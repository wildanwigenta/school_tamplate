<?php

    if(!isset($_GET['nik_siswa'])){
        echo"<script>
        alert('Tidak ada ID, silahkan coba lagi!');
        window.location.href = '../../index.php?page=view_siswa';
    </script>
    ";
    }
    include ("../../../include/konek.php");
    $nik_siswa=$_GET['nik_siswa'];

    $query = "DELETE FROM siswa WHERE nik='$nik_siswa'";
    $result = mysqli_query($koneks,$query) or die(mysqli_error($koneks));

    if($result){
        //muncul pesan berhasil dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data berhasil dihapus!');
            window.location.href = '../../../index.php?page=view_siswa';
        </script>
        ";
    }else{
        //muncul pesan gagal dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data gagal dihapus!');
            window.location.href = '../../../index.php?page=view_siswa';
        </script>
        ";
    }
    
?>