<?php
    session_start();

    if(!isset($_SESSION['id_admin'])){
        echo "
        <script>
        alert('Anda harus login dahulu');
        window.location.href='../../../login.php';
        </script>
        ";
    }else{
        
        if(!isset($_GET['id_skill'])){
            echo"<script>
            alert('Tidak ada ID, silahkan coba lagi!');
            window.location.href = '../../index.php?page=view_skill';
        </script>
        ";
        }
        include ("../../../include/konek.php");

        $id_skill = $_GET['id_skill'];

        $query = "DELETE FROM skill WHERE id_skill='$id_skill'";
        $result = mysqli_query($konek,$query) or die (mysqli_error($konek));

        if($result){
            //muncul pesan berhasil dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data berhasil dihapus!');
                window.location.href = '../../../index.php?page=view_skill';
            </script>
            ";
        }else{
            //muncul pesan gagal dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data gagal dihapus!');
                window.location.href = '../../../index.php?page=view_skill';
            </script>
            ";
        }
    }

?>