<?php

    // ketika nilai nisn pada url tidak ada
    // maka kembali ke halaman data siswa
    if(!isset($_GET['id_hoby'])){
        echo"<script>
        alert('Tidak ada id, silahkan coba lagi!');
        window.location.href = 'index.php?page=view_hoby';
    </script>
    ";
    }

    $IDhoby = $_GET['id_hoby'];

    include "include/konek.php";
    $query = "SELECT * FROM hoby WHERE id_hoby='$IDhoby'";
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
                                <h1 class="h4 text-gray-900 mb-4">Edit Hoby</h1>
                            </div>
                            <form class="user" action="pages/hoby/aksi/aksi_edit.php" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?= $data['id_hoby'] ?>" name="id_hoby" id="exampleInputEmail"
                                        placeholder="idhoby" hidden >
                                </div>

                                <div class="form-group">
                                    <label for="filefoto">Gambar</label><br>
                                    <input type="file"  name="gambar" id="exampleInputEmail"
                                        placeholder="Image" id="filefoto" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?= $data['hoby'] ?>" name="hoby" id="exampleInputEmail"
                                        placeholder="hoby" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?= $data['deskripsi'] ?>" name="deskripsi" id="exampleInputEmail"
                                        placeholder="deskripsi" required>
                                </div>
                                


                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>