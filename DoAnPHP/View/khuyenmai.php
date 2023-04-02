  <!-- quảng cáo -->
  <?php
  include "quangcao.php";
  ?>
  <!-- end quảng cáo -->
  
  
  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->
 

  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
             <h1>Khuyến mãi</h1>
          </div>

      </div>
      <!--Grid row-->
      <div class="row">
            <?php
                $hh= new hanghoa();
                $result=$hh->getHangHoaAllSale();// trả về bảng chứa all
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
            endwhile
          ?>
      </div>

      <!--Grid row-->

  </section>
 
  
  <!-- end sản phẩm mới nhất -->
  
 
  <div class="col-md-6 div col-md-offset-3">
				<ul class="pagination">
					
				    <li ><a href=""></a></li>
				   
				</ul>
</div>