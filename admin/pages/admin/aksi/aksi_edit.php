<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $IDadmin = $_POST['id_admin'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);

        //buat query untuk insert
        $query = "UPDATE admin SET username='$username', password='$password' WHERE id_admin='$IDadmin'";
        //eksekusi query insert
        $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
        //ketika sudah bisa insert
        if($result){
            //muncul pesan berhasil dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data berhasil ditambahkan!');
                window.location.href = '../../../index.php?page=view_admin';
            </script>
            ";
        }else{
            //muncul pesan gagal dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data gagal ditambahkan!');
                window.location.href = '../../../../index.php?page=view_admin';
            </script>
            ";
        }
        
    }

?>