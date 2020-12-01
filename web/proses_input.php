<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$nim=$_POST["nim"];
$nama=$_POST["nama"];
$email=$_POST["email"];
$hp=$_POST["hp"];
$prodi=$_POST["prodi"];


//Query input menginput data kedalam tabel barang
  $sql="insert into tb_input (nim,nama,email,hp, prodi) values
		('$nim', '$nama', '$email','$hp','$prodi')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=pg_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    header("location:admin.php?pesan=berhasil");	
}else{
    header("location:admin.php?pesan=gagal");	
  }

?>