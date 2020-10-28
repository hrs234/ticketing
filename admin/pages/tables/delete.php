<?php 
require_once('../../../CRUD/engine.php');
$run_crud = new crud();

    $table = $_GET['tabel'];
    $kolom = $_GET['kol'];
    $halaman = $_GET['hlm'];
    $id = $_GET['id'];

    $jalan = $run_crud->delete($table, $kolom, $id);
    if($jalan == "ok")
    {
        echo "<script>document.location='../../index.php?page=$halaman'</script>";
    }
    else
    {
        echo $jalan;
    }
?>