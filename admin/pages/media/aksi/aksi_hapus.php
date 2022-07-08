<?php

    if(!isset($_GET['id_media'])){
        echo"<script>
        alert('Tidak ada ID, silahkan coba lagi!');
        window.location.href = '../../index.php?page=view_media';
    </script>
    ";
    }
    include ("../../../include/konek.php");

    $id_media = $_GET['id_media'];

    // ini proses utuk memanggil nama gambar yang sesuai denagn id
    $queryimage = "SELECT gambar FROM media WHERE id_media='$id_media'";
    $resultImage = mysqli_query($konek,$queryimage) or die (mysqli_query($konek));
    $row = mysqli_fetch_assoc($resultImage);

    // kemudian untuk hasil pemanggilan pada variable $row akan digunakan pada unlink
    // <alamat path>/<nama-file>
    unlink("../../../../assets/images/media/".$row['gambar']);

    $query = "DELETE FROM media WHERE id_media='$id_media'";
    $result = mysqli_query($konek,$query) or die (mysqli_query($konek));

    if($result){
        //muncul pesan berhasil dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data berhasil dihapus!');
            window.location.href = '../../../index.php?page=view_media';
        </script>
        ";
    }else{
        //muncul pesan gagal dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data gagal dihapus!');
            window.location.href = '../../../index.php?page=view_media';
        </script>
        ";
    }

?>