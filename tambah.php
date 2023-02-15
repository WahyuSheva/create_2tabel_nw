<!DOCTYPE html>
<html lang="en">
<head>
    <title>Done</title>
</head>
<body bgcolor ="Gold">
<h3> Form Tambah </h3>
<body>
    <form action="prosestambah.php" method="POST">

    <fieldset>

    <p>
        <label for="nama">Nama peminjam:</label>
        <input type="text" name="nama"/>
    </p>
    <p>
    <label for="alamat">Alamat: </label>
    <textarea name="alamat"></textarea>
    </p>
    <p>
        <label for="umur">Umur:</label>
        <input type="number" name="umur"/>
    </p>
    <p>
        <label for="keperluan">Keperluan:</label>
        <input type="text" name="keperluan"/>
    </p>
    <p>
        <label for="jaminan">Jaminan:</label>
        <input type="text" name="jaminan"/>
    </p>
    <p>
        <label for="nomor_rangka">Nomor Rangka:</label>
        <input type="number" name="no_rangka"/>
    </p>
    <p>
        <label for="merek">Merk:</label>
        <input type="text" name="merek"/>
    </p>
    <p>
        <label for="jenis_motor">Jenis Motor:</label>
        <input type="text" name="jm"/>
    </p>
    <p>
        <label for="tahun_motor">Tahun Motor:</label>
        <input type="number" name="tahmot"/>
    </p>
    <p>
        <label for="tgl_pinjam">Tanggal Pinjam:</label>
        <input type="date" name="tgpin"/>
    </p>
    <p>
        <label for="tgl_kembali">Tanggal Kembali:</label>
        <input type="date" name="tgkem"/>
    </p>
    <p>
    <input type="submit" value="Tambah" name="tambah" />
    </p>

    <p>
    <a href="index.php"><input type="button"  value="Kembali">
</p>

</fieldset>
</form>
</body>
</html>