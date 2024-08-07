<?php

namespace App\Controllers;
use App\Models\CartModel;



class CartController extends BaseController{
 
    private $CartModel;

   function __construct(){
 // $this->CartModel=new CartModel;
   }
function index(){
    $this->titlepage='addcart';
    // $this->data="";
   $this ->renderView("viewcart",$this->titlepage,$this->data);

}
function addcart(){
   $this->titlepage='Giỏ hàng rỗng';
    if(isset($_POST['addcart'])){
        $id=$_POST['id'];
        $img=$_POST['img'];
        $name=$_POST['name'];
        $pricesp=$_POST['pricesp'];
        $soluong=1;
        $sp=array("id"=>$id,"img"=>$img,"name"=>$name,"pricesp"=>$pricesp,"soluong"=>$soluong);
        $_SESSION["giohang"][$id]=$sp;
        $this->titlepage='Giỏ hàng';
    }
  
    // $this->data="";
   $this ->renderView("viewcart",$this->titlepage,$this->data);
}
function deletecart(){
    if(count($_SESSION["giohang"])>0){
        $_SESSION["giohang"]=[];
    }
    header('location: index.php');
}
function deleteproduct(){
    $url = $_SERVER['REQUEST_URI'];
    $segments= explode('/', rtrim($url, '/'));
    $idproduct_key = array_search('deleteproduct',$segments);
    $idproduct=$segments[$idproduct_key + 1];
    unset($_SESSION["giohang"][ $idproduct]);
    if(count($_SESSION["giohang"])>0){
        // $this->titlepage='Giỏ hàng';
        // $this->data="";
        // $this ->renderView("viewcart",$this->titlepage,$this->data);
        header('location: '.BASE_URL.'/viewcart');
    }else{
        header('location: index.php');
    }
   

}
}

?>