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
    <h1>Data Customer</h1>
    <table width="100%" border=1>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No.Telp</th>
            <th>Gender</th>
        </tr>
        <?php 
        $data_pengguna = $run_crud->tampil('customer');
        foreach($data_pengguna as $data_pgn)
        {
        ?>
        <tr>
            <td><?php echo $data_pgn['id_customer']; ?></td>
            <td><?php echo $data_pgn['name']; ?></td>
            <td><?php echo $data_pgn['address']; ?></td>
            <td><?php echo $data_pgn['phone']; ?></td>
            <td><?php echo $data_pgn['gender']; ?></td>
                                  
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