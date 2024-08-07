<?php

namespace App\Controllers;

use App\Models\ProductModel;

class HomeController extends BaseController{
   private $pro;
   function __construct(){
      $this->pro=new ProductModel;
   }
function index(){
    $this->titlepage="Trang chủ website bán hàng";

    $this->data["dssp_new"]=$this->pro->sanpham_get_all(0,8);
    $this->data["dssp_view"]=$this->pro->sanpham_get_all(1,4);
    $this->data["brand_list"]=$this->pro->brand_get_all();
    $this->data["dssp_sale"]=$this->pro->sale_get_all(2);
   
   $this ->renderView("home",$this->titlepage,$this->data);


   
   
}


}

?>