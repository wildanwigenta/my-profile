<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="p-5">
                            <div class="text">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Project</h1>
                            </div>
                            <form class="user" action="pages/project/aksi/aksi_tambah.php" method="post" enctype="multipart/form-data">
                                
                                <label for="project">project</label><br>
                                <select name="project" id="project">
                                    <option value="website">website</option>
                                    <option value="design">Design</option>
                                    <option value="photograpy">photograpy</option>
                                    <option value="art">art</option>
                                </select>

                                <div class="form-group">
                                    <label for="filefoto">Gambar</label><br>
                                    <input type="file"  name="gambar" id="exampleInputEmail"
                                        placeholder="Image" id="filefoto">
                                </div>
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>