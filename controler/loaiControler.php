<?php
include '../model/loaiModel.php';
include '../util/mySQLUtil.php';
class loaiControler{

    public function __construct($loai_action)
    {
        switch($loai_action){
            default:
                $loai =new loaiModel("","");
                $data=$this->getAllLoai($loai);
                //header("Location: ../view/product.php");
                var_dump($data);
                //$this->view("../product.php",$data);
                //header("Location: ../product.php?product='$data'");
                break;
        }
    }
    public function getAllLoai($loai){
        return $loai->getAllLoai();
    }
}



$loai_action="";
if(isset($_POST['loai_action'])){
    $loai_action=$_POST['loai_action'];
}
$loai_action=new loaiControler($loai_action);

?>