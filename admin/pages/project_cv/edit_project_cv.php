<?php

    // ketika nilai nisn pada url tidak ada
    // maka kembali ke halaman data siswa
    if(!isset($_GET['id_project_cv'])){
        echo"<script>
        alert('Tidak ada id, silahkan coba lagi!');
        window.location.href = 'index.php?page=view_project_cv';
    </script>
    ";
    }

    $IDproject_cv = $_GET['id_project_cv'];

    include "include/konek.php";
    $query = "SELECT * FROM project_cv WHERE id_project_cv='$IDproject_cv'";
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
                                <h1 class="h4 text-gray-900 mb-4">Edit Project_cv</h1>
                            </div>
                            <form class="user" action="pages/project_cv/aksi/aksi_edit.php" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?= $data['id_project_cv'] ?>" name="id_project_cv" id="exampleInputEmail"
                                        placeholder="idproject_cv" hidden >
                                </div>

                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" value="<?= $data['year'] ?>" name="year" id="exampleInputEmail"
                                        placeholder="year" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?= $data['project'] ?>" name="project" id="exampleInputEmail"
                                        placeholder="project" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?= $data['url'] ?>" name="url" id="exampleInputEmail"
                                        placeholder="url" required>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>