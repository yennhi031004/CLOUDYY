<?php
require_once "header.php";
?>
<?php
$html_cart="";
$tongtien=0;
if (count($_SESSION["giohang"])>0){
  foreach($_SESSION["giohang"] as $item){
    $tt=$item["soluong"]*$item["pricesp"];
    $tongtien+=$tt;
    $html_cart.='
<tr>

<td class="order-item">
  <button class="del">
  <a href="'.BASE_URL.'/deleteproduct/'.$item["id"].'">

 
  <i class="ti-trash">
  </i>
  
  </a>
  </button>
  <div class="item-thumbnail">
    <img src="public/layout/images/upload/'.$item["img"].'" alt="images">
  </div><!-- /.item-thumbnail -->

  <div class="item-details">
    <h3 class="item-title">'.$item["name"].'</h3>
   
  </div><!-- /.item-details -->
</td>
<td class="unit-price"><span class="currency"></span><span class="price">'.number_format($item["pricesp"],0,",",".").'VNĐ</span></td>

<td class="order-count">
  <div class="cart-counter">
    <button class="item-minus"><i class="ti-minus"></i></button>
    <span class="item-count">1</span>
    <button class="item-plus"><i class="ti-plus"></i></button>
  </div><!-- /.cart-counter -->
</td>

<td class="total-price"><span class="currency"></span><span class="price">'.number_format($tt,0,',','.').'</span></td>

<td class="edit"><button><i class="ti-pencil"></i></button></td>
</tr>


';

}
  }


?>
<section class="cart-section">
    <div class="section-padding">
      <div class="container">
       
        <div class="per-order-items">

          <table class="cart-table">
            <tbody>
              <tr class="order-head">
                <th>SẢN PHẨM</th>
                <th>ĐƠN GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>THÀNH TIỀN</th>
                <th>THAO TÁC</th>
              </tr>
    <?=$html_cart?>
            </tbody>
          </table><!-- /.cart-table -->

          <div class="cart-buttons">
            <button class="clear-cart">
              <a href="deletecart"> Xóa giỏ hàng </a></button>
            <button class="update-cart">
              <a href="product">   Cập nhập giỏ hàng</a></button>
            <button class="continue pull-right">
              <a href="product">   Tiếp tục mua sắm</a>
           
            </button>
          </div><!-- /.cart-buttons -->
        </div><!-- /.per-order-items -->

     

            <div class="billing-order col-md-4 col-sm-6">
              <div class="order-cost">
                <ul>
                
               
                  <li>
                    <div class="bill-name total">Tổng tiền</div>
                    <div class="amount total"><span class="currency"></span><span class="count"><?=number_format($tongtien,0,",",".")?>VNĐ</span></div>
                  </li>
                </ul>
                <button class="btn">Tiến hành thanh toán</button>
              </div><!-- /.order-cost -->
            </div><!-- /.billing-order -->
          </div><!-- /.row -->
        </div><!-- /.billing-table -->
      </div><!-- /.contaier -->
    </div><!-- /.section-padding -->
  </section><!-- /.cart-section -->






  <script src="public/layout/assets/js/plugins.js"></script>
  <script src="public/layout/assets/js/main.js"></script>
  <?php
include_once "footer.php";
?>