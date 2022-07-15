<?php
    if(!isset($_SESSION['id_admin'])){
        echo "
        <script>
        alert('Anda harus login dahulu');
        window.location.href='../../../login.php';
        </script>
        ";
    }else{

        if(!isset($_GET['id_profile'])){
            echo"<script>
            alert('Tidak ada ID, silahkan coba lagi!');
            window.location.href = '../../index.php?page=view_profile';
        </script>
        ";
        }
        include ("../../../include/konek.php");

        $id_profile = $_GET['id_profile'];

        // ini proses utuk memanggil nama gambar yang sesuai denagn id
        $queryimage = "SELECT gambar FROM profile WHERE id_profile='$id_profile'";
        $resultImage = mysqli_query($konek,$queryimage) or die (mysqli_error($konek));
        $row = mysqli_fetch_assoc($resultImage);

        // kemudian untuk hasil pemanggilan pada variable $row akan digunakan pada unlink
        // <alamat path>/<nama-file>
        if(file_exists("../../../../assets/images/profile/".$row['gambar'])){
            unlink("../../../../assets/images/profile/".$row['gambar']);
        }
        

        $query = "DELETE FROM profile WHERE id_profile='$id_profile'";
        $result = mysqli_query($konek,$query) or die (mysqli_error($konek));

        if($result){
            //muncul pesan berhasil dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data berhasil dihapus!');
                window.location.href = '../../../index.php?page=view_profile';
            </script>
            ";
        }else{
            //muncul pesan gagal dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data gagal dihapus!');
                window.location.href = '../../../index.php?page=view_profile';
            </script>
            ";
        }
    }

?>