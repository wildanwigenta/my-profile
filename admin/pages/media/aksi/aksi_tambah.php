<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $gambar = $_FILES['gambar']['tmp_name'];
            $link = $_POST['link'];

            

            //ubah nama dengan kombinasi ID dan nama lengkap
            $namaFoto = time().".png";

            if(file_exists("../../../../assets/images/media/".$namaFoto)){
                //unlink adalah hapus file yang mana akan di gantikan oleh file baru
                unlink("../../../../assets/images/media/".$namaFoto);
            }
            
            //upload ke folder images
            move_uploaded_file($gambar, "../../../../assets/images/media/".$namaFoto);

            //buat query untuk insert
            $query = "INSERT INTO media VALUES(NULL,'$namaFoto','$link')";

            //eksekusi query insert
            $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
            //ketika sudah bisa insert
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
                    window.location.href = '../../../index.php?page=view_media';
                </script>
                ";
            }
            
        }

?>