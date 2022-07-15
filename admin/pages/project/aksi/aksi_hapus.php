<?php

    if(!isset($_GET['id_project'])){
        echo"<script>
        alert('Tidak ada ID, silahkan coba lagi!');
        window.location.href = '../../index.php?page=view_project';
    </script>
    ";
    }
    include ("../../../include/konek.php");

    $id_project = $_GET['id_project'];

    // ini proses utuk memanggil nama gambar yang sesuai denagn id
    $queryimage = "SELECT gambar FROM project WHERE id_project='$id_project'";
    $resultImage = mysqli_query($konek,$queryimage) or die (mysqli_error($konek));
    $row = mysqli_fetch_assoc($resultImage);

    // kemudian untuk hasil pemanggilan pada variable $row akan digunakan pada unlink
    // <alamat path>/<nama-file>
    unlink("../../../../assets/images/project/".$row['gambar']);

    $query = "DELETE FROM project WHERE id_project='$id_project'";
    $result = mysqli_query($konek,$query) or die (mysqli_error($konek));

    if($result){
        //muncul pesan berhasil dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data berhasil dihapus!');
            window.location.href = '../../../index.php?page=view_project';
        </script>
        ";
    }else{
        //muncul pesan gagal dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data gagal dihapus!');
            window.location.href = '../../../index.php?page=view_project';
        </script>
        ";
    }

?>