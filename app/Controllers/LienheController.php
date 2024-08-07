<?php

namespace App\Controllers;



class LienheController extends BaseController{
 
   function __construct(){
    //  $this->pro=new ProductModel;
   }
function contact(){
    $this->titlepage="Liên hệ";
    $this->data="";
   $this ->renderView("contact",$this->titlepage,$this->data);

}
}

?>