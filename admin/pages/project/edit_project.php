<?php

    // ketika nilai nisn pada url tidak ada
    // maka kembali ke halaman data siswa
    if(!isset($_GET['id_project'])){
        echo"<script>
        alert('Tidak ada id, silahkan coba lagi!');
        window.location.href = 'index.php?page=view_project';
    </script>
    ";
    }

    $IDproject = $_GET['id_project'];

    include "include/konek.php";
    $query = "SELECT * FROM project WHERE id_project='$IDproject'";
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
                                <h1 class="h4 text-gray-900 mb-4">Edit Project</h1>
                            </div>
                            <form class="user" action="pages/project/aksi/aksi_edit.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?= $data['id_project'] ?>" name="id_project" id="exampleInputEmail"
                                        placeholder="id_project" hidden >
                                </div>

                                <label for="project">project</label><br>
                                <select name="project" id="project">
                                    <option value="website">website</option>
                                    <option value="design">Design</option>
                                    <option value="photograpy">photograpy</option>
                                    <option value="art">art</option>
                                </select>
                                
                                <div class="form-group">
                                    <label for="filefoto">Gambar</label><br>
                                    <input type="file"  name="gambar" id="exampleInputEmail"
                                        placeholder="Image" id="filefoto">
                                </div>
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>