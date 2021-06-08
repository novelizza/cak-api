<?php
class SiteController extends Controller
{   
    function actionSimpan_data()
    {
        // $model=new Data_siswaTbl();
        // $model->id_mahasiswa=rand(100000,9999999);
        // $model->nama_mahasiswa=$_POST['nama'];
        // $model->kelas=$_POST['kelas'];
        // $model->jenis_kelamin=$_POST['jenis_kelamin'];
        // $model->no_handphone=$_POST['no_handphone'];
        // $model->save();
        echo json_encode(array(
            'status'=>'oke'
        ));
    }
}
?>