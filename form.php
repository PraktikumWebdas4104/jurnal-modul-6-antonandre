<form method="POST">
	<table>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="number" name="nim" length = "10" placeholder="Maksimal 10 Karakter"></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length ="35" placeholder="Maksimal 35 Karakter"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>

		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td>
				<input type="radio" name="kls" value="D3MI4101">D3MI-41-01
				<input type="radio" name="kls" value="D3MI4102">D3MI-41-02
				<input type="radio" name="kls" value="D3MI4103">D3MI-41-03
				<input type="radio" name="kls" value="D3MI4104">D3MI-41-04
			</td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<input type="radio" name="jk" value="Laki-laki">Laki-Laki
				<input type="radio" name="jk" value="Perempuan">Perempuan
			</td>
		</tr>

		<tr>
			<td>HOBI</td>
			<td>:</td>
			<td>
				<input type="checkbox" name="hobi" value="Basket">Basket
				<input type="checkbox" name="hobi" value="Renang">Renang
				<input type="checkbox" name="hobi" value="Membaca">Membaca
			</td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fak">
				<option value="0">Pilih Fakultas</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
				<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
			</select>
			</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="textarea" name="alamat"></td>
		</tr>

		<tr>
			<td><input type="submit" name="kirim"></td>
		</tr>
	</table>
</form>
<?php
	if (isset($_POST['kirim'])) {
		include 'proses.php';
	}
?>