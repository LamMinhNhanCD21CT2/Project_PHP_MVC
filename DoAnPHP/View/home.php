  <?php include "view/slide.php" ?>
  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
        <div class="col-lg-4 text-right mt-4" style="margin-left:370px;">
              <h1 style="color:#6666FF">SẢN PHẨM MỚI RA MẮT</h1>
        </div>
        <div class="col-lg-4 text-right mt-4" style="margin-left:380px;">
              <a href="index.php?action=sanpham">
              <button class="btn btn-primary btn-sm" type="button" style="width:300px;"><span style="color: white;"><h2>Xem chi tiết</h2></span></button>
              </a>
        </div>
    </div><br>
    
      <!--Grid row-->
      <div class="row">
            <?php
                $hh = new hanghoa();
                $result=$hh->getHangHoaNew();// bảng chứa 12 spham
                while($set=$result->fetch()):
            ?>

              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left border border-5 pt-6">

                  <div class="view overlay z-depth-1-half">
                      <img src="Content\imagetourdien\<?php echo $set["hinh"];?>" style="width:300px;height:300px" class="img-fluid pt-4 " alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div><hr>

                  <h4 class="my-4 font-weight-bold" style="color: red;">
                  <?php  echo number_format($set["dongia"]);?> <sup><u>đ</u></sup></br>
                  </h4>
                  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"]?>">
                      <h4><?php echo $set["tenhh"]?></h4></a>
              </div>
         
              <?php
                endwhile;
              ?>
      </div>

      <!--Grid row-->

  </section>
  <!-- end sản phẩm mới nhất -->
  <!-- sản phẩm khuyến mãi -->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
      <div class="col-lg-4 text-right mt-4" style="margin-left:370px;">
              <h1 style="color:#6666FF">SẢN PHẨM KHUYẾN MÃI</h1>
        </div>
        <div class="col-lg-4 text-right mt-4" style="margin-left:380px;">
              <a href="index.php?action=sanpham&act=khuyenmai">
              <button class="btn btn-primary btn-sm" type="button" style="width:300px;"><span style="color: white;"><h2>Xem chi tiết</h2></span></button>
              </a>
        </div></div><hr>
      <!--Grid row-->
      <div class="row">
         <?php
            $result=$hh->getHangHoaSale();// bảng 4 spham
            // duyệt qua 4 spham
            while($set=$result->fetch()):
         ?>

              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left border border-5 pt-6 ">

                  <div class="view overlay z-depth-1-half">
                      <img src="Content\imagetourdien\<?php echo $set["hinh"];?>" style="width:300px;height:300px" class="img-fluid pt-4 " alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div><hr>

                  <h4 class="my-4 font-weight-bold" style="color: red;">
                  <?php  echo number_format($set["dongia"]);?> <sup><u>đ</u></sup></br>
                  </h4>
                  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"]?>">
                      <h4><?php echo $set["tenhh"]?></h4></a>
              </div>
         <?php
            endwhile
        ?>
      </div>

      <!--Grid row-->

  </section>
  <!-- end sản phẩm khuyến mãi -->