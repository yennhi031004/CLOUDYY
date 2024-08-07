<?php
 namespace App\Models;
 use App\Models\DatabaseModel;

class ProductModel{

private $db;
function __construct(){
    $this->db=new DatabaseModel;
}

   
    function sanpham_get_all($view, $limit){
      $sql = "SELECT * FROM sanpham ";
      if ($view == 0) {
          $sql .= " ORDER BY id DESC LIMIT " . $limit;
      } elseif ($view == 1) {
          $sql .= " ORDER BY view desc LIMIT " . $limit;
      } 
      // else {
      //     $sql .= " WHERE bestseller = 1 ORDER BY bestseller LIMIT " . $limit;
      // }
      return $this->db->get_all($sql);
  }

    function sanpham_get_all_catalog($idcatalog,$limit,$sotrang){
        $sql="select * from sanpham where 1";
        if($idcatalog>0){ 
             $sql.=" AND idcatalog =".$idcatalog;
        }
            $limit1 = ($sotrang-1) * $limit;
            $limit2 = $limit;
            $sql.=" ORDER BY id DESC LIMIT " .$limit1.",".$limit2;           
        return $this->db->get_all($sql);
        } 

        function sale_get_all($limit){
          $sql = "SELECT * FROM sanpham order by price_sale desc limit $limit";
          return $this->db->get_all($sql);
      }
    
      
    //     function sanpham_get_one($id){
    //     if($id>0){
    //         $sql="select * from sanpham where id =".$id ;
    //         return $this->db->get_one($sql);
            
    //     }else{
    //         return 0 ;
    //     }
    // } 
    function sanpham_get_one($id){
      $sql = "SELECT * from sanpham WHERE id=".$id;
      return $this->db->get_one($sql);
  }
  
    
    function brand_get_all(){
      // $sql="select * from sanpham oder by id desc";
      $sql="select * from brand order by id asc ";
      
      return $this->db->get_all($sql);
      }
     
      function anh_getAll(){
          $sql="select img from brand";
          return $this->db->get_all($sql);
       }
    


       function sanpham_show($dssp){
        $html_dssp_home ='';
        foreach($dssp as $item){
            extract($item);
            $hrefsp=BASE_URL. '/product/detail/'.$id;
            $pricesp=number_format($price,0,',','.');
            // $link="productdetail&id=".$id;
            $html_dssp_home.='
           
            <div class="item col-md-3 col-sm-4 cat-2">
            <div class="item-thumbnail">
              <a class="fancybox" href="images/home08/featured/3.jpg">
              <a href="'.$hrefsp.'">
                <img src="public/layout/images/upload/'.$img.'" alt="Item Thumbnail">
              </a>
            </div><!-- /.item-thumbnail -->
            
            <div class="item-content">
            <form action="'.BASE_URL.'/addcart" method="post">
            <input type="hidden" name="id" value="'.$id.'">
            <input type="hidden" name="img" value="'.$img.'">
             <input type="hidden" name="name" value="'.$name.'">
             <input type="hidden" name="pricesp" value="'.$price.'">

              <div class="buttons">
         <button class="add-to-cart">       
  <button type="submit" name="addcart" >Thêm giỏ hàng
      
         <i class="fa fa-shopping-cart">
         </i>


        <!-- <div class="buttons">
         <button class="add-to-cart">       
        
       <a href="addcart"> Thêm giỏ hàng</a>
         
         </button>-->
         </button>
         </button>
         </form>
                <button class="wish-list"><i class="fa fa-heart"></i></button>
              </div><!-- /.buttons -->

              <h3 class="item-title"><a href="'.$hrefsp.'">'.$name.'</a></h3><!-- /.item-title -->
              <div class="item-price">
               
                <span class="price">'.$price.' Đ</span>
              </a>
              </div><!-- /.item-price -->

            </div><!-- /.item-content -->
          </div><!-- /.item -->';
        }
        return $html_dssp_home;
    }
 
       
    }
?>