<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {
            $deskripsi = $_POST['deskripsi'];

            $gambar = $_FILES['gambar']['tmp_name'];

            //ubah nama dengan kombinasi ID dan nama lengkap
            $namaFoto = time().".png";

            if(file_exists("../../../../assets/images/about/".$namaFoto)){
                //unlink adalah hapus file yang mana akan di gantikan oleh file baru
                unlink("../../../../assets/images/about/".$namaFoto);
            }
            
            //upload ke folder images
            move_uploaded_file($gambar, "../../../../assets/images/about/".$namaFoto);

            //buat query untuk insert
            $query = "INSERT INTO about VALUES(NULL,'$deskripsi','$namaFoto')";

            //eksekusi query insert
            $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
            //ketika sudah bisa insert
            if($result){
                //muncul pesan berhasil dan pindah ke halaman awal master data
                echo"
                <script>
                    alert('Data berhasil ditambahkan!');
                    window.location.href = '../../../index.php?page=view_about';
                </script>
                ";
            }else{
                //muncul pesan gagal dan pindah ke halaman awal master data
                echo"
                <script>
                    alert('Data gagal ditambahkan!');
                    window.location.href = '../../../index.php?page=view_about';
                </script>
                ";
            }
            

        }

?>