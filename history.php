<?php
include_once 'conn.php';

$email = $_GET['email'];

$array = array();

$resultAkun = pg_query($dbconn,"SELECT id_akun FROM tb_akun where email='$email'");
while ($rowAkun = pg_fetch_assoc($resultAkun)){
    $idAkun = $rowAkun['id_akun'];
}

$result = pg_query($dbconn,"SELECT * FROM tb_pembelian where id_akun='$idAkun'");
if($result){
    while ($row = pg_fetch_assoc($result)){

        $resultJudul = pg_query($dbconn,"SELECT judul FROM tb_film where id_film='$id_film'");
        while ($rowJudul = pg_fetch_assoc($resultJudul)){
            $judul = $rowJudul['judul'];
        }

        $jenis = $row['jenis'];
        $tanggal = $row['taggal'];
        $dewasa = $row['jumlahdewasa'];
        $anak = $row['jumlahanak'];
        $totalharga = $row['hargatotal'];

        array_push($array, $judul, $jenis, $tanggal, $dewas, $anak, $totalharga);
    }
    echo json_encode(array(
        'status' => 'ok',
        'data' => $array
    ));
} else {
    echo json_encode(array(
        'status' => 'error'
    ));
}
?>