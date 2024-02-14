<?php
session_start();
include '../util/mySQLUtil.php';
include '../model/userModel.php';
include '../model/donhangModel.php';
include '../model/productModel.php';
include '../model/loaiModel.php';
$id = null;
$quyen = null;
$username = $_POST['login_txt_username'];
$password = md5($_POST['login_pass_password']);
//$btn_dk = $_POST['login_btn_dk'];
$data = null;
if (isset($_POST['login_btn_dn'])) {
    $userCon = new mySQLUtil();
    $pdo = $userCon->connectDB();
    $data = [
        'username' => $username,
        'password' => $password
    ];
    $sql = "SELECT username,password FROM user WHERE (username=:username) and (password=:password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);
    $count = $stmt->rowCount();
    $userCon->disconnectDB();

    $product = new userModel("", "", "", 0);
    $data = $product->getAllUser();
    for ($i = 0; $i < count($data); $i++) {
        if ($data[$i]["username"] == $username) {
            $id = $data[$i]["userid"];
            $quyen = $data[$i]["phanquyen"];
            break;
        }
    }
    //-------------------------------don hang
    $donhang = new donhangModel("", "", "");
    $dsdonhang = $donhang->getAllDonHang();
    //-------------------------------product
    $product=new productModel("","","","","","",0);
    $dssp=$product->getAllProduct();
    //-------------------------------loai
    $loai=new loaiModel("","");
    $dsl=$loai->getAllLoai();

    if ($count > 0) {
        if ($quyen == 0) {
            $_SESSION["isUser"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["userid"] = $id;
            $_SESSION["listuser"] = $data;
            header('Location: ../view/index.php');
            exit;
        } else {
            $_SESSION["isUser"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["listuser"] = $data;
            $_SESSION["listdonhang"] = $dsdonhang;
            $_SESSION["listproduct"]=$dssp;
            $_SESSION["listloai"]=$dsl;
            header('Location: ../view/admin/index_admin.php');
            exit;
        }
    }else{
        echo 'sai thong tin dang nhap';
        // header('Location: ../view/login.php');
        // exit;
    }
} else if (isset($_POST['login_btn_dk'])) {
    header('Location: ../view/Signin.php');
    exit;
}


//$user = new userModel($username,$password);
//$user->showName();

// $dbcon =new mySQLUtil();

// $dbcon->connectDB();
 
// $dbcon->disconnectDB();

//$user->insertUser($username,$password);
//$user->deleteUser($username);



// $dbcon =new mySQLUtil();
// $dbcon->connectDB();
//$dbcon->disconnectDB();
