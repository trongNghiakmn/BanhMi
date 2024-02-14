<?php
// include '../util/mySQLUtil.php';
class productModel{
    private $mabanh;
    private $tembanh;
    private $mota;
    private $gia;
    private $hinh;
    private $maloai;
    private $number;

  
    public function getMabanh() {
        return $this->mabanh;
    }
   public function setMabanh($mabanh) {
        return $this->mabanh = $mabanh;
    }
    public function getTenbanh() {
        return $this->tembanh;
    }
   public function setTenbanh($tembanh) {
        return $this->tembanh = $tembanh;
    }
    public function getMota() {
        return $this->mota;
    }
   public function setMota($mota) {
        return $this->mota = $mota;
    }
    public function getGia() {
        return $this->gia;
    }
   public function setGia($gia) {
        return $this->gia = $gia;
    }
    public function getHinh() {
        return $this->hinh;
    }
   public function setHinh($hinh) {
        return $this->hinh = $hinh;
    }
    public function getMaloai() {
        return $this->maloai;
    }
   public function setMaloai($maloai) {
        return $this->maloai = $maloai;
    }
    public function getNumber() {
        return $this->number;
    }
   public function setNumber($number) {
        return $this->number = $number;
    }
    public function __construct($mabanh,$tembanh,$mota,$gia,$hinh,$maloai,$number)
    {
        $this->mabanh=$mabanh;
        $this->tembanh=$tembanh;
        $this->mota=$mota;
        $this->gia=$gia;
        $this->hinh=$hinh;
        $this->maloai=$maloai;
        $this->number=$number;
    }
    public function getAllProduct(){
        $data=NULL;
        $myDB=new mySQLUtil();
        $sql="SELECT mabanh,tenbanh,mota,gia,hinh,maloai FROM banh";
        $data=$myDB->getAllData($sql);
        $myDB->disconnectDB();
        return $data;
    }
    public function getProduct($id){
        $data=NULL;
        $myDB=new mySQLUtil();
        $sql="SELECT mabanh,tenbanh,mota,gia,hinh,maloai FROM banh where mabanh=$id";
        $data=$myDB->getAllData($sql);
        $myDB->disconnectDB();
        return $data;
    }
    
}
?>