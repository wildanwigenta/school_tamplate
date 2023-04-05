<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/css/form.css">
</head>
<body>
    <div class="map-content-9">
        <h5 class="mb-sm-4 mb-3">Form Pendaftaran Siswa</h5>
        <span class="label-note">Silahkan isi formulir dengan benar (^_^)</span>

        <form action="action/aksi_pendaftaran.php" method="post">

            <div class="twice-two">
                <input type="text" class="form-control" name="nik" id="nisn" placeholder="NIK" required="">
                <input type="text" class="form-control" name="nama" id="w3lSender" placeholder="Nama" reqsuired="">
            </div>

            <h6>Jurusan Tujuan</h6>
            <div class="twice">
                <select type="text" class="form-control" name="jurusan" id="w3lSubject" placeholder="jenis kelamin">
                    <option>RPL</option>
                    <option>MM</option>
                    <option>TKJ</option>
                </select>
            </div>

            <h6>Jenis kelamin</h6>
            <div class="twice">
                <select type="text" class="form-control" name="jenis_kelamin" id="w3lSubject" placeholder="jenis kelamin">
                    <option value="L">laki-laki</option>
                    <option value="P">perempuan</option>
                </select>
            </div>

            <h6>Agama</h6>
            <div class="twice">
                <select type="text" class="form-control" name="agama" id="w3lSubject" >
                    <option>Islam</option>
                    <option>Khatolik</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Konghucu</option>
                </select>
            </div>
            
            <h6>Hoby</h6>
            <div class="twice">
                <select type="text" class="form-control" name="hobi" id="w3lSubject" >
                    <option>Badminton</option>
                    <option>Futsal</option>
                    <option>Coding</option>
                    <option>Menggambar</option>
                </select>
            </div>

            <div class="twice">
                <label for="filefoto">Image</label><br>
                <input type="file"  name="pass_foto" id="exampleInputEmail"
                    placeholder="Image" id="filefoto">
            </div>

            <textarea name="keterangan" class="form-control" id="w3lMessage" placeholder="Message" required=""></textarea>
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-style mt-4">Daftar</button>
            </div>

        </form>

    </div>
</body>
</html>