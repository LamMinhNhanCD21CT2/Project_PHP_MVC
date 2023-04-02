
<!-- quảng cáo -->
<?php
  include "quangcao.php";
  $hh = new hanghoa();
//   $count = $hh->getCountHH();
//  B1: tìm tổng số record
$result=$hh->getHangHoaAll();
$count=$result->rowCount();
// b2
$limit=8;
//b3
$p=new page();
//tổng số trang
$page = $p->findPage($count,$limit);
// lấy start
$start = $p->findStart($limit);
// trang hiện tại
$current_page=isset($_GET['page'])?$_GET['page']:1;
?>
  <!-- -->
  <!-- end quảng cáo -->
  
  
  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->
  <?php 
     if(isset($_GET["act"])=="khuyenmai") 
        { 
        $ac=0;
        }
    if(isset($_GET["act"])=="timkiem") 
        { 
        $ac=2;
        }
        else 
        {
        $ac=1;
        }?>
  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
             <?php 
                if($ac==0)
                {
                    echo '<h4 class="mb-5 font-weight-bold">SẢN PHẨM KHUYẾN MÃI</h4>';
                }
                if($ac==2)
                {
                    echo '<h4 class="mb-5 font-weight-bold">SẢN PHẨM TÌM KIẾM</h4>';
                } 
                else
                {
                    echo '<h4 class="mb-5 font-weight-bold">SẢN PHẨM</h4>';
                }
             ?>
          </div>

      </div>
      <!--Grid row-->
      <div class="row">
      <?php
                $hh= new hanghoa();
                if($ac==1)
                {
                    $result=$hh->getListHangHoaAllPage($start,$limit);
                }
                if($ac==2)
                {
                    if(isset($_POST['txtsearch']))
                    {
                        $tk=$_POST['txtsearch'];
                        $result=$hh->getTimKiem($tk);
                    }
                }
                else
                {
                    $result=$hh->getHangHoaAllSale();
                }
                // $result=$hh->getHangHoaAll();// trả về bảng chứa all
                while($set=$result->fetch()):
            ?>
              <!--Grid column-->
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row justify-content-center mb-3">
      <div class="col-md-12 col-xl-10">
        <div class="card shadow-0 border rounded-3">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                  <img src="Content\imagetourdien\<?php echo $set["hinh"];?>"
                    class="w-100" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6">
                <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"]?>"><span><h3><?php echo $set["tenhh"]?></h3></span></br></a>
                <div class="d-flex flex-row">
                  <div class="text-danger mb-1 me-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>&ensp;
                  <span><h5><?php echo $set["soluotxem"];?></h5></span>
                </div>
                <div class="mt-1 mb-0 text-muted small">
                  <span><h4>Mô hình quận High</h4></span>
                  <span class="text-primary"><h4> • </h4></span>
                  <span><h4>Sản phẩm chất lượng</h4></span>
                  <span class="text-primary"><h4> • </h4></span>
                  <span><h4>Free ship</h4><br /></span>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                <div class="d-flex flex-row align-items-center mb-1">
                  <h4 class="mb-1 me-1"><?php  echo number_format($set["dongia"]);?> <sup><u>đ</u></sup></h4>&emsp;
                <div class="d-flex flex-column mt-4">
                  <button class="btn btn-primary btn-sm" type="button"><a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"]?>" style="color:white;"><h3>Details</h3></a> </button>
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
              <!-- ============================== -->
             
          <?php
            endwhile
          ?>
      </div>

      <!--Grid row-->

  </section>
 
  
  <!-- end sản phẩm mới nhất -->
  
 
  <div class="col-md-6 div col-md-offset-3">
				<ul class="pagination">
                   
					<?php 
                     if($current_page>1&& $page>1){
                        echo ' <li ><a href="index.php?action=sanpham&page='.($current_page-1).'">Trang trước đó</a></li>' ;
                    }
                        for($i=1;$i<=$page;$i++)
                        {
                    ?>
				    <li ><a href="index.php?action=sanpham&page=<?php echo $i ?>"><?php echo $i ?></a></li>
				   <?php 
                        }
                   ?>
				</ul>
</div>