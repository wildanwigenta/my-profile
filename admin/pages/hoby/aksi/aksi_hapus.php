<?php

    if(!isset($_GET['id_hoby'])){
        echo"<script>
        alert('Tidak ada ID, silahkan coba lagi!');
        window.location.href = '../../index.php?page=view_hoby';
    </script>
    ";
    }
    include ("../../../include/konek.php");

    $id_hoby = $_GET['id_hoby'];

    // ini proses utuk memanggil nama gambar yang sesuai denagn id
    $queryimage = "SELECT gambar FROM hoby WHERE id_hoby='$id_hoby'";
    $resultImage = mysqli_query($konek,$queryimage) or die (mysqli_error($konek));
    $row = mysqli_fetch_assoc($resultImage);

    // kemudian untuk hasil pemanggilan pada variable $row akan digunakan pada unlink
    // <alamat path>/<nama-file>
    
    if(file_exists("../../../../assets/images/hoby/".$row['gambar'])){
        unlink("../../../../assets/images/hoby/".$row['gambar']);
    }

    $query = "DELETE FROM hoby WHERE id_hoby='$id_hoby'";
    $result = mysqli_query($konek,$query) or die (mysqli_error($konek));

    if($result){
        //muncul pesan berhasil dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data berhasil dihapus!');
            window.location.href = '../../../index.php?page=view_hoby';
        </script>
        ";
    }else{
        //muncul pesan gagal dan pindah ke halaman awal master data
        echo"
        <script>
            alert('Data gagal dihapus!');
            window.location.href = '../../../index.php?page=view_hoby';
        </script>
        ";
    }

?>