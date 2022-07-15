<?php

    // ketika nilai nisn pada url tidak ada
    // maka kembali ke halaman data siswa
    if(!isset($_GET['id_about'])){
        echo"<script>
        alert('Tidak ada id, silahkan coba lagi!');
        window.location.href = 'index.php?page=view_about';
    </script>
    ";
    }

    $IDAbout = $_GET['id_about'];

    include "include/konek.php";
    $query = "SELECT * FROM about WHERE id_about='$IDAbout'";
    $result = mysqli_query($konek,$query) or die(mysqli_error($konek));

    // tampung 1 data saja dengan menggunakan mysqli_fetch_assoc
    // hal ini berbeda dengan kita menggunakan mysqli_fetch_array
    $data = mysqli_fetch_array($result);

?>
<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="p-5">
                            <div class="text">
                                <h1 class="h4 text-gray-900 mb-4">Edit About</h1>
                            </div>
                            <form class="user" action="pages/about/aksi/aksi_edit.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?= $data['id_about'] ?>" name="id_about" id="exampleInputEmail"
                                        placeholder="deskripsi" hidden >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?= $data['gambar'] ?>" name="latest_image" id="exampleInputEmail"
                                        placeholder="deskripsi" hidden >
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?= $data['deskripsi'] ?>" name="deskripsi" id="exampleInputEmail"
                                        placeholder="deskripsi" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="filefoto">Gambar</label><br>
                                    <input type="file"  name="gambar" id="exampleInputEmail"
                                        placeholder="Image" id="filefoto" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>