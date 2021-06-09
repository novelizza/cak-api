<?php
include_once 'conn.php';

$email = $_GET['email'];

$array = array();

class data {
  
     var $id;
     var $judul;
     var $jenis;
     var $tanggal;
     var $dewasa;
     var $anak;
     var $totalharga;
  }

$resultAkun = pg_query($dbconn,"SELECT id_akun FROM tb_akun where email='$email'");
while ($rowAkun = pg_fetch_assoc($resultAkun)){
    $idAkun = $rowAkun['id_akun'];
}

$result = pg_query($dbconn,"SELECT * FROM tb_pembelian where id_akun='$idAkun'");
if($result){
    while ($row = pg_fetch_assoc($result)){

        $idFilm = $row['id_film'];
        $resultJudul = pg_query($dbconn,"SELECT judul FROM tb_film where id_film='$idFilm'");
        while ($rowJudul = pg_fetch_assoc($resultJudul)){
            $judul = $rowJudul['judul'];
        }

        $id = $row['id_pembelian'];
        $jenis = $row['jenis'];
        $tanggal = $row['taggal'];
        $dewasa = $row['jumlahdewasa'];
        $anak = $row['jumlahanak'];
        $totalharga = $row['hargatotal'];

        $data = new data();
        $data -> id = $id;
        $data -> judul = $judul;
        $data -> jenis = $jenis;
        $data -> tanggal = $tanggal;
        $data -> dewasa = $dewasa;
        $data -> anak = $anak;
        $data -> totalharga = $totalharga;

        // array_push($array, $data);
        $array[] = $data;
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