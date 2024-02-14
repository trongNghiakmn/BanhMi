<?php

class donhangModel{
    private $madonhang;
    private $mauser;
    private $tonggia;

    public function __construct($madonhang,$mauser,$tonggia)
    {
        $this->madonhang=$madonhang;
        $this->mauser=$mauser;
        $this->tonggia=$tonggia;
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
     * Get the value of mauser
     */ 
    public function getMauser()
    {
        return $this->mauser;
    }

    /**
     * Set the value of mauser
     *
     * @return  self
     */ 
    public function setMauser($mauser)
    {
        $this->mauser = $mauser;

        return $this;
    }

    /**
     * Get the value of tonggia
     */ 
    public function getTonggia()
    {
        return $this->tonggia;
    }

    /**
     * Set the value of tonggia
     *
     * @return  self
     */ 
    public function setTonggia($tonggia)
    {
        $this->tonggia = $tonggia;

        return $this;
    }

    public function insertDonHang($mauser,$tonggia) 
    {
        $userCon=new mySQLUtil();
        $pdo=$userCon->connectDB();
        $data=[
            'mauser'=>$this->mauser,
            'tonggia'=>$this->tonggia
        ];
        $sql="INSERT INTO donhang (mauser,tonggia) VALUES (:mauser,:tonggia)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute($data);
        $userCon->disconnectDB();
    }
    public function getAllDonHang(){
        $data=NULL;
        $myDB=new mySQLUtil();
        $sql="SELECT madonhang,mauser,tonggia FROM donhang";
        $data=$myDB->getAllData($sql);
        $myDB->disconnectDB();
        return $data;
    }
}

?>