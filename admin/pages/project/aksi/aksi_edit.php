<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $IDproject = $_POST['id_project'];
            $latest = $_POST['latest_image'];
            $project = $_POST['project'];
            $gambar = $_FILES['gambar']['tmp_name'];

            //ubah nama dengan kombinasi ID dan nama lengkap
            $namaFoto = time().".png";

            if(file_exists("../../../../assets/images/project/".$latest)){
                //unlink adalah hapus file yang mana akan di gantikan oleh file baru
                unlink("../../../../assets/images/project/".$latest);
            }
            
            //upload ke folder images
            
            move_uploaded_file($gambar, "../../../../assets/images/project/".$namaFoto);


        //buat query untuk insert
        $query = "UPDATE project SET project='$project',gambar='$namaFoto' WHERE id_project='$IDproject'";
        //eksekusi query insert
        $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
        //ketika sudah bisa in,,l,sert
        if($result){
            //muncul pesan berhasil dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data berhasil ditambahkan!');
                window.location.href = '../../../index.php?page=view_project';
            </script>
            ";
        }else{
            //muncul pesan gagal dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data gagal ditambahkan!');
                window.location.href = '../../../../index.php?page=view_project';
            </script>
            ";
        }
        
    }

?>