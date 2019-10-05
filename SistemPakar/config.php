<?php
//koneksi ke database
$con = mysqli_connect('localhost', 'root','','tembajak');

//tes koneksi
if(mysqli_connect_errno())
{
  exit('kesalahan koneksi database: '. mysqli_connect_errno());
}

 ?>
