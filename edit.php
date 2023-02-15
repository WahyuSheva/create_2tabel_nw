<?php
include("koneksi.php");

if(!isset($_GET['id'])){
    header("Location:tampil.php");
}

$id = $_GET ['id'];
$sql =("SELECT * FROM tb_peminjam INNER JOIN tb_motor ON 
tb_peminjam.id_motor = tb_motor.id_motor
 where tb_peminjam.id='$id'");

$query=mysqli_query($db,$sql);
$row =mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
    die ("data tidak ditemukan");
}

?>
<html>
          <head>
</head>
<body bgcolor="Gold">
<body>
          <h1>EDIT</h1>
          <form action="proses_edit.php" method="POST">
    <form>
    <fieldset>
    <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
    <p>
        <label for="nama">Nama peminjam:</label>
        <input type="text" name="nama" value="<?php echo $row['nama']?>"/>
    </p>
    <p>
    <label for="alamat">Alamat: </label>
    <textarea name="alamat" value="<?php echo $row['alamat']?>"></textarea>
    </p>
    <p>
        <label for="umur">Umur:</label>
        <input type="number" name="umur" value="<?php echo $row['umur']?>"/>
    </p>
    <p>
        <label for="keperluan">Keperluan:</label>
        <input type="text" name="keperluan" value="<?php echo $row['keperluan']?>"/>
    </p>
    <p>
        <label for="jaminan">Jaminan:</label>
        <input type="text" name="jaminan" value="<?php echo $row['jaminan']?>"/>
    </p>
    <p>
        <label for="nomor_rangka">Nomor rangka:</label>
        <input type="number" name="no_rangka" value="<?php echo $row['nomor_rangka']?>"/>
    </p>
    <p>
        <label for="merek">Merek:</label>
        <input type="text" name="merek" value="<?php echo $row['merek']?>"/>
    </p>
    <p>
        <label for="jenis_motor">Jenis motor:</label>
        <input type="text" name="jm" value="<?php echo $row['jenis_motor']?>"/>
    </p>
    <p>
        <label for="tahun_motor">Tahum motor:</label>
        <input type="number" name="tahmot" value="<?php echo $row['tahun_motor']?>"/>
    </p>
    <p>
        <label for="tgl_pinjam">Tanggal pinjam:</label>
        <input type="date" name="tgpin" value="<?php echo $row['tgl_pinjam']?>"/>
    </p>
    <p>
        <label for="tgl_kembali">Tanggal kembali:</label>
        <input type="date" name="tgkem" value="<?php echo $row['tgl_kembali']?>"/>
    </p>
    <p>
    <input type="submit" value="simpan" name="simpan"/>
</p>
</fieldset>
</form>
</body>
</html>