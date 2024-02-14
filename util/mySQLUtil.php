<?php

class mySQLUtil
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    public static $conn;

    public function __construct()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "ltweb";
        if(self::$conn==null){
            //echo "Connected successfully <br>";
            $this->connectDB();
        }else{
            //echo "lay ket noi cu <br>";
            return self::$conn;
        }
    }

    public function __destruct()
    {
        $this->servername = "";
        $this->username = "";
        $this->password = "";
        $this->dbname = "";
        self::$conn = null;
    }

    public function connectDB()
    {
        try {
            self::$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return self::$conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function disconnectDB(){
        //echo "dong ket noi <br>";
        self::$conn = null;
    }
    public function getConn(){
        return $this->conn; 
    }

    public function getAllData($sql){
        $stmt=self::$conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insertDate($sql,$data=array()){
       
    }
    public function deleteData($sql,$data=array()){
        $dbCon = new mySQLUtil();
        $pdo= $dbCon->connectDB();
        $stmt= $pdo->prepare($sql);
        $stmt->execute($data);
        $dbCon->disconnectDB();
    }
    
}
