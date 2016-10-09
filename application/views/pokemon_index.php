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
?>
<table border='1'>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Tipe</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($result as $row){ ?>
            <tr>
                <td><?=$row->nama?></td>
                <td><?=$row->tipe?></td>
                <td><a href="<?=site_url('pokemon/update_form/'.$row->id)?>"> Update </a>||<a href="<?=site_url('pokemon/delete_action/'.$row->id)?>">DELETE </a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
