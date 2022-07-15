<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Project</h1>
    <p class="mb-4">
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="index.php?page=tambah_project" class="btn btn-primary"> Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Project</th>
                            <th>Project</th>
                            <th>image</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include "include/konek.php";

                            $query = "SELECT * FROM project";
                            $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?= $row['id_project']?></td>
                                    <td><?= $row['project']?></td>
                                    
                                    <td><img src="../assets/images/project/<?= $row['gambar']?>" alt="<?= $row['gambar']?>" style="width:auto" height='150'></td>
                                    
                                    <td>
                                        <a href="index.php?page=edit_project&id_project=<?= $row['id_project']?>" class= "btn btn-warning">Edit</a>
                                        <a href="pages/project/aksi/aksi_hapus.php?id_project=<?=$row['id_project']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>