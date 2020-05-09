<?php
/*
*bundet.com
*Wawan Beneran
*OOP PHP - Cara menggunakan class [LATIHAN]
*/

 include "Siswa.php";
 
 $id = 18051214022;
 $data = new Siswa($id);
 
 echo "<h1>Data Siswa</h1>";
 echo "Nama : " .$data->data_nama();
 echo "<br />";
 echo "ID : " .$id;
 echo "<br />";
 echo "Kelas : " .$data->data_kelas();
 echo "<br />";
 echo "Nomor Telpon : " .$data->data_telp();
 echo "<br />";
 echo "<br />";
 echo "<font color=’blue’> Note: Kelas yang berisi data diri siswa yang terdaftar sebagai peserta didik yang dapat digunakan pada web Bimbingan belajar online</font>";

?>