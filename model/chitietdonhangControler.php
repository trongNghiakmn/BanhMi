<?php
class chitietdonhangControler{
    private $madonhang;
    private $mabanh;
    private $soluong;
    private $gia;

    public function __construct($madonhang,$mabanh,$soluong,$gia)
    {
        $this->madonhang=$madonhang;
        $this->mabanh=$mabanh;
        $this->soluong=$soluong;
        $this->gia=$gia;
    }
    /**
     * Get the value of madonhang
     */ 
    public function getMadonhang()
    {
        return $this->madonhang;
    }

    /**
     * Set the value of madonhang
     *
     * @return  self
     */ 
    public function setMadonhang($madonhang)
    {
        $this->madonhang = $madonhang;

        return $this;
    }

    /**
     * Get the value of mabanh
     */ 
    public function getMabanh()
    {
        return $this->mabanh;
    }

    /**
     * Set the value of mabanh
     *
     * @return  self
     */ 
    public function setMabanh($mabanh)
    {
        $this->mabanh = $mabanh;

        return $this;
    }

    /**
     * Get the value of soluong
     */ 
    public function getSoluong()
    {
        return $this->soluong;
    }

    /**
     * Set the value of soluong
     *
     * @return  self
     */ 
    public function setSoluong($soluong)
    {
        $this->soluong = $soluong;

        return $this;
    }

    /**
     * Get the value of gia
     */ 
    public function getGia()
    {
        return $this->gia;
    }

    /**
     * Set the value of gia
     *
     * @return  self
     */ 
    public function setGia($gia)
    {
        $this->gia = $gia;

        return $this;
    }

    public function insertChiTietDonHang($madonhang,$mabanh,$soluong,$gia) 
    {
        $userCon=new mySQLUtil();
        $pdo=$userCon->connectDB();
        $data=[
            'madonhang'=>$this->madonhang,
            'mabanh'=>$this->mabanh,
            'soluong'=>$this->soluong,
            'gia'=>$this->gia
        ];
        $sql="INSERT INTO chitietdonhang (madonhang,mabanh,soluong,gia) VALUES (:madonhang,:mabanh,:soluong,:gia)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute($data);
        $userCon->disconnectDB();
    }
    public function getAllChiTietDonHang(){
        $data=NULL;
        $myDB=new mySQLUtil();
        $sql="SELECT madonhang,mabanh,soluong,gia FROM chitietdonhang";
        $data=$myDB->getAllData($sql);
        $myDB->disconnectDB();
        return $data;
    }
}

?>