<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="p-5">
                            <div class="text">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Siswa</h1>
                                <!-- halooo saya menambahkan perubahan baru -->
                            </div>
                            <form class="user" action="pages/siswa/aksi/aksi_tambah.php" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nik" id="exampleInputEmail"
                                        placeholder="nik">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama" id="exampleInputEmail"
                                        placeholder="nama">
                                </div>
                            

                                <small>jurusan</small>
                                <div class="form-group">
                                    <select name="jurusan"  >
                                        <option value="RPL">RPL</option>
                                        <option value="TKJ">TKJ</option>
                                        <option value="MM">MM</option>
                                    </select>
                                </div>

                                <small>jenis kelamin</small>
                                <div class="form-group">
                                    <select name="jenis_kelamin"  >
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>

                                <small>Agama</small>
                                <div class="form-group">
                                    <select name="agama"  >
                                        <option value="islam">islam</option>
                                        <option value="khatolik">khatolik</option>
                                        <option value="kristen">kristen</option>
                                        <option value="hindu">hindu</option>
                                        <option value="buddha">buddha</option>
                                        <option value="konghucu">konghucu</option>
                                    </select>
                                </div>

                                <small>Hoby</small>
                                <div class="form-group">
                                    <select name="hobi"  >
                                        <option value="badminton">badminton</option>
                                        <option value="berenang">berenang</option>
                                        <option value="futsal">futsal</option>
                                        <option value="jogging">jogging</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="keterangan" id="exampleInputEmail"
                                        placeholder="keterangan">
                                </div>

                                <div class="form-group">
                                    <label for="filefoto">Image</label><br>
                                    <input type="file"  name="pass_foto" id="exampleInputEmail"
                                        placeholder="Image" id="filefoto">
                                </div>

                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>