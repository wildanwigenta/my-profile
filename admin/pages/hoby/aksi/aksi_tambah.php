<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {

            $gambar = $_FILES['gambar']['tmp_name'];
            
            $hoby = $_POST['hoby'];
            $deskripsi = $_POST['deskripsi'];



            //ubah nama dengan kombinasi ID dan nama lengkap
            $namaFoto = time().".png";

            if(file_exists("../../../../assets/images/hoby/".$namaFoto)){
                //unlink adalah hapus file yang mana akan di gantikan oleh file baru
                unlink("../../../../assets/images/hoby/".$namaFoto);
            }
            
            //upload ke folder images
            move_uploaded_file($gambar, "../../../../assets/images/hoby/".$namaFoto);

            //buat query untuk insert
            $query = "INSERT INTO hoby VALUES(NULL,'$namaFoto','$hoby','$deskripsi')";

            //eksekusi query insert
            $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
            //ketika sudah bisa insert
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
                    window.location.href = '../../../index.php?page=view_hoby';
                </script>
                ";
            }
            

        }

?>