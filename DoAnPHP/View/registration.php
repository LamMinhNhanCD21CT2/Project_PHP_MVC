
<!-- ================================== -->
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>

<div class="signup-form">
    <form action="index.php?action=dangky&act=dangky_action" method="post">
		<h2>Đăng ký</h2>
		<p class="hint-text">Đăng lý tài khoản mới tại đây</p>
        <div class="row"> 
     <div class="col-xs-4 col-md-4"> <label for="email">Tên Khách Hàng:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txttenkh" placeholder="Tên khách hàng" required="" autofocus="" type="text"> </div> 
     <div class="col-xs-4 col-md-4"> <label for="email">Địa chỉ:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtdiachi" placeholder="Địa chỉ khách hàng" required="" autofocus="" type="text"> </div> 
     <div class="col-xs-4 col-md-4"> <label for="email">Số Điện Thoại:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtsodt" placeholder="Số điện thoại khách hàng" required="" autofocus="" type="text"> </div> 
     <div class="col-xs-4 col-md-4"><label for="email">Tên Đăng Nhập:</label>
     </div> 
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtusername" placeholder="Tên đăng nhập" required="" type="text"> 
     </div> 
    </div><label for="email">Email:</label> <input class="form-control" name="txtemail" placeholder="Email" type="email">
     <input class="form-control" name="txtpass" placeholder="Mật khẩu" type="password">
      <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Đăng ký ngay</button>
        </div>
    </form>
	<div class="text-center">Bạn đã có tài khoản? <a href="index.php?action=dangnhap">Đăng nhập</a></div>
</div>