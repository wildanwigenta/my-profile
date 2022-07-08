<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">skill</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="index.php?page=tambah_skill" class="btn btn-primary"> Tambah Data</a>
        </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th>id_skill</th>
                        <th>skill</th>
                        <th>presentase</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        include "include/konek.php";

                        $query = "SELECT * FROM skill";
                        $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                        while ($row = mysqli_fetch_array($result)) {
                     ?>
                        <tr>
                            <td><?= $row['id_skill']?></td>
                            <td><?= $row['skill']?></td>
                            <td><?= $row['presentase']?></td>

                            <td>
                                <a href="index.php?page=edit_skill&id_skill=<?= $row['id_skill']?>" class= "btn btn-warning">Edit</a>
                                <a href="pages/skill/aksi/aksi_hapus.php?id_skill=<?=$row['id_skill']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</a>
                            </td>
                        </tr>                   
                </tbody>
                    <?php } ?>
            </table>
        </div>
    </div>
</div>

</div>