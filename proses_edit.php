<?php
include ("koneksi.php");
if(isset($_POST['simpan'])){
         
    $nama=$_POST['nama'];
    $almt=$_POST['alamat'];
    $umur=$_POST['umur'];
    $keperluan=$_POST['keperluan'];  
    $jaminan=$_POST['jaminan'];
    $nr=$_POST['no_rangka'];
    $mrk=$_POST['merek'];
    $jm=$_POST['jm'];
    $tm=$_POST['tahmot'];
    $tp=$_POST['tgpin'];
    $tk=$_POST['tgkem'];
    $id=$_POST['id'];


          $sql="UPDATE tb_peminjam SET nama='$nama', alamat='$almt', umur='$umur', keperluan='$keperluan',
           jaminan='$jaminan' WHERE id='$id'";
          $query=mysqli_query($db,$sql);
          
          $sql="UPDATE tb_motor SET nomor_rangka='$nr', merek='$mrk', jenis_motor='$jm', tahun_motor='$tm',
          tgl_pinjam='$tp', tgl_kembali='$tk' WHERE id_motor='$id'";
          $query=mysqli_query($db,$sql);

          
          

          if($query){
                    header("Location:tampil.php?status=sukses");
          }else{
                    die ("gagal mengedit");
        }  }else{
                    die("akses dilarang");
          }

          ?>