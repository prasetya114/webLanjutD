<h1>Data Pokemon</h1>
<?php echo "<a href=;>Add</a>" ?>

	<table id='tabel' border='1'>
							<tr>
								<th>Nama</th>
								<th>Tipe</th>
								<th>Aksi</th>
							</tr>
	<?php 
		foreach ($list as $pokemon) {
			echo "<tr>";
			echo "<th>$pokemon->nama</th>";
			echo "<th>$pokemon->tipe</th>";
			echo "<th><a href= >Edit</a> <a href= >Delete</a></th>";
			echo "</tr>";
		}
	?>

	</table>








<?php
/*
    Tampilkan data dalam bentuk seperti ini:

    [Link add (pokemon/add_form)]

    nama        | tipe      | Aksi
    --------------------------------------------------------------------
    Bulbasaur   | Grass     | [Link update (pokemon/update_form/[id])] 
                |           | [Link delete (pokemon/delete_action/[id])]
    --------------------------------------------------------------------
    Charmender  | Fire      | [Link update (pokemon/update_form/[id])] 
                |           | [Link delete (pokemon/delete_action/[id])]
*/
