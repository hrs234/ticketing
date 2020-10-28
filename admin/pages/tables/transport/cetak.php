<?php 
require_once "../../../../CRUD/engine.php";
$run_crud = new crud();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../asset/front.css">
    <title>bookTicket</title>
</head>
<body >
    <h1>Data Transportasi</h1>
    <table width="100%" border=1>
        <tr>
            <th>ID</th>
            <th>kode</th>
            <th>deskripsi</th>
            <th>jml.Tempat duduk</th>
            <th>ID Tipe Transport</th>
        </tr>
        <?php 
        $data_pengguna = $run_crud->tampil('transportation');
        foreach($data_pengguna as $data_pgn)
        {
        ?>
        <tr>
            <td><?php echo $data_pgn['id_transportation']; ?></td>
            <td><?php echo $data_pgn['code']; ?></td>
            <td><?php echo $data_pgn['nama_maskapai']; ?></td>
            <td><?php echo $data_pgn['seat_qty']; ?></td>
            <td><?php echo $data_pgn['id_trans_type']; ?></td>
                                  
        </tr>

        <?php
        }
        echo "<script>window.print(); history.go(-1);</script>";
        ?>
    </table>
    <br><br>
    <b>&copy bookTicket</b>
</body>
</html>