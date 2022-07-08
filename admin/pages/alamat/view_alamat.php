<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Alamat</h1>
<?php 
include "include/konek.php";

$query = "SELECT * FROM alamat";
$result = mysqli_query($konek, $query) or die(mysqli_error($konek));
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <?php
        $numrow = mysqli_num_rows($result);
        if ($numrow == null || $numrow == 0) {                                
    ?>
        <a href="index.php?page=tambah_alamat" class="btn btn-primary"> Tambah Data</a>
    <?php } ?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th>id_alamat</th>
                        <th>alamat</th>
                        <th>email</th>
                        <th>telp</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        while ($row = mysqli_fetch_array($result)) {
                     ?>
                    <tr>
                        <td><?= $row['id_alamat'] ?></td>
                        <td><?= $row['alamat'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['telp'] ?></td>

                        <td>
                            <a href="index.php?page=edit_alamat&id_alamat=<?= $row['id_alamat']?>" class= "btn btn-warning">Edit</a>
                            <a href="pages/alamat/aksi/aksi_hapus.php?id_alamat=<?=$row['id_alamat']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</a>
                        </td>
                    </tr>   
                    <?php } ?>                
                </tbody>

            </table>
        </div>
    </div>
</div>

</div>