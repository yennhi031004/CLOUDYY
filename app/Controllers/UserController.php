<?php

namespace App\Controllers;



class UserController extends BaseController{
   private $user;
   function __construct(){
    //  $this->pro=new ProductModel;
   }
function login(){
    $this->titlepage="Đăng ký thành viên";
    $this->data="";
   $this ->renderView("register",$this->titlepage,$this->data);
   require_once 'app/Views/user_login.php';
}
}

?>
