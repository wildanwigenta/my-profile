<?php 

    include "../include/konek.php";

    if (isset($_POST)) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM admin WHERE username='$username' AND password=md5('$password')";

        $result = mysqli_query($konek,$query) or die (mysqli_error($konek));
        // ambil 1 object ketika data sudah berhasil di fetch/ di panggil
        $data = mysqli_fetch_array($result);

        // jika sudah berhasil di temukan 
        if($result){
            // mulai session
            session_start();

            // masukkan data sessionnnya
            $_SESSION['id_admin'] = $data['id_admin'];
            $_SESSION['username'] = $data['username'];
            echo "
            <script>
                alert('Login berhasil');
                window.location.href = '../index.php';
            </script>";
        }else{
            echo "
            <script>
                alert('Username atau Password anda salah');
                window.location.href = '../login.php';
            </script>";
        }
    }


?>