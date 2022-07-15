<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">hoby</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="index.php?page=tambah_hoby" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th>id_hoby</th>
                        <th>gambar</th>
                        <th>hoby</th>
                        <th>deskripsi</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php 
                    include "include/konek.php";

                    $query = "SELECT * FROM hoby";
                    $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?= $row['id_hoby'] ?></td>
                        <td>
                            <img src="../assets/images/hoby/<?= $row['gambar']?>" alt="<?= $row['gambar']?>" style="width:auto" height='150'>
                        </td>
                        <td><?= $row['hoby'] ?></td>
                        <td><?= $row['deskripsi'] ?></td>

                        <td> 
                            <a href="index.php?page=edit_hoby&id_hoby=<?= $row['id_hoby']?>" class= "btn btn-warning">Edit</a>
                            <a href="pages/hoby/aksi/aksi_hapus.php?id_hoby=<?=$row['id_hoby']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</a>
                        </td>
                    </tr>   
                    <?php } ?>                
                </tbody>

            </table>
        </div>
    </div>
</div>
</div>