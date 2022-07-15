<?php
    if(!isset($_SESSION['id_admin'])){
        echo "
        <script>
        alert('Anda harus login dahulu');
        window.location.href='../../../login.php';
        </script>
        ";
    }else{

        if(!isset($_GET['id_about'])){
            echo"<script>
            alert('Tidak ada ID, silahkan coba lagi!');
            window.location.href = '../../index.php?page=view_about';
        </script>
        ";
        }
        include ("../../../include/konek.php");

        $id_about = $_GET['id_about'];

        // ini proses utuk memanggil nama gambar yang sesuai denagn id
        $queryimage = "SELECT gambar FROM about WHERE id_about='$id_about'";
        $resultImage = mysqli_query($konek,$queryimage) or die (mysqli_error($konek));
        $row = mysqli_fetch_assoc($resultImage);

        // kemudian untuk hasil pemanggilan pada variable $row akan digunakan pada unlink
        // <alamat path>/<nama-file>
        if(file_exists("../../../../assets/images/about/".$row['gambar'])){
            unlink("../../../../assets/images/about/".$row['gambar']);
        }

        $query = "DELETE FROM about WHERE id_about='$id_about'";
        $result = mysqli_query($konek,$query) or die (mysqli_error($konek));

        if($result){
            //muncul pesan berhasil dan pindah ke halaman awal master data
            // echo"
            // <script>
            //     alert('Data berhasil dihapus!');
            //     window.location.href = '../../../index.php?page=view_about';
            // </script>
            // ";
        }else{
            //muncul pesan gagal dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data gagal dihapus!');
                window.location.href = '../../../index.php?page=view_about';
            </script>
            ";
        }
    }

?>