<?php
include_once 'conn.php';

$email = $_GET['email'];
$password = $_GET['password'];

$result = pg_query($dbconn,"SELECT email, password FROM tb_akun where email='$email' AND password='$password'");
if($result){
    $nama = $result["nama"];
    echo json_encode(array(
        'status' => 'ok',
        'email' => $email,
        'nama' => $nama
    ));
} else {
    echo json_encode(array(
        'status' => 'error'
    ));
}
?>