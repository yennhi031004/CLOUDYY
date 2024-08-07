<?php  require_once "header.php" ?>
  
<?php
//  $this->data["new_product"]= $dssp_new;
//  $dssp_new=$data["new_product"];
$dssp_new=$data['dssp_new'];
$proshow=new App\Models\ProductModel;
$html_dssp_home = $proshow->sanpham_show($dssp_new);
// $dssp_view=$data['view_product'];
// $html_dssp_view = $proshow->product_show($dssp_view);
$dssp_view = $data["dssp_view"];
  $html_dssp_view = $proshow->sanpham_show($dssp_view);

  $dssp_sale =$data["dssp_sale"];
  $html_dssp_sale="";
  foreach($dssp_sale as $item){
    extract($item);
    $html_dssp_sale.='<div class="carousel-inner">
    <div class="item active">
      <div class="product-item">
        <div class="item-thumbnail">
          <img src="public/layout/images/upload/'.$img.'" alt="Item Thumbnail">
          <div class="add-cart"><a href="#" class="btn">Add to cart</a></div><!-- /.add-cart -->
        </div><!-- /.item-thumbnail -->

        <div class="item-details">
          <h3 class="item-title"style="color: #000;
          font-family: sans-serif;
          font-size: 15px;
          font-weight: 100; text-transform: none">'.$name.'</h3><!-- /.item-title -->
          <div class="item-price"><span class="currency"></span><span class="price">'.$price_sale.' vnđ</span></div><!-- /.item-price -->
        </div><!-- /.item-details -->
      </div><!-- /.product-item -->

      
    </div><!-- /.item -->

    <div class="item">
      <div class="product-item">
        <div class="item-thumbnail">
          <img src="public/layout/images/upload/'.$img.'" alt="Item Thumbnail">
          <div class="add-cart"><a href="#" class="btn">Add to cart</a></div><!-- /.add-cart -->
        </div><!-- /.item-thumbnail -->

        <div class="item-details">
          <h3 class="item-title"style="color: #000;
          font-family: sans-serif;
          font-size: 15px;
          font-weight: 100; text-transform: none">'.$name.'</h3><!-- /.item-title -->
          <div class="item-price"><span class="currency"></span><span class="price">'.$price_sale.' vnđ</span></div><!-- /.item-price -->
        </div><!-- /.item-details -->
      </div><!-- /.product-item -->

    </div><!-- /.item -->

    <div class="item">
      <div class="product-item">
        <div class="item-thumbnail">
          <img src="public/layout/images/upload/'.$img.'" alt="Item Thumbnail">
          <div class="add-cart"><a href="#" class="btn">Add to cart</a></div><!-- /.add-cart -->
        </div><!-- /.item-thumbnail -->

        <div class="item-details">
          <h3 class="item-title"style="color: #000;
          font-family: sans-serif;
          font-size: 15px;
          font-weight: 100; text-transform: none">'.$name.'</h3><!-- /.item-title -->
          <div class="item-price"><span class="currency"></span><span class="price">'.$price_sale.' vnđ</span></div><!-- /.item-price -->
        </div><!-- /.item-details -->
      </div><!-- /.product-item -->

    </div><!-- /.item -->
  </div>';
  }

    $brand_list = $data["brand_list"];
    $html_brand_list="";
    foreach($brand_list as $item){ 
       extract($item);
      // $link="index.php?pg=product&idcatalog=".$id;
      $html_brand_list.='<li class="menu-item menu-item-has-children">
      <a href="#">'.$name.'</a> </li>';  }

?>
  
  <section class="banner banner-11 text-left background-bg" data-image-src="images/home11/banner.jpg">
    <div class="container">
      <div class="row">
        <div class="banner-top">

          <div class="col-sm-3">
            <h3 class="banner-title" style="font-family:sans-serif">Thương hiệu</h3>
            <div class="shop-category">
            <ul class="category-menu">
                <?=$html_brand_list?>
              </ul>
            </div><!-- /.shop-category -->
          </div>

          <div class="col-sm-6">
            <div id="bacol-sm-6nner-slider" class="banner-slider carousel slide background-bg" data-image-src="" >

              <ol class="carousel-indicators">
                <li data-target="#banner-slider" data-slide-to="0" class="active"></li>
                <li data-target="#banner-slider" data-slide-to="1"></li>
                <li data-target="#banner-slider" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner" style="width:220%">
                <div class="item active">
                 
                  <div class="col-sm-6">
                    <img class="banner-image" src="public/layout/images/upload/slide1.jpg" alt="Slider Image">
                  </div>
                </div><!-- /.item -->

                <div class="item">
                  <div class="col-sm-6">
                    <img class="banner-image" src="public/layout/images/upload/slide2.jpg" alt="Slider Image">
                  </div>

                 
                </div><!-- /.item -->

                <div class="item">
               

                  <div class="col-sm-6">
                    <img class="banner-image" src="public/layout/images/upload/slide3.jpg" alt="Slider Image">
                  </div>
                </div><!-- /.item -->
              </div>
            </div><!-- /#banner-slider -->
          </div>

          <div class="col-sm-3">
            <h3 class="banner-title">Top Seller</h3><!-- /.banner-title -->
            <div id="top-sell-slider" class="top-sell-slider carousel slide text-center">

              <ol class="carousel-indicators">
                <li data-target="#top-sell-slider" data-slide-to="0" class="active"></li>
                <li data-target="#top-sell-slider" data-slide-to="1"></li>
                <li data-target="#top-sell-slider" data-slide-to="2"></li>
              </ol>

              <?=$html_dssp_sale?>
            </div><!-- /#top-sell-slider -->
          </div>

        </div><!-- /.banner-top -->

        <div class="banner-bottom text-center">
          <div class="features">
            <div class="col-sm-4">
              <div class="item megento-blue">
                <div class="item-details">
                  <span class="icon icon-hotairballoon"></span><!-- /.icon -->
                  <h3 class="item-title">BEAUTYFULL</h3><!-- /.item-title -->
                  <p class="description">
                    Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec 
                  </p><!-- /.description -->
                </div><!-- /.item-details -->
              </div><!-- /.item -->
            </div>

            <div class="col-sm-4">
              <div class="item megento-light-blue">
                <div class="item-details">
                  <span class="icon icon-recycle"></span><!-- /.icon -->
                  <h3 class="item-title">Refund Option</h3><!-- /.item-title -->
                  <p class="description">
                    Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec 
                  </p><!-- /.description -->
                </div><!-- /.item-details -->
              </div><!-- /.item -->
            </div>

            <div class="col-sm-4">
              <div class="item megento-ash">
                <div class="item-details">
                  <span class="icon icon-lifesaver"></span><!-- /.icon -->
                  <h3 class="item-title">Excellent Support</h3><!-- /.item-title -->
                  <p class="description">
                    Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec 
                  </p><!-- /.description -->
                </div><!-- /.item-details -->
              </div><!-- /.item -->
            </div>
          </div>

        </div><!-- /.banner-bottom -->
      </div>
    </div><!-- /.container -->
  </section><!-- /.banner -->
  <section class="featured featured-11 text-center">
    <div class="section-padding" style="padding:1.25rem;">
      <div class="container">
        <div class="row">
          <div class="section-top">
            <h2 class="section-title">SẢN PHẨM MỚI<span></span></h2>
          </div><!-- /.section-top -->

          <ul class="filter">
            <li><a class="active" href="#" data-filter="*">All</a></li>
            <li><a href="#" data-filter=".cat-1">SVR</a></li>
            <li><a href="#" data-filter=".cat-2">CERAVE</a></li>
            <li><a href="#" data-filter=".cat-3">SIMPLE</a></li>
          </ul>

          <div class="featured-sorting">
            <?=$html_dssp_home?><!-- /.item -->

          <!-- /.item -->

          </div><!-- /.featured-sorting -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.featured -->

  <section class="deal background-bg text-center" data-image-src="public/layout/images/upload/sale.png" style="width: 100%; ">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-6">
            <div class="discount">
              <img src="public/layout/images/upload/srm5.jpg" alt="Tab Image">
              <span>-70%</span>
            </div><!-- /.discount -->
          </div>

          <div class="col-md-5 col-sm-6">
            <h2 class="title" style="color:#000;">Flash sale</h2><!-- /.title -->
            <h3 class="sub-title" style="color:#000;font-family: sans-serif;">Mua ngay sửa rửa mặt Simple</h3><!-- /.sub-title -->
            <div id="time_countdown1" class="time-count-container">

              <div class="time-box">
                <div class="time-box-inner dash days_dash">
                  <span class="time-number"   style=" background: rgb(118 55 137)";>
                    <span class="digit">0</span>
                    <span class="digit">0</span>
                    <span class="digit">0</span>
                  </span><!-- /.time-number -->
                  <span class="time-name"style=" background: rgb(118 55 137)">Ngày</span>
                </div><!-- /.time-box-inner -->
              </div><!-- /.time-box -->

              <div class="time-box">
                <div class="time-box-inner dash hours_dash">
                  <span class="time-number"style=" background: rgb(118 55 137)">
                    <span class="digit">0</span>
                    <span class="digit">0</span>
                    <span class="digit">0</span>
                  </span><!-- /.time-number -->
                  <span class="time-name"style=" background: rgb(118 55 137)">Giờ</span>
                </div><!-- /.time-box-inner -->
              </div><!-- /.time-box -->

              <div class="time-box">
                <div class="time-box-inner dash minutes_dash">
                  <span class="time-number"style=" background: rgb(118 55 137)">
                    <span class="digit">0</span>
                    <span class="digit">0</span>
                    <span class="digit">0</span>
                  </span><!-- /.time-number -->
                  <span class="time-name" style=" background: rgb(118 55 137)">Phút</span>
                </div><!-- /.time-box-inner -->
              </div><!-- /.time-box -->

              <div class="time-box">
                <div class="time-box-inner dash seconds_dash">
                  <span class="time-number"style=" background: rgb(118 55 137)">
                    <span class="digit">0</span>
                    <span class="digit">0</span>
                    <span class="digit">0</span>
                  </span><!-- /.time-number -->
                  <span class="time-name"style=" background: rgb(118 55 137)">Giây</span>
                </div><!-- /.time-box-inner -->
              </div><!-- /.time-box -->

            </div><!-- /#time_countdown -->

            <a class="btn" href="#">MUA NGAY</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.deal -->
  
  <script>
  // Đặt ngày và giờ kết thúc của đồng hồ đếm ngược
  var countDownDate = new Date("2024-01-20T00:00:00Z").getTime();

  // Cập nhật đồng hồ đếm mỗi 1 giây
  var x = setInterval(function() {

    // Lấy ngày và giờ hiện tại
    var now = new Date().getTime();

    // Tính toán thời gian còn lại
    var distance = countDownDate - now;

    // Tính toán ngày, giờ, phút và giây
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Cập nhật các phần tử đồng hồ đếm trong HTML
    document.querySelector('.days_dash .digit:first-child').innerText = Math.floor(days / 10);
    document.querySelector('.days_dash .digit:nth-child(2)').innerText = days % 10;
    document.querySelector('.hours_dash .digit:first-child').innerText = Math.floor(hours / 10);
    document.querySelector('.hours_dash .digit:nth-child(2)').innerText = hours % 10;
    document.querySelector('.minutes_dash .digit:first-child').innerText = Math.floor(minutes / 10);
    document.querySelector('.minutes_dash .digit:nth-child(2)').innerText = minutes % 10;
    document.querySelector('.seconds_dash .digit:first-child').innerText = Math.floor(seconds / 10);
    document.querySelector('.seconds_dash .digit:nth-child(2)').innerText = seconds % 10;

    // Nếu đồng hồ đếm kết thúc, hiển thị một thông báo
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("time_countdown1").innerHTML = "HẾT HẠN";
    }
  }, 1000); // Cập nhật mỗi 1 giây
</script>

  <section class="trending-03">
    <div class="section-padding">
      <div class="container">
        <h2 class="section-title">Sản phẩm nhiều lượt xem <span></span></h2><!-- /.section-title -->

        <div class="section-details">
          <div class="row">
            <div class="trending-slider-03 text-center">

             <?= $html_dssp_home ;?>


            </div><!-- /.trending-slider -->
          </div><!-- /.row -->
        </div><!-- /.section-details -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.trending -->





  <script src="public/layout/assets/js/plugins.js"></script>
  <script src="public/layout/assets/js/main.js"></script>
  <script src="public/layout/assets/js/bootstrap-rating.min.js"></script>
  <script src="public/layout/assets/js/jquery.lwtCountdown-1.0.js"></script>




  


</body>
</html>

<?php  require_once "footer.php" ?>
