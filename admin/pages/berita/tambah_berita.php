<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="p-5">
                            <div class="text">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Berita</h1>
                                <!-- halooo saya menambahkan perubahan baru -->
                            </div>
                            <form class="user" action="pages/berita/aksi/aksi_tambah.php" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="id_berita" id="exampleInputEmail"
                                        placeholder="idb" hidden>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="judul" id="exampleInputEmail"
                                        placeholder="judul">
                                </div>

                                <div class="form-group">
                                    <input type="datetime-local" name="tanggal" id="exampleInputEmail"
                                        placeholder="tanggal">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="isi" id="exampleInputEmail"
                                        placeholder="isi">
                                </div>

                                <div class="form-group">
                                    <label for="filefoto">Image</label><br>
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