<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $IDhoby = $_POST['id_hoby'];
            $latest = $_POST['latest_image'];
            $gambar = $_FILES['gambar']['tmp_name'];
            $hoby = $_POST['hoby'];
            $deskripsi = $_POST['deskripsi'];
            

            //ubah nama dengan kombinasi ID dan nama lengkap
            $namaFoto = time().".png";

            if(file_exists("../../../../assets/images/hoby/".$latest)){
                //unlink adalah hapus file yang mana akan di gantikan oleh file baru
                unlink("../../../../assets/images/hoby/".$latest);
            }
            
            //upload ke folder images
            move_uploaded_file($gambar, "../../../../assets/images/hoby/".$namaFoto);


        //buat query untuk insert
        $query = "UPDATE hoby SET gambar='$namaFoto', hoby='$hoby', deskripsi='$deskripsi' WHERE id_hoby='$IDhoby'";
        //eksekusi query insert
        $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
        //ketika sudah bisa in,,l,sert
        if($result){
            //muncul pesan berhasil dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data berhasil ditambahkan!');
                window.location.href = '../../../index.php?page=view_hoby';
            </script>
            ";
        }else{
            //muncul pesan gagal dan pindah ke halaman awal master data
            echo"
            <script>
                alert('Data gagal ditambahkan!');
                window.location.href = '../../../../index.php?page=view_hoby';
            </script>
            ";
        }
        
    }

?>