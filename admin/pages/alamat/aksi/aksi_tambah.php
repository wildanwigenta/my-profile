<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $alamat = $_POST['alamat'];
            $email = $_POST['email'];
            $telp = $_POST['telp'];

            //buat query untuk insert
            $query = "INSERT INTO alamat VALUES(NULL,'$alamat','$email','$telp')";

            //eksekusi query insert
            $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
            //ketika sudah bisa in,,l,sert
            if($result){
                //muncul pesan berhasil dan pindah ke halaman awal master data
                echo"
                <script>
                    alert('Data berhasil ditambahkan!');
                    window.location.href = '../../../index.php?page=view_alamat';
                </script>
                ";
            }else{
                //muncul pesan gagal dan pindah ke halaman awal master data
                echo"
                <script>
                    alert('Data gagal ditambahkan!');
                    window.location.href = '../../../index.php?page=view_alamat';
                </script>
                ";
            }
            

        }

?>