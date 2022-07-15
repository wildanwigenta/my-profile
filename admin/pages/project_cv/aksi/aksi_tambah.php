<?php 
        include "../../../include/konek.php";
        if (isset($_POST)) {

            $year = $_POST['year'];
            $project = $_POST['project'];
            $url = $_POST['url'];

            //buat query untuk insert
            $query = "INSERT INTO project_cv VALUES(NULL,'$year','$project','$url')";

            //eksekusi query insert
            $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
            //ketika sudah bisa insert
            if($result){
                //muncul pesan berhasil dan pindah ke halaman awal master data
                echo"
                <script>
                    alert('Data berhasil ditambahkan!');
                    window.location.href = '../../../index.php?page=view_project_cv';
                </script>
                ";
            }else{
                //muncul pesan gagal dan pindah ke halaman awal master data
                echo"
                <script>
                    alert('Data gagal ditambahkan!');
                    window.location.href = '../../../index.php?page=view_project_cv';
                </script>
                ";
            }
            

        }

?>