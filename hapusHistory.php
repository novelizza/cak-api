<?php
include_once 'conn.php';

$id = $_POST['id'];

$result = pg_query($dbconn,"DELETE FROM tb_pembelian WHERE id_pembelian=$id");
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