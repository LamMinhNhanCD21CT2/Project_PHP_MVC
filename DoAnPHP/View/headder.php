<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid justify-content-between">
    <!-- Left elements -->
    <div class="d-flex">
      <!-- Brand -->
      <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="/DoAnPHP/index.php">
        <img src="./Content/imagetourdien/logolangla.jpg" alt=""
        style="height:35px">
        <h4 style="margin-top:4px;">Freedman Store</h4>
      </a>
      <!-- Search form -->
      <form class="input-group w-auto my-auto d-none d-sm-flex" action="index.php?action=sanpham&act=timkiem" method="post">
        <input
          autocomplete="off"
          type="text"
          name="txtsearch"
          class="form-control rounded"
          placeholder="Tìm kiếm sản phẩm"
          style="min-width: 325px;"
        />
        <span class="input-group-text border-0 d-none d-lg-flex">
            <i class="fas fa-search"  type="submit" id="btsearch" value="Tìm Kiếm"></i>
        </span>
      </form>
    </div>
    <!-- Left elements -->

    <!-- Center elements -->
    <ul class="navbar-nav flex-row">
      <li class="nav-item">
        <a href="index.php?action=dangky" class="nav-link"><h5>Đăng Ký /</h5></a>
      </li>

      <li class="nav-item">
        <?php
            if(!isset($_SESSION['makh']))
                {   
                    echo '<a href="index.php?action=dangnhap" class="nav-link"><h5>Đăng nhập</h5></a>';
                }
        ?>
      </li>

      <li class="nav-item">
        <a href="index.php?action=dangnhap&act=logout" class="nav-link"><h5>Đăng Xuất</h5></a>
        
      </li>
    </ul>
    <!-- Center elements -->

    <!-- Right elements -->
    <ul class="navbar-nav flex-row d-none d-md-flex">
      <li class="nav-item me-3 me-lg-1 active">
        <a class="nav-link" href="/DoAnPHP/index.php">
          <span><i class="fas fa-home fa-lg">-Trang chủ</i></span>
        </a>
      </li>

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="Admin2">
          <span><i class="fas fa-users fa-lg">-Admin</i></span>
        </a>
      </li>

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="index.php?action=giohang">
          <span><i class="fas fa-shopping-bag fa-lg"></i></span>
        </a>
      </li>
      <li>
        <?php
            $dem=0;
            if(isset($_SESSION['cart']))
            {
                $dem = count($_SESSION['cart']);
            }
            else{
                $dem=0;
            }
        ?>
        <p style="color: red; margin-top: 20px; margin-left: 0px;">(<?php echo $dem;?>)&emsp;-&emsp;</p>
      </li>
      <li>
        <?php
            if(isset($_SESSION['makh']) && isset($_SESSION['tenkh'])):
            
                $name=$_SESSION['tenkh'];     
        ?>
            <p style="color: red; margin-top: 20px; margin-left: 0px;"><?php echo "Xin chào ".$name;?></p>
        <?php
            else:
                echo '<p style="color: red; margin-top: 20px; margin-left: 0px;">'."Xin chào!".'</p>';

        ?>
        <?php
            endif;
        ?>
      </li>
    </ul>
    <!-- Right elements -->
  </div>
</nav>


