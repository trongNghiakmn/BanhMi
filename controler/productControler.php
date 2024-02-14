<?php
//session_start();
include '../model/productModel.php';
include '../util/mySQLUtil.php';
class productControler
{

    
    public function __construct($order_action)
    {
        $idrm =isset($_GET["idrm"])?$_GET["idrm"]:null;
        if($idrm!=null){
            session_start();
            unset($_SESSION['cart_item'][$idrm]);
            header("Location: ../view/giohang.php");
           //var_dump($_SESSION['cart_item'][$idrm]);
        }
        
        switch ($order_action) {
            case "add":
                $id=$_POST['id'];
                $name=$_POST['name'];
                $mota=$_POST['mota'];
                $hinh=$_POST['hinh'];
                $gia=$_POST['gia'];
                $maloai=$_POST['maloai'];
                $sp=array($id,$name,$mota,$gia,$hinh,$maloai,1);
                session_start();
                if(!empty($_SESSION['cart_item'])){
                    if(array_key_exists($id,$_SESSION['cart_item'])){
                        $num=$_SESSION['cart_item'][$id][6];
                        //var_dump($num);
                        $_SESSION['cart_item'][$id][6]=$num+1;
                    }else{
                        $_SESSION['cart_item'][$id]=$sp;
                    }
                }else{
                    $_SESSION['cart_item'][$id]=$sp;
                }
               
                //var_dump($_SESSION['cart_item']);
                header("Location: ../view/giohang.php");
                break;
            default:
                $product = new productModel("", "", "", "", "", "", 0);
                $data = $this->getAllProduct($product);
                break;
        }
    }
    public function getAllProduct($product)
    {
        return $product->getAllProduct();
    }
    public function getProduct($id)
    {
        $product = new productModel("", "", "", "", "", "", 0);
        return $product->getProduct($id);
    }
}

$order_action = "";
if (isset($_POST['order_action'])) {
    $order_action = $_POST['order_action'];
} else if (isset($_GET['action'])) {
    $order_action = $_GET['action'];
}
$order_action = new productControler($order_action);
