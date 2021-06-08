<?php
include_once 'conn.php';

$result = pg_query($dbconn, "SELECT email, password FROM tb_akun");
if($result){
    echo json_encode(array(
        'status' => 'ok'
    ));
}
?>