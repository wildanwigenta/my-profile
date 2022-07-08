<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">About</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="index.php?page=tambah_about" class="btn btn-primary"> Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID About</th>
                            <th>Deskripsi</th>
                            <th>image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include "include/konek.php";

                            $query = "SELECT * FROM about";
                            $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?= $row['id_about']?></td>
                                    <td><?= $row['deskripsi']?></td>
                                    
                                    <td>
                                        <img src="../assets/images/about/<?= $row['gambar']?>" alt="<?= $row['gambar']?>" style="width:auto" height='150'>               
                                    <td>
                                        <a href="index.php?page=edit_about&id_about=<?= $row['id_about']?>" class= "btn btn-warning">Edit</a>
                                        <a href="pages/about/aksi/aksi_hapus.php?id_about=<?=$row['id_about']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</a>
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