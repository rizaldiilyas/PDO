<?php
  //koneksi
  //PBO
    $koneksi = new PDO("mysql:host=localhost;dbname=belajar_db", "root", "");
  //query
    // $koneksi->query("insert into tbkaryawan values (4, 'nopal tamvans')");
  //menghapus data
    // $koneksi->query("DELETE from tbkaryawan where nik='2'");
  //mengedit/update data
    // $koneksi->query("UPDATE tbkaryawan set nama='ryan gantengs' where nik='3'");
  //menampilkan data
  $koneksi->query("SELECT * from tbkaryawan where nik='3'");