<?php
include_once 'conn.php';

$email = $_GET['email'];
$password = $_GET['password'];

$result = pg_query($dbconn,"SELECT email, password FROM tb_akun where email='$email' AND password='$password'");
if($result){
    while ($row = pg_fetch_assoc($result)){
        $emailNow = $row['email'];
        $nama = $row['nama'];
    }
    echo json_encode(array(
        'status' => 'ok',
        'email' => $emailNow,
        'nama' => $nama
    ));
} else {
    echo json_encode(array(
        'status' => 'error'
    ));
}
?>