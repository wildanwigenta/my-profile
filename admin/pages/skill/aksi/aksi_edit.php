<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $IDskill = $_POST['id_skill'];
            $skill = $_POST['skill'];
            $presentase = $_POST['presentase'];

        //buat query untuk insert
        $query = "UPDATE skill SET skill='$skill', presentase='$presentase' WHERE id_skill='$IDskill'";
        //eksekusi query insert
        $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
        //ketika sudah bisa insert
        if($result){
            //muncul pesan berhasil dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data berhasil ditambahkan!');
                window.location.href = '../../../index.php?page=view_skill';
            </script>
            ";
        }else{
            //muncul pesan gagal dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data gagal ditambahkan!');
                window.location.href = '../../../../index.php?page=view_skill';
            </script>
            ";
        }
        
    }

?>