<html>
<head>
<title>Aplikasi CRUD dengan PHP</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Tambah Data Siswa</h1>
<div class="form-container">
        <h1>Tambah Data Siswa</h1>
        <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
            <label>NIM:</label><br>
            <input type="text" name="nim" style="width:100%"><br><br>
            
            <label>Nama:</label><br>
            <input type="text" name="nama" style="width:100%"><br><br>
            
            <label>Jenis Kelamin:</label><br>
            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br><br>
            
            <label>Telepon:</label><br>
            <input type="text" name="telp" style="width:100%"><br><br>
            
            <label>Alamat:</label><br>
            <textarea name="alamat" style="width:100%"></textarea><br><br>
            
            <label>Foto:</label><br>
            <input type="file" name="foto"><br><br>
            
            <hr>
            <input type="submit" value="Simpan" class="btn btn-tambah">
            <a href="index.php" class="btn btn-hapus">Batal</a>
        </form>
    </div>
</body>
</html>