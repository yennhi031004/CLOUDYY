<?php


session_start();
if (!isset($_SESSION['giohang'])){
  $_SESSION['giohang']=[];
}
  // require_once "app/view/header.php";
  // require_once "app/view/home.php";
  // require_once "app/view/footer.php";
  // require_once "app/model/DatabaseModel.php";
  // require_once "app/model/ProductModel.php";


//   require_once "app/config/database.php";
//   require_once "app/models/DatabaseModel.php";
//   require_once "app/models/ProductModel.php";
//   require_once "app/controllers/BaseController.php";
//   require_once "app/controllers/HomeController.php";
//   require_once "app/controllers/ProductController.php";
 

require_once "app/Config/database.php";

require_once "vendor/autoload.php";

require_once "app/Config/route.php";


use App\Routing\Route;


$uri = isset($_GET['url']) ? "/".rtrim($_GET['url'], '/') : '/index';

Route::dispatch($uri);
  // $dssp=product_select_all();
//   if(isset($_GET['pg'])){
//     switch ($_GET['pg']) {
//        case 'product':
//           $propage=new App\Controllers\ProductController;
//           $propage->index();
//           break;

//        case 'productdetail':
//           $propage=new App\Controllers\ProductController;
//           $propage->detail();
//           break;
//           case 'register':
//             $propage=new App\Controllers\UserController;
//             $propage->register();
//             break;
       
//        default:
//           $homepage=new App\Controllers\HomeController;
//           $homepage->index();
//           break;
//     }

//  }else{
//     $homepage=new App\Controllers\HomeController;
//     $homepage->index();
//  }
?>