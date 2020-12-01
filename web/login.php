<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	if(isset($_GET['pesan'])){
 	if($_GET['pesan']=="gagal"){
 		echo "<script>alert('Login gagal! Silakan cek kembali!');</script>";
 	}else if($_GET['pesan'] =="belum_login"){
 		echo "<script>alert('Anda harus login untuk mengakses halaman');</script>";
 	}
 }
?>	
    <div id="wrapper">
		<form action="proses_login.php" method="POST">
			<h1>Login</h1>
			<label>Username</label>
			<input type="text" name="username" placeholder="masukkan username" required="" autofocus="">
			<label>Password </label>
			<input type="password" name="password" placeholder="masukkan password" required="" >
			<center><button type="submit">SUBMIT</button></center>
		</form>
	</div>
</body>
</html>