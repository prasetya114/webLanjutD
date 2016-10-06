<h2>Update Data Pokemon</h2>

<html>	
	<head>
		<title> Form_update </title>
	</head>
	<body>
		<form method="POST" action="<?php foreach ($list as $pokemon) {
			  echo base_url()."index.php/pokemon/update_action/".$pokemon->id;} ?>">
		<table>
			<tr>
				<td>ID</td>
				<td> <input type="text" name="id" value="<?php foreach ($list as $pokemon) {echo "$pokemon->id";} ?>" readonly/>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td> <input type="text" name="nama" value="<?php foreach ($list as $pokemon) {echo "$pokemon->nama";} ?>" /></td>
			</tr>
			<tr>
				<td>Tipe</td>
				<td> <input type="text" name="tipe" value="<?php foreach ($list as $pokemon) {echo "$pokemon->tipe";} ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnSubmit" value="Simpan" /></td>
			</tr>
		</table>
		</form>
	</body>
</html>

<?php
/* Buat form untuk update dengan metode post, yang akan dikirim ke pokemon/update_action.
 * Isi setiap input dengan data lama, sehingga user hanya perlu mengubah data yang perlu diubah saja
 */
