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
    <h1>Data User</h1>
    <table width="100%" border=1>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Fullname</th>
            <th>Level</th>
        </tr>
        <?php 
        $data_pengguna = $run_crud->tampil('user');
        foreach($data_pengguna as $data_pgn)
        {
        ?>
        <tr>
            <td><?php echo $data_pgn['id_user']; ?></td>
            <td><?php echo $data_pgn['username']; ?></td>
            <td><i>yang telah diisi</i></td>
            <td><?php echo $data_pgn['fullname']; ?></td>
            <td><?php echo $data_pgn['level']; ?></td>
        </tr>

        <?php
        }
        echo "<script>window.print(); history.go(-1);</script>";
        ?>
    </table>
    <br><br>
    <b>&copy myPulsa</b>
</body>
</html>