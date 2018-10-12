<?php

$host = "localhost";
$root = "root";
$pass = "";
$database = "datamahasiswa";
$conn = new mysqli($host, $root, $pass, $database);

if (isset($_POST['kirim'])) {
	$nim1 = $_POST['nim'];
	$nama1 = $_POST['nama'];
	$kelas = $_POST['kls'];
	$jk1 = $_POST['jk'];
	$hobi1 =$_POST['hobi'];
	$fak1 = $_POST['fak'];
	$alamat1 = $_POST['alamat'];
	$pass1 = $_POST['pass'];

	//echo "$nim1, $nama, $kelas, $jk, $hobi, $fak, $alamat, $pass";

	$qry = $conn->query("INSERT INTO data_mhs VALUES ('$nim1','$nama1','$kelas', '$jk1', '$hobi1', '$fak1', '$alamat1', '$pass1')");
				if ($qry) {
					echo "Regristrasi Telah Berhasil. Silahkan Klik disiini untuk<a href ='login.php'>Login</a>";
				}else{
				echo "Regristrasi Gagal";
				}
}
?>