<?php

$host = "ec2-3-217-219-146.compute-1.amazonaws.com";
$port = "5432";
$dbname = "dfmfpd956u3ed6";
$user = "utkpthvtvhoqej";
$pass = "8fa7368ca2f7275872255a7587bb6b0b152629ed6fea4fa99e96dcc7d1be0524";
// $pg_option = "";

$conn = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";
$dbconn = pg_connect($conn);

// if($dbconn){
//     echo "KONEKSI BERHASIL";
// } else {
//     echo "KONEKSI GAGAL";
// }

// echo "<hr />";
?>