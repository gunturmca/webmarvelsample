<?php
$hostname = "192.168.4.8\EXPRESS";
$database = "marvel";
$username = "marvelteam";
$password = 'Marvel123$qweR';


$con =  odbc_connect('Driver={SQL Server};Server=192.168.4.8\SQLEXPRESS;Database=marvel; Uid=marvelteam;Pwd=Marvel123$qweR', $username, $password, SQL_CUR_USE_ODBC)
or DIE ("DATABASE FAILED TO RESPOND.");
// mengecek koneksi
if (!$con) {
    echo "<script> alert('error') ; </script>";
    die("Koneksi gagal: " . mysqli_connect_error());
}
//echo "<script> alert('berhasil') ; </script>";

/*
$hostname = "192.168.4.8\EXPRESS";
$database = "marvel";
$username = "";
$password = '';


$con =  odbc_connect('Driver={SQL Server};Server=DESKTOP-04KMB9O;Database=marvel; Uid=sa;Pwd=;', $username, $password, SQL_CUR_USE_ODBC)
or DIE ("DATABASE FAILED TO RESPOND.");
// mengecek koneksi
if (!$con) {
    echo "<script> alert('error') ; </script>";
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "<script> alert('berhasil') ; </script>";
?>*/