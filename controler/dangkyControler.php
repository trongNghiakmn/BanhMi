<?php
include '../util/mySQLUtil.php';
include '../model/userModel.php';

$username = $_POST['sigin_txt_username'];
$password =md5($_POST['sigin_txt_pass']);
$confpassword =md5($_POST['sigin_txt_confpass']);

if($password == $confpassword){
    $user = new userModel("",$username,$password,0);
    $user->insertUser($username,$password);
    header('Location: ../view/login.php');
    exit;
}else{
    echo 'mat khau khong khop';
    // header('Location: ../view/Sigin.php');
    // exit;
}
?>