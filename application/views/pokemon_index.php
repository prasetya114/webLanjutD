<h1>Data Pokemon</h1>

<a href="<?php echo site_url('/pokemon/insert_form'); ?>">Add Data</a>

	<table id='tabel' border='1'>
			<tr>
				<th>Nama</th>
				<th>Tipe</th>
				<th>Aksi</th>
			</tr>
	<?php 
		foreach ($list as $pokemon) {
			echo "<tr>";
			echo "<td>$pokemon->nama</td>";
			echo "<td>$pokemon->tipe</td>";
			echo "	<td>
				<a href=".site_url('/pokemon/update_form/'.$pokemon->id).">Edit</a> ||
				<a href=".site_url('/pokemon/delete_action/'.$pokemon->id).">Delete</a> 
				</td>";
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
