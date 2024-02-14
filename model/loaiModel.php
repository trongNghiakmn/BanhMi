<?php
//include '../util/mySQLUtil.php';
class loaiModel{
    private $maloai;
    private $tenloai;
    
    public function __construct($maloai,$tenloai)
    {
        $this->maloai=$maloai;
        $this->tenloai=$tenloai;
    }
    public function getMaloai() {
        return $this->maloai;
    }
   public function setMaloai($maloai) {
        return $this->maloai = $maloai;
    }
   public function getTenloai() {
        return $this->tenloai;
    }
   public function setTenloai($tenloai) {
        return $this->tenloai = $tenloai;
    }
    public function getAllLoai(){
        $data=NULL;
        $myDB=new mySQLUtil();
        $sql="SELECT maloai,tenloai FROM loai";
        $data=$myDB->getAllData($sql);
        $myDB->disconnectDB();
        return $data;
    }
}

?>