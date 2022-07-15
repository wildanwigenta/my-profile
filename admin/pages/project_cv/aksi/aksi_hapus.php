<?php

    if(!isset($_GET['id_project_cv'])){
        echo"<script>
        alert('Tidak ada ID, silahkan coba lagi!');
        window.location.href = '../../index.php?page=view_project_cv';
    </script>
    ";
    }
    include ("../../../include/konek.php");

    $id_project_cv = $_GET['id_project_cv'];

    $query = "DELETE FROM project_cv WHERE id_project_cv='$id_project_cv'";
    $result = mysqli_query($konek,$query) or die (mysqli_error($konek));

    if($result){
        //muncul pesan berhasil dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data berhasil dihapus!');
            window.location.href = '../../../index.php?page=view_project_cv';
        </script>
        ";
    }else{
        //muncul pesan gagal dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data gagal dihapus!');
            window.location.href = '../../../index.php?page=view_project_cv';
        </script>
        ";
    }

?>