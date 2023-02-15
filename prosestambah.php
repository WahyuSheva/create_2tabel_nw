<?php
include ("koneksi.php");
if(isset($_POST['tambah'])){
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


          $sql = "INSERT INTO tb_motor (nomor_rangka,merek,jenis_motor,tahun_motor,tgl_pinjam,tgl_kembali) 
          VALUES ('$nr','$mrk','$jm','$tm','$tp','$tk')";
          $query = mysqli_query($db, $sql); 

          $sql="SELECT max(id_motor)AS motor FROM tb_motor LIMIT 1";
          $query = mysqli_query($db, $sql);                                                                             

          $data=mysqli_fetch_array($query);
          $mtr=$data['motor'];
          
          $sql="INSERT INTO tb_peminjam(nama, alamat, umur, keperluan, jaminan, id_motor)
           VALUES ('$nama','$almt','$umur','$keperluan','$jaminan','$mtr')";
          $query = mysqli_query($db, $sql);
          

          if($query){
                    header('location:tampil.php?status=sukses');
          }else{
                    header('location:tampil.php?status=gagal');
          }
          }
          ?>