<?php

namespace App\Controllers;



class AboutController extends BaseController{
 
   function __construct(){
    //  $this->pro=new ProductModel;
   }
function about(){
    $this->titlepage="Giới thiệu";
    $this->data="";
   $this ->renderView("about",$this->titlepage,$this->data);

}
}

?>