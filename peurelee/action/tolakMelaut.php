<?php
  require_once "../../action/connection.php";

    $kode = $_GET["NIK"];

    $delete = $link->query("delete from datapergi where NIK=$kode");


    if ($delete) {
        echo "<script>alert('Data Berhasil Dihapus!')</script>";
    }
    else{
        echo "<script>alert('Data GAGAL Dihapus!')</script>";
    }
?>

<script>
    location.replace("../adminNahkoda.php");
</script>