<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>Tambah Siswa</title>
</head>

<body class="bg-dark">

  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            TAMBAH SISWA
          </div>
          <div class="card-body">
            <form action="simpan-siswa.php" method="POST">

              <div class="form-group">
                <label>NISN</label>
                <input type="text" name="nisn" placeholder="Masukan NISN Siswa" class="form-control">
              </div>

              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" placeholder="Masukan Nama Siswa" class="form-control">
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" rows="4" placeholder="Masukan Alamat Siswa"></textarea>
              </div>

              <button type="submit" class="btn btn-success">SIMPAN</button>
              <button type="submit" class="btn btn-warning">RESET</button>
              <button type="sunmit" class="btn btn-danger" href="index.php">BATAL</button>

            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>