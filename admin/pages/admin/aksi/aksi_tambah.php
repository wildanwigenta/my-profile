<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            //buat query untuk insert
            $query = "INSERT INTO admin VALUES(NULL,'$username','$password')";

            //eksekusi query insert
            $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
            //ketika sudah bisa in,,l,sert
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
                    window.location.href = '../../../index.php?page=view_admin';
                </script>
                ";
            }
            

        }

?>