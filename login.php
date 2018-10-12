<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim" length="10" placeholder="Maksimal 10 Karakter"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>

		<tr>
			<td><input type="submit" name="login"></td>
		</tr>
	</table>
</form>

<?php
if (isset($_POST['login'])) {
	session_start();
	include 'koneksi.php';

	$nim = $_POST['nim'];
	$password = $_POST['pass'];

	$query = "SELECT nim, password FROM data_mhs WHERE nim = '$nim'";
	$qry = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_array($qry);
	
	$queryz = $conn->query("SELECT * FROM data_mhs WHERE nim = $nim");
	$rowz=mysqli_fetch_array($queryz);

	if ($nim == $row['nim'] && $password == $row['password']) {
		$_SESSION["Berhasil LOGIN"]=1;
		$_SESSION["nim"]=$row['nim'];
		$_SESSION["password"]=$row['password'];

		echo "Nim :".$rowz[0];
		echo "Nama :".$rowz[1];
		echo "Kelas :".$rowz[2];
		echo "Jenis Kelamin :".$rowz[3];
		echo "Hobi :".$rowz[4];
		echo "Fakultas :".$rowz[5];
		echo "Alamat :".$rowz[6];
	}
	else{
		echo "LOGIN GAGAL. CEK NIM ATAU PASSWORD ANDA SALAH";
	}
}

?>