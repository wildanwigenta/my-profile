<?php

    if(!isset($_GET['id_admin'])){
        echo"<script>
        alert('Tidak ada ID, silahkan coba lagi!');
        window.location.href = '../../index.php?page=view_admin';
    </script>
    ";
    }
    include ("../../../include/konek.php");

    $id_admin = $_GET['id_admin'];

    $query = "DELETE FROM admin WHERE id_admin='$id_admin'";
    $result = mysqli_query($konek,$query) or die (mysqli_query($konek));

    if($result){
        //muncul pesan berhasil dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data berhasil dihapus!');
            window.location.href = '../../../index.php?page=view_admin';
        </script>
        ";
    }else{
        //muncul pesan gagal dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data gagal dihapus!');
            window.location.href = '../../../index.php?page=view_admin';
        </script>
        ";
    }

?>