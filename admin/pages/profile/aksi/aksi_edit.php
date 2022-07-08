<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $IDprofile = $_POST['id_profile'];
            $gambar = $_FILES['gambar']['tmp_name'];
            $nama = $_POST['nama'];
            $title = $_POST['title'];
            

            //ubah nama dengan kombinasi ID dan nama lengkap
            $namaFoto = time().".png";

            if(file_exists("../../../../assets/images/profile/".$namaFoto)){
                //unlink adalah hapus file yang mana akan di gantikan oleh file baru
                unlink("../../../../assets/images/profile/".$namaFoto);
            }
            
            //upload ke folder images
            move_uploaded_file($gambar, "../../../../assets/images/profile/".$namaFoto);


        //buat query untuk insert
        $query = "UPDATE profile SET gambar='$namaFoto', nama='$nama', title='$title' WHERE id_profile='$IDprofile'";
        //eksekusi query insert
        $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
        //ketika sudah bisa in,,l,sert
        if($result){
            //muncul pesan berhasil dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data berhasil ditambahkan!');
                window.location.href = '../../../index.php?page=view_profile';
            </script>
            ";
        }else{
            //muncul pesan gagal dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data gagal ditambahkan!');
                window.location.href = '../../../../index.php?page=view_profile';
            </script>
            ";
        }
        
    }

?>