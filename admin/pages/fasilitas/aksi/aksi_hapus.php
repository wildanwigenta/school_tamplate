<?php

    if(!isset($_GET['id_fasilitas'])){
        echo"<script>
        alert('Tidak ada ID, silahkan coba lagi!');
        window.location.href = '../../index.php?page=view_fasilitas';
    </script>
    ";
    }
    include ("../../../include/konek.php");
    $id_fasilitas=$_GET['id_fasilitas'];

    $query = "DELETE FROM fasilitas WHERE id_fasilitas='$id_fasilitas'";
    $result = mysqli_query($koneks,$query) or die(mysqli_error($koneks));

    if($result){
        //muncul pesan berhasil dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data berhasil dihapus!');
            window.location.href = '../../../index.php?page=view_fasilitas';
        </script>
        ";
    }else{
        //muncul pesan gagal dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data gagal dihapus!');
            window.location.href = '../../../index.php?page=view_fasilitas';
        </script>
        ";
    }
    
?>