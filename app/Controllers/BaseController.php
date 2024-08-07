<?php
namespace App\Controllers;
class BaseController{
   protected $titlepage="";
   protected $data=[];
   function renderView($viewpage,$titlepage,$data){
      $viewfile="app/Views/".$viewpage.".php";
      if(is_file($viewfile)){
         include_once $viewfile;
      }else{
         echo "File không tồn tại!";
      }
   }
   public function loadModel($modelName){
      // $modelName = 'User';

      // $model = $modelName."Model";

      return new ($modelName."Models")();
  }
}