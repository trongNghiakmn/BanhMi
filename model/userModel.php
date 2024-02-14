<?php


class userModel{
    private $id;
    private $username;
    private $password;
    private $quyenb;
	
    public function __construct($id,$user,$pass,$phanquyen)
    {
        $this->username=$user;
        $this->password=$pass;
        $this->id=$id;
        $this->phanquyen=$phanquyen;
    }
    public function getUsername() {
        return $this->username;
    }
   public function setUsername($username) {
        return $this->username = $username;
    }
   public function getPassword() {
        return $this->password;
    }
   public function setPassword($password) {
        return $this->password = $password;
    }
   public function showName() {
        echo $this->getUsername()." ".$this->getPassword();
    }

    public function insertUser($username,$password) 
    {
        $userCon=new mySQLUtil();
        $pdo=$userCon->connectDB();
        $data=[
            'username'=>$this->username,
            'password'=>$this->password
        ];
        $sql="INSERT INTO user ( username, password,phanquyen) VALUES (:username, :password, 0)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute($data);
        $userCon->disconnectDB();
    }
    public function getAllUser(){
        $data=NULL;
        $myDB=new mySQLUtil();
        $sql="SELECT userid,username,password,phanquyen FROM user";
        $data=$myDB->getAllData($sql);
        $myDB->disconnectDB();
        return $data;
    }
    public function deleteUser($username){
        $dbCon = new mySQLUtil();
        $data = [
            'username' => $username,
        ];
        $sql = "DELETE FROM user WHERE username=:username";
        $dbCon->deleteData($sql,$data);
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of quyenb
     */ 
    public function getQuyenb()
    {
        return $this->quyenb;
    }

    /**
     * Set the value of quyenb
     *
     * @return  self
     */ 
    public function setQuyenb($quyenb)
    {
        $this->quyenb = $quyenb;

        return $this;
    }
}
