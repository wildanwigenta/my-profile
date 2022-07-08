<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $IDalamat = $_POST['id_alamat'];
            $alamat = $_POST['alamat'];
            $email = $_POST['email'];
            $telp = $_POST['telp'];

        //buat query untuk insert
        $query = "UPDATE alamat SET alamat='$alamat', email='$email', telp='$telp' WHERE id_alamat='$IDalamat'";
        //eksekusi query insert
        $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
        //ketika sudah bisa insert
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
                window.location.href = '../../../../index.php?page=view_alamat';
            </script>
            ";
        }
        
    }

?>