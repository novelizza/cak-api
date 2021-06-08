<?php
include_once 'conn.php';

$email = $_GET['email'];
$password = $_GET['password'];

// $result = pg_query($dbconn,"SELECT email, password FROM tb_akun where email='$email' AND password='$password'");
if($result){
    $res = [
            "status" => "ok",
            "email" => $email
           ];
    echo json_encode($res);
} else {
    echo json_encode(array(
        'status' => 'error'
    ));
}
?>