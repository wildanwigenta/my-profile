<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $IDcontact = $_POST['id_contact'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $pesan = $_POST['pesan'];

        //buat query untuk insert
        $query = "UPDATE contact SET nama='$nama', email='$email', pesan='$pesan' WHERE id_contact='$IDcontact'";
        //eksekusi query insert
        $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
        //ketika sudah bisa insert
        if($result){
            //muncul pesan berhasil dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data berhasil ditambahkan!');
                window.location.href = '../../../index.php?page=view_contact';
            </script>
            ";
        }else{
            //muncul pesan gagal dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data gagal ditambahkan!');
                window.location.href = '../../../../index.php?page=view_contact';
            </script>
            ";
        }
        
    }

?>