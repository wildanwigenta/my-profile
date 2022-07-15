<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="p-5">
                            <div class="text">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data About</h1>
                                <!-- halooo saya menambahkan perubahan baru -->
                            </div>
                            <form class="user" action="pages/about/aksi/aksi_tambah.php" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="deskripsi" id="exampleInputEmail"
                                        placeholder="deskripsi" required>
                                </div>

                                <div class="form-group">
                                    <label for="filefoto">Gambar</label><br>
                                    <input type="file"  name="gambar" id="exampleInputEmail"
                                        placeholder="Image" id="filefoto" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>