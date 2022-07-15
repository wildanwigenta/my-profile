<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $IDmedia = $_POST['id_media'];
            $latest = $_POST['latest_image'];
            $gambar = $_FILES['gambar']['tmp_name'];
            $link = $_POST['link'];
            

            //ubah nama dengan kombinasi ID dan nama lengkap
            $namaFoto = time().".png";

            if(file_exists("../../../../assets/images/media/".$latest)){
                //unlink adalah hapus file yang mana akan di gantikan oleh file baru
                unlink("../../../../assets/images/media/".$latest);
            }
            
            //upload ke folder images
            move_uploaded_file($gambar, "../../../../assets/images/media/".$namaFoto);


        //buat query untuk insert
        $query = "UPDATE media SET gambar='$namaFoto', link='$link' WHERE id_media='$IDmedia'";
        //eksekusi query insert
        $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
        //ketika sudah bisa in,,l,sert
        if($result){
            //muncul pesan berhasil dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data berhasil ditambahkan!');
                window.location.href = '../../../index.php?page=view_media';
            </script>
            ";
        }else{
            //muncul pesan gagal dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data gagal ditambahkan!');
                window.location.href = '../../../../index.php?page=view_media';
            </script>
            ";
        }
        
    }

?>