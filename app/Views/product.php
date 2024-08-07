<?php
require_once "header.php";
?>

<?php


     $dssp_new = $data["new_product"];
     $proshow = new App\Models\ProductModel;
     $html_dssp_home = $proshow->sanpham_show($dssp_new);
 
     $catalog_list = $data["catalog_list"];
     $html_catalog_list="";
     foreach($catalog_list as $item){
         extract($item);
         $link="product&idcatalog=".$id;
         $html_catalog_list.='<li class="menu-item menu-item-has-children">
         <a href="'.$link.'">'.$name.'</a> </li>';
         }
?>






<section class="page-name-sec page-name-sec-01">
    <div class="section-padding">
      <div class="container">
        <h3 class="page-title">Sản phẩm theo danh mục</h3><!-- /.page-title -->

        <div class="row">
          <div class="col-sm-7">
            <p class="description">
              <!-- Duis sed odio sit amet nibh vulputate cursus a sit amet.  -->
            </p><!-- /.description -->
          </div>

          <div class="col-sm-5">
            <ol class="breadcrumb text-right">
              <li><a href="#">Trang chủ</a></li>
              <li><a href="#">Sản phẩm</a></li>
              <!-- <li class="active">3Column</li> -->
            </ol><!-- /.breadcrumb -->
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.page-name-sec -->




  <section class="shop-contents">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8 pull-right">

            <div class="product-filter">
              <div class="row">
                <div class="col-md-4">
                  <span class="filter-text">Hiện thị sản phẩm</span>
                </div>
              </div>
            </div><!-- /.product-filter -->

            <div class="shop-products">
              <div class="row">
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in text-center" id="grid">
                    <?=$html_dssp_home;?>
                   

                  </div><!-- /.tab-pane -->

                </div><!-- /.tab-content -->
              </div><!-- /.row -->
            </div><!-- /.shop-products -->

            <div class="pagination pagination-02 text-center">
              <a href="#" class="prev"><i class="ti-angle-double-left"></i></a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <!-- <a href="#">4</a>
              <a href="#">5</a> -->
              <a href="#" class="next"><i class="ti-angle-double-right"></i></a>
            </div><!-- /.pagination -->
          </div>

          <div class="col-md-4">
            <aside class="sidebar right-sidebar pull-left">
              <h3 class="widget-title">Sản phẩm theo danh mục <span></span></h3>
              <div class="widget widget_search_by_categories">
                <div class="heading">
                  <h3 class="heading-title">Danh mục</h3><!-- /.heading-title -->
                  <div class="widget-details">
                    <ul class="category-menu">
                      <?=$html_catalog_list?>

                    </ul>
                  </div><!-- /.widget-details -->
                </div><!-- /.heading -->
              </div><!-- /.widget -->

                         

            </aside><!-- /.sidebar -->
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.shop-contents -->
  <?php require_once "footer.php"; ?>