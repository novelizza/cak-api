<?php
include_once 'conn.php';

$email = $_POST['email'];
$judul = $_POST['judul'];
$jenis = $_POST['jenis'];
$jadwal = $_POST['jadwal'];
$dewasa = $_POST['dewasa'];
$anak = $_POST['anak'];
$dateNow = date("Y-m-d h:i");

$resultFilm = pg_query($dbconn,"SELECT * FROM tb_film where judul='$judul' AND jenis='$jenis'");
while ($row1 = pg_fetch_array($resultFilm)){
    $id_film = $row1['id_film'];
    $hargaDewasa = $row1['hargaDewasa'];
    $hargaAnak = $row1['hargaAnak'];
}

$hargaTotal = ($dewasa*$hargaDewasa)+($anak*$hargaAnak);

$resultAkun = pg_query($dbconn,"SELECT * FROM tb_akun where email='$email'");
while ($row2 = pg_fetch_array($resultAkun)){
    $id_akun = $row2['id_akun'];
}

$q = "INSERT INTO tb_pembelian (id_pembelian, id_akun, id_film, jenis, taggal, jumlahDewasa, jumlahAnak, hargaTotal, created_at, updated_at) VALUES (DEFAULT, '$id_akun', '$id_film', '$jenis', '$jadwal', '$dewasa', '$anak', '$hargaTotal', 'dateNow', 'dateNow')";
$result = pg_query($dbconn,$q);

if($result){
    echo json_encode(array(
        'status' => 'ok',
    ));
} else {
    echo json_encode(array(
        'status' => 'error'
    ));
}
?>