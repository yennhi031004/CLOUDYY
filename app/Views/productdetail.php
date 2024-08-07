
<?php
include_once "headerphu.php";
?>
<?php 


extract($data["DetailSP"]);
?>



  <section class="shop-contents">
    <div class="section-padding">
      <div class="container">
        <div class="product-details">

          <div class="post-navigation text-center">
            <a class="post-prev" href="shop-details-01.html"><i class="ti-arrow-left"></i></a>
            <a class="post-next" href="shop-details-01.html"><i class="ti-arrow-right"></i></a>
          </div><!-- /.post-navigation -->

          <div class="row">
            <div class="col-md-6">
              <div class="item-gallery vertical">                    
                <div class="tabs">
                  <div role="tabpanel" class="tabpanel">

                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane in active" id="item1">
                      <img src="./../../../asm3/public/layout/images/upload/<?=$img?>" alt="<?=$name?>"> 
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="item2">
                       <img src="./../../../asm3/public/layout/images/upload/<?=$img?>" alt="<?=$name?>"> 
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="item3">
                      <img src="./../../../asm3/public/layout/images/upload/<?=$img?>" alt="<?=$name?>"> 

                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="item4">
                      <img src="./../../../asm3/public/layout/images/upload/<?=$img?>" alt="<?=$name?>"> 
                      </div>
                    </div><!-- /.tab-content -->

                    <!-- <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#item1" aria-controls="item1" role="tab" data-toggle="tab" aria-expanded="true"><img src="./../../../asm3/public/layout/images/upload/<?=$img?>" alt="public/layout/images/upload/<?=$img?>"></a></li>
                      <li role="presentation" class=""><a href="#item2" aria-controls="item2" role="tab" data-toggle="tab" aria-expanded="false"><img src="./../../../asm3/public/layout/images/upload/<?=$img?>" alt="Product Image"></a></li>
                      <li role="presentation" class=""><a href="#item3" aria-controls="item3" role="tab" data-toggle="tab" aria-expanded="true"><img src="./../../../asm3/public/layout/images/upload/<?=$img?>" alt="Product Image"></a></li>
                      <li role="presentation" class=""><a href="#item4" aria-controls="item4" role="tab" data-toggle="tab" aria-expanded="true"><img src="./../../../asm3/public/layout/images/upload/<?=$img?>" alt="Product Image"></a></li>
                    </ul> -->
                    <!-- /.nav-tabs -->

                  </div>
                </div><!-- /.item-gallery -->
              </div>
            </div>

            <div class="col-md-6">
              <div class="about-product">
                <h3 class="item-title"><?=$name?></h3>
                <div class="top-meta">
                  <a href="#"><?=$view?></a>
                  <a href="#">Lượt xem</a>
                </div><!-- /.top-meta -->

                <div class="availability">
                  <!-- <button>In Stock<i class="ti-check-box"></i></button> -->
                </div><!-- /.availability -->

                <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                <div class="item-price">
                  <div class="current-price"><span class="currency"></span><span class="price"><?= number_format($price, 0, ',','.')?> VND</span></div><!-- /.current-price -->
                  <!-- <div class="previous-price"><span class="currency"></span><span class="price"><?=$price?>Đ</span></div>/.previous-price -->
                </div><!-- /.item-price -->

                <div class="cart-counter">
                  <button id="item-plus" class="item-plus"><i class="ti-plus"></i></button>
                  <span id="count" class="count">1</span>
                  <button id="item-minus" class="item-minus"><i class="ti-minus"></i></button>
                </div><!-- /.cart-counter -->

                <!-- <select data-select-like-alignement="never" class="color drop-select">
                  <option value="">Color</option>
                  <option value="2">White</option>
                  <option value="3">Gray</option>
                  <option value="4">Red</option>
                  <option value="5">Blue</option>
                </select>

                <select data-select-like-alignement="never" class="size drop-select">
                  <option value="">Size</option>
                  <option value="2">S</option>
                  <option value="3">M</option>
                  <option value="4">L</option>
                  <option value="5">XL</option>
                  <option value="5">XXL</option>
                </select> -->

                <p class="description">
                <?=$mota?>
                </p><!-- /.short-description -->

                

                <div class="buttons">
                <form action="'.BASE_URL.'/addcart" method="post">
                <input type="hidden" name="id" value="'.$id.'">
            <input type="hidden" name="img" value="'.$img.'">
             <input type="hidden" name="name" value="'.$name.'">
             <input type="hidden" name="pricesp" value="'.$price.'">
                  <button type="submit" name="addcart" >Thêm giỏ hàng<i class="fa fa-shopping-cart"></i></button>
                  <button class="wish-list"><i class="fa fa-heart"></i></button>
                </div>
</form>

                <!-- <div class="product-meta">
                  <span class="meta-id">Product ID : <span class="meta-about"></span></span>
                  <span class="meta-id">Category : <span class="meta-about"><a href="#"></a><a href="#">Design</a></span></span>
                  <span class="meta-id">Tags : <span class="meta-about"><a href="#"></a>,<a href="#">Design</a>,<a href="#">Photoshop</a></span></span>
                </div>/.product-meta -->

                <div class="product-social">
                  <a href="#"><i class="ti-twitter-alt"></i></a>
                  <a href="#"><i class="ti-facebook"></i></a>
                  <a href="#"><i class="ti-pinterest-alt"></i></a>
                  <a href="#"><i class="ti-google"></i></a>
                </div><!-- /.product-social -->
              </div><!-- /.about-product -->
            </div>
          </div>
          <div class="clearfix"></div>
          <!-- <h3>sản phẩm liên quan</h3> -->
          




  
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.shop-contents -->

 <!-- /.related-products -->

 


  <script src="./../../../asm3/public/layout/assets/js/plugins.js"></script>
  <script src="./../../../asm3/public/layout/assets/js/main.js"></script>
  <script src="./../../../asm3/public/layout/assets/js/bootstrap-rating.min.js"></script>
  <?php
include_once "footer.php";
?>