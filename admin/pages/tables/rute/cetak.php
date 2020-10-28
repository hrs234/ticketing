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
    <h1>Data Rute</h1>
    <table width="100%" border=1>
        <tr>
            <th>ID</th>
            <th>Bandara</th>
            <th>Rute Dari</th>
            <th>Rute Tujuan</th>
            <th>Harga</th>
            <th>ID Transportasi</th>
        </tr>
        <?php 
        $data_pengguna = $run_crud->tampil('rute');
        foreach($data_pengguna as $data_pgn)
        {
        ?>
        <tr>
            <td><?php echo $data_pgn['id_rute']; ?></td>
            <td><?php echo $data_pgn['depart_at']; ?></td>
            <td><?php echo $data_pgn['rute_form']; ?></td>
            <td><?php echo $data_pgn['rute_to']; ?></td>
            <td><?php echo $data_pgn['price']; ?></td>
            <td><?php echo $data_pgn['id_transportation']; ?></td>
                                  
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