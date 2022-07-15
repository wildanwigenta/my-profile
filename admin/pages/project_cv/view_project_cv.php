<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">project_cv</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="index.php?page=tambah_project_cv" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th>id_project</th>
                        <th>year</th>
                        <th>project</th>
                        <th>url</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php 
                    include "include/konek.php";

                    $query = "SELECT * FROM project_cv";
                    $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?= $row['id_project_cv'] ?></td>
                        <td><?= $row['year'] ?></td>
                        <td><?= $row['project'] ?></td>
                        <td><?= $row['url'] ?></td>

                        <td> 
                            <a href="index.php?page=edit_project_cv&id_project_cv=<?= $row['id_project_cv']?>" class= "btn btn-warning">Edit</a>
                            <a href="pages/project_cv/aksi/aksi_hapus.php?id_project_cv=<?=$row['id_project_cv']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</a>
                        </td>
                    </tr>   
                    <?php } ?>                
                </tbody>

            </table>
        </div>
    </div>
</div>
</div>