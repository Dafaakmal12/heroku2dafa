
<?php
    // memulai session yang disimpan pada browser
    session_start();

    // cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
    if ($_SESSION['status']!="sudah_login") {
        // melakukan pengalihan
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loginput">
		<form action="proses_input.php" method="POST">
			<h2>Input Data Mahasiswa</h2>
			<input type="text" name="nim" placeholder="Masukkan NIM" required="" autofocus="">
			<input type="text" name="nama" placeholder="Masukkan Nama" required="" autofocus="">
			<input type="text" name="email" placeholder="Masukkan Email" required="" autofocus="">
			<input type="text" name="hp" placeholder="Masukkan NO HP" required="" autofocus="">
            <select name="prodi">
				<option value="">~Pilih Prodi~</option>
                <option value="TK">Teknik Informatika</option>
                <option value="SI">Sistem Informasi</option>
                <option value="MI">Management Informasi</option>
                <option value="TK">Teknik Komputer</option>
				<option value="KA">Komputer Akutansi</option>
            </select>            
			<button class="tombol" type="submit">Simpan</button>
		</form>
	</div>
	<a href ="login.php"><center><button>LOG OUT</center></button></a></p>
    
     <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="berhasil"){
                echo "<script>alert('Input data berhasil!');</script>";
            }elseif($_GET['pesan']=="gagal"){
                echo "<script>alert('Input data gagal!');</script>";
            }
        }
    ?>
</body>
</html>