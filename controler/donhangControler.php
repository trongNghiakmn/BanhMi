<?php
include '../model/donhangModel.php';
include '../model/chitietdonhangControler.php';
include '../util/mySQLUtil.php';
session_start();

$id = null;
$iddonhang=null;
$name = $_SESSION["username"];
//var_dump($_SESSION['tonggia']);
//var_dump($_SESSION["listuser"]);
for ($i = 0; $i < count($_SESSION["listuser"]); $i++) {
    if ($_SESSION["listuser"][$i]["username"] == $name) {
        $id = $_SESSION["listuser"][$i]["userid"];
        break;
    }   
}
//var_dump($id);
$donhang = new donhangModel("", $id, $_SESSION['tonggia']);
$dsdonhang=$donhang->getAllDonHang();
$_SESSION["listdonhang"]=$dsdonhang;
//var_dump($_SESSION["listdonhang"]);




if(isset($_POST['add-to-cart'])){   
    $donhang->insertDonHang($id, $_SESSION['tonggia']);
    header('Location: ../view/giohang.php');
}





exit;
