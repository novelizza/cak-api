<?php
include_once 'conn.php';

$email = $_POST['email'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$dateNow = date("Y-m-d h:i");

$result = pg_query($dbconn,"INSERT INTO tb_akun (id_akun, email, password, phone_number, nama, created_at, updated_at) VALUES (DEFAULT, '$email', '$password', '08123456789', '$nama', '$dateNow', '$dateNow')");
if($result){
    echo json_encode(array(
        'status' => 'ok'
    ));
} else {
    echo json_encode(array(
        'status' => 'error'
    ));
}
?>