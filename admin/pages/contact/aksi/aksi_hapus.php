<?php
    if(!isset($_SESSION['id_admin'])){
        echo "
        <script>
        alert('Anda harus login dahulu');
        window.location.href='../../../login.php';
        </script>
        ";
    }else{

        if(!isset($_GET['id_contact'])){
            echo"<script>
            alert('Tidak ada ID, silahkan coba lagi!');
            window.location.href = '../../index.php?page=view_contact';
        </script>
        ";
        }
        include ("../../../include/konek.php");

        $id_contact = $_GET['id_contact'];

        $query = "DELETE FROM contact WHERE id_contact='$id_contact'";
        $result = mysqli_query($konek,$query) or die (mysqli_error($konek));

        if($result){
            //muncul pesan berhasil dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data berhasil dihapus!');
                window.location.href = '../../../index.php?page=view_contact';
            </script>
            ";
        }else{
            //muncul pesan gagal dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data gagal dihapus!');
                window.location.href = '../../../index.php?page=view_contact';
            </script>
            ";
        }
    }

?>