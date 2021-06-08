<?php
include_once 'conn.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = pg_query($dbconn,"SELECT email, password FROM tb_user where email='$email' AND password='$password');
if($result){
    echo json_encode(array(
        'status' => 'ok',
        'email' => $email
    ));
} else {
    echo json_encode(array(
        'status' => 'error'
    ));
}
?>