<?php
include_once 'conn.php';

$email = $_GET['email'];
$password = $_GET['password'];
$nama = $_GET['nama'];
$dateNow = date("Y-m-d h:i");
$dateNowA = date("Y-m-d");

$result = pg_query($dbconn,"INSERT INTO tb_akun (id_akun, email, password, phone_number, nama, created_at, updated_at) VALUES (DEFAULT, '$email', '$password', '08123456789', '$nama', '$dateNowA', '$dateNow')");
if($result){
    echo json_encode(array(
        'status' => 'ok'
    ));
} else {
    echo json_encode(array(
        'status' => 'Failed'
    ));
}
?>