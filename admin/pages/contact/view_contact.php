
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">contact</h1>

<?php 
include "include/konek.php";

$query = "SELECT * FROM contact";
$result = mysqli_query($konek, $query) or die(mysqli_error($konek));
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="index.php?page=tambah_contact" class="btn btn-primary"> Tambah Data</a> 
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th>id_contact</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>pesan</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        include "include/konek.php";

                        $query = "SELECT * FROM contact";
                        $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                        while ($row = mysqli_fetch_array($result)) {
                     ?>
                    <tr>
                        <td><?= $row['id_contact'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['pesan'] ?></td>

                        <td>
                            <a href="index.php?page=edit_contact&id_contact=<?= $row['id_contact']?>" class= "btn btn-warning">Edit</a>
                            <a href="pages/contact/aksi/aksi_hapus.php?id_contact=<?=$row['id_contact']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</a>
                        </td>
            
                    </tr>
                    <?php } ?>                   
                </tbody>

            </table>
        </div>
    </div>
</div>

</div>