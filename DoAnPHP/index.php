  <?php
    session_start();
    // include "Model/connect.php";
    // include "Model/hanghoa.php";
    // include "Model/giohang.php";
    // include "Model/user.php";
    // include "Model/hoadon.php";
    // include "Model/page.php";
    // include "sendemailphpmailer/class/class.phpmailer.php";
    include "Model/class.phpmailer.php";
    set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
    spl_autoload_extensions('.php');
    spl_autoload_register();

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- link icon cua boostrap4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- link logo  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- link đăng nhập -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- end link đăng nhập -->
    <link rel="stylesheet" type="text/css" href="/demophp/Content/CSS/Tour.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <title>Freedman</title>
    <link rel = "icon" href ="https://images.hdqwalls.com/download/naruto-logo-anime-8k-qz-1680x1050.jpg" type = "image/x-icon">
</head>

<body>
    
      <!-- header -->
      <?php
        include "view/headder.php"
      ?>
      <!-- hiên thi noi dung -->
      <div class="container">
          <div class="row">
              <!-- hien thi noi dung đây -->
              <?php
                $ctrl="home";
                if(isset($_GET["action"]))
                {
                  $ctrl=$_GET["action"];
                }
                include "Controller/".$ctrl.".php";
              ?>
          </div>
      </div>
    <!-- hiên thị footer -->
    <?php
        include "view/footer.php"
      ?>
</body>

</html>