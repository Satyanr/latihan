<?php
    //koneksi
    $connect = mysqli_connect('localhost', 'root', '', 'latihan_db');


    //set variabel
    $lat_long       = $_POST['latlong'];
    $nama_tempat    = $_POST['nama_tempat'];
    $kategori       = $_POST['kategori'];
    $keterangan     = $_POST['keterangan'];


    //input data
    $insert = mysqli_query($connect, "insert into tbl_latihan_map_lokasi set lat_long='$lat_long', nama_tempat='$nama_tempat', kategori='$kategori', keterangan='$keterangan' ");

    //kembali
    header("Location: index.php");

?>