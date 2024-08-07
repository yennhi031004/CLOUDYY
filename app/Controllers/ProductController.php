<?php
 namespace App\Controllers;
 use App\Models\ProductModel;
 use App\Models\CatalogModel;

class ProductController  extends BaseController{
    private $ProductModel;
    private $CatalogModel;
    function __construct(){
        $this->ProductModel=new ProductModel;
        $this->CatalogModel = new CatalogModel;
    }
function product(){
    $this->titlepage="Danh sách sản phẩm";
    if(isset($_GET['idcatalog'])){
        $idcatalog=$_GET['idcatalog'];
    }else{
        $idcatalog=0;
    }
    $limit = 12;
    $sotrang = 1;
    $dssp_new=$this->ProductModel->sanpham_get_all_catalog($idcatalog,$limit,$sotrang);// catalog  
    $this->data["new_product"]= $dssp_new;
    $this->data["catalog_list"]= $this->CatalogModel->catalog_get_all();
    $this ->renderView("product",$this->titlepage,$this->data);
}
//    function detail($id){
//    $this->data['detail'] = $this->ProductModel->sanpham_get_one($id);
//    $this->renderView('productdetail', $this->data);
// }
    //   function detail(){
    //      $this->titlepage="Chi tiết sản phẩm";
    //      if(isset($_GET['id'])){
    //         $id=$_GET['id'];
    //      }else{
    //         $id=0;
    //      }
    //      $get_sp=$this->ProductModel->sanpham_get_one($id);
    //      if(is_array($get_sp)){
    //         extract($get_sp);
    //         $this->titlepage=$name;
    //         $this->data["detail"]= $get_sp;
    //         $this ->renderView("productdetail",$this->titlepage,$this->data);      
    //      } else{
    //         header("Location: " . BASE_URL . "index");
    //      }
    //   }
      function detail() {
        $url = isset($_GET['url']) ? "/".rtrim($_GET['url'], '/') : '/index';
        $url_array = explode("/",$url);
        if(count($url_array)>0){
            $id=$url_array[count($url_array)-1];
        }else{
            $id="";
        }
        if(isset($_GET['idcatalog'])){
            $idcatalog = $_GET['idcatalog'];
        }else{
            $idcatalog=0;
        }
        
        $limit=3;
        $sotrang=1;
        $this->data["new_product"]=$this->ProductModel->sanpham_get_all_catalog("",$idcatalog,$limit,$sotrang);
        $this->data["dssp_view"]=$this->ProductModel->sanpham_get_all(1,4);
        // $dssp_SPTT = $this->cat->catalog_get_all(); // Replace with actual code to get product data
        // $this->data["SPTT_Product"] = $dssp_SPTT;
     
        $this->data["catalog_list"]=$this->CatalogModel->catalog_get_all();
        $get_sanpham=$this->ProductModel->sanpham_get_one($id);
        if(is_array($get_sanpham)){
            extract($get_sanpham);
        $this->titlepage = $name;
        $this->data["DetailSP"]=$get_sanpham;
        $this->renderView("productdetail", $this->titlepage, $this->data);
       //header('location: '. BASE_URL .'/product/detail/'.$id);
        }
        else{
            header("Location: " . BASE_URL . "index");
             exit();
        }
     }
    

   
        // function cart(){
        //     $this ->renderView("cart",$this->titlepage,$this->data);

        // }
        function checkout(){
            $this ->renderView("checkout",$this->titlepage,$this->data);

        }
        function login(){
            $this ->renderView("login",$this->titlepage,$this->data);

        }
        function register(){
            $this ->renderView("register",$this->titlepage,$this->data);

        }
        function forgotpassword(){
            $this ->renderView("forgotpassword",$this->titlepage,$this->data);

        }

    }
?>