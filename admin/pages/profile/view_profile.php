<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">profile</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="index.php?page=tambah_profile" class="btn btn-primary"> Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th>id_profile</th>
                        <th>gambar</th>
                        <th>nama</th>
                        <th>title</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php 
                    include "include/konek.php";

                    $query = "SELECT * FROM profile";
                    $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?= $row['id_profile'] ?></td>
                        <td>
                            <img src="../assets/images/profile/<?= $row['gambar']?>" alt="<?= $row['gambar']?>" style="width:auto" height='150'>
                        </td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['title'] ?></td>
                        <td>
                            <a href="index.php?page=edit_profile&id_profile=<?= $row['id_profile']?>" class= "btn btn-warning">Edit</a>
                            <a href="pages/profile/aksi/aksi_hapus.php?id_profile=<?=$row['id_profile']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</a>
                        </td>
                    </tr>         
                    <?php } ?>          
                </tbody>

            </table>
        </div>
    </div>
</div>

</div>