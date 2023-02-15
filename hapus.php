<?php
include("koneksi.php");

$id = $_GET ['id'];


mysqli_query($db,"DELETE FROM tb_peminjam where id='$id'");
mysqli_query($db,"DELETE FROM tb_motor where id_motor='$id'");


        header("Location:tampil.php?status-sukses");

?>
