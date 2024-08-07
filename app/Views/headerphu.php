<!doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <title>
    <?php
        if($titlepage!="") echo $titlepage;
        else echo" CLOUDYY BEAUTY";
        ?></title>
  <meta name="description" content="Shopaholic - e-Commerce HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link rel="stylesheet" type="text/css" href="./../../../asm3/public/layout/assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./../../../asm3/public/layout/assets/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="./../../../asm3/public/layout/assets/css/et-line-icons.css">  

  <link rel="stylesheet" href="./../../../asm3/public/layout/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./../../../asm3/public/layout/assets/css/slick.css">
  <link rel="stylesheet" href="./../../../asm3/public/layout/assets/css/magnific-popup.css"> 
  <link rel="stylesheet" href="./../../../asm3/public/layout/assets/css/style.css">
  <link rel="stylesheet" href="./../../../asm3/public/layout/assets/css/themes.css">
  <link rel="stylesheet" href="./../../../asm3/public/layout/assets/css/home/home-11.css">
  <link rel="stylesheet" href="./../../../asm3/public/layout/assets/css/shop/shop.css">
  <!-- <link rel="stylesheet" href="public/layout/assets/css/shop/shop-details.css"> -->
  <link rel="stylesheet" href="./../../../asm3/public/layout/assets/css/shop/shop-details.css">
  <!-- <link rel="stylesheet" href="public/layout/assets/css/header/headerphu.css"> -->
  <link rel="stylesheet" href="./../../../asm3/public/layout/assets/css/pages/register.css">
  <link rel="stylesheet" href="./../../../asm3/public/layout/assets/css/pages/contact.css">
  <link rel="stylesheet" href="./../../../asm3/public/layout/assets/css/pages/about-01.css">
  <link rel="stylesheet" href="./../../../asm3/public/layout/assets/css/shop/cart.css">


</head>


<body>


  <header id="masthead" class="masthead">

 

    <div class="header-middle">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <h1><a class="navbar-brand hidden-xs" href="./"><img src="./../../../asm3/public/layout/images/upload/logo2.png" alt="Site Logo" style="max-width: 70%; margin-left: 30px; margin-top: -20px; "></a></h1>
          </div>
          <div class="col-sm-7">
            <div class="top-search-form">


                <form action="search.php" method="post"class="menu-form">
                <fieldset> 
                  <select name="category" id="category">
                    <option selected="selected">Tìm kiếm tại đây</option>
                    <option>Tonner</option>
                    <option>Surem</option>
                    <option>Sửa rửa mặt </option>
                    <option>Các sản phẩm khác</option>
                  </select>
                </fieldset>
            <input name="kyw" placeholder="  Tìm kiếm..."class="form-control">
<button class="btn " type="submit" name="btnsearch" ><i class="fa fa-search"></i> </button>
 </form>



              </form>  
            </div><!-- /.top-search-form -->
          </div>
         
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.header-middle -->



    <div class="header-bottom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand visible-xs" href="./">
            <img src="./../../../asm3/public/layout/images/upload/logo.jpg" alt="Site Logo">
          </a><!-- /.navbar-brand -->
        </div>

        <nav id="main-menu" class="menu collapse navbar-collapse pull-left">
          <ul class="nav navbar-nav">
            <li class="menu-item menu-item-has-children active">
              <a href="<?=BASE_URL?>/index">Trang chủ</a>
             
            </li>

            <li class="menu-item menu-item-has-children menu-item-has-mega-menu">
              <a href="<?=BASE_URL?>/product">Sản phẩm</a>
              

            <li class="menu-item menu-item-has-children">
              <a href="<?=BASE_URL?>/about">Giới thiệu</a>
            </li>

            <li class="menu-item menu-item-has-children menu-item-has-mega-menu">
              <a href="<?=BASE_URL?>/contact">Liên hệ</a>
            </li>          

           
            <li class="menu-item"><a href="<?=BASE_URL?>/viewcart">Giỏ hàng</a></li> 
            <li class="menu-item"><a href="<?=BASE_URL?>/register">Đăng ký/Đăng nhập</a></li> 
         

          </ul><!-- /.navbar-nav -->
        </nav><!-- /.navbar-collapse -->

        <div class="menu-social pull-right">
          <a href="#"><i class="ti-twitter-alt"></i></a>
          <a href="#"><i class="ti-facebook"></i></a>
          <a href="#"><i class="ti-pinterest-alt"></i></a>
          <a href="#"><i class="ti-vimeo-alt"></i></a>
        </div><!-- /.menu-social -->
      </div><!-- /.container -->
    </div><!-- /.header-bottom -->

  </header><!-- /#masthead -->
  
