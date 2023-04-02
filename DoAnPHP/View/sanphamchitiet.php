<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;

    }
</script>
<section>
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold">CHI TIẾT SẢN PHẨM</h3>
        </div>

    </div>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="index.php?action=giohang" method="post">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->

                    <div class="preview col-md-6">
                        <div class="tab-content">
                           <?php
                            if(isset($_GET["id"]))
                            {
                                $id=$_GET["id"];
                                $hh=new hanghoa();
                                $result=$hh->getHangHoaId($id);
                                $mahh=$result["mahh"];
                                $tenhh=$result["tenhh"];
                                $hinh=$result["hinh"];
                                $dongia=$result["dongia"];
                                $mota = $result["mota"];
                                $nhom=$result["Nhom"];
                            }
                           ?>
                         <div class="tab-pane active" id=""><img src="content/imagetourdien/<?php echo $hinh ?>" alt="" width="300px" height="350px"><hr>
                            </div>
                           
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                        <?php
                            $result = $hh->getHangHoaNhom($nhom);
                            while ($set = $result->fetch()):
                        ?>
                            <li class="active"><a href="#<?php echo $set['hinh']; ?>" 
                            data-toggle="tab">
                                <a href=""><img src="<?php echo 'Content/imagetourdien/' . $set['hinh']; ?>" style="width:100px" alt=""></a>
                            </li>
                        <?php
                            endwhile
                        ?>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $id;?>" />
                        <h1 class="product-title"> <?php echo $tenhh;?> </h1>
                        <div class="rating">
                            <div class="stars"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="product-description">
                            <?php echo $mota ?>
                        </p>
                        <h4 class="price">Giá bán: <?php echo number_format($dongia);?> đ</h4>
                        
                        <h5 class="colors">
                           
                            <input type="hidden" name="size" id="size" value="0" />
                            
                                
                            </br></br>
                            Số Lượng:

                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />


                        </h5>
                        
                        <div class="action">

                            <button class="add-to-cart btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal"><h3>MUA NGAY</h3>
                            </button>

                            </a>
                        </div>
                    </div>     
                </form>
            </div>
        </div>
        <!-- </div> -->
    </article>
</section><hr>
<?php 
    if(isset($_SESSION['makh'])):
?>
<section>
        <div class="col-12">
 
            <div class="row">
                <?php
                    if(isset($_GET['id']))
                    {
                        $mahh=$_GET['id'];
                        $usr=new user();
                        $tong=$usr->getCountHH($mahh);
                    }
                ?>
    <section>
        <div class="col-12">
            <div class="row">                                
                <p class="float-left"><b>BÌnh luận </b></p>
                <hr>
            </div>
            <form action="index.php?action=sanpham&act=comment&id=<?php echo $_GET['id'];?>" method="post">
            <div class="row">
              
                    <input type="hidden" name="txtmahh" value="" />
                    <img src="Content/imagetourdien/people.png" width="50px" height="50px"; />
                    <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
                    <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />
                                
            </div>
            
            </form>
            <div class="row">
                <p class="float-left"><b>Các bình luận</b></p>
                <hr>
            </div>
            <div class="row">
                <?php 
                    $result =$usr->getComment($mahh);
                    while ($set = $result->fetch()):
                ?>
                <div class="col-12">
                    <div class="row">
                        <img src="Content/imagetourdien/people.png" width="50px" height="50px" alt="">
                        <p><?php echo '<b>'.$set['username'].':</b>'.$set['noidung'];?></p><br>
                    </div>
                </div>
               <br/>
               <?php
                endwhile;
               ?>
            </div>

        </div>
    </section>
    <?php
        endif;
    ?>