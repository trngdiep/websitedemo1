<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'connection.php';

if (isset($_POST['login'])) {

    $username   = isset($_POST['username']) ? mysqli_escape_string($db, $_POST['username']) : '';
    $passwd     = isset($_POST['passwd']) ? md5($_POST['passwd']) : '';

    $checkUser = "SELECT * FROM user WHERE username = '$username'";
    $resCheckUser = mysqli_query($db, $checkUser);

    if (!(mysqli_num_rows($resCheckUser) > 0)) {
        echo '<script language="javascript">alert("Người dùng không tồn tại!!!"); window.location="dangnhap.php";</script>';
        die();
    } else {
        $login = "SELECT * FROM user WHERE username = '$username' AND password = '$passwd'";
        $res = mysqli_query($db, $login);

        if (mysqli_num_rows($res) > 0) {
            echo '<script language="javascript">alert("Đăng nhập thành công"); window.location="trangchu.php";</script>';
        } else {
            echo '<script language="javascript">alert("Sai tên đăng nhập hoặc mật khẩu"); window.location="dangnhap.php";</script>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dangnhap.css">
</head>
<body>
    <header class="stiky-top">
		<div class="container">
			<div class="row">
				<div class="col-2 menu" >
					<h1 class='txtdeepshadow'>ĐH4 SHOP</h1>
				</div>
				<div class="col-2">
				</div>
				<div class="col-8 menu">
					<ul>
						<li><a href="trangchu.php">Trang chủ</a></li>
						<li><a href="mobile.php">Sản phẩm</a>
						</li>
                        <li><a href="">Giỏ hàng</a></li>
						<li><a href="">Liên hệ</a></li>
                        <li><a href="dangnhap.php">Đăng nhập</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header_search">
	   		<input type="text" name="" id="" class="header_search-input" placeholder="Nhập tên sản phẩm cần tìm kiếm">
	   		<input class="timkiem" type="submit" value="Tìm kiếm" name="" id="">
		</div>  
	</header>
    <div class="container_1">
	<div class="title">Login</div>
        <div class="content">
            <form action="" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="passwd" placeholder="Enter your password" required>
                    </div>
                </div>
				<div style="padding-left: 500px; ">
					<span>create an account  <a style="font-size: 17px;" href="register.php"><u>here</u></a></span>	
				</div>
                <div class="button">
                    <input type="submit" name="login" value="Login">
                </div>
            </form>
        </div>
    </div>
	<script src="dangnhap.js"></script>
    <div class="mobile_service row">
		<div class="col-3">
			<div class="mobile_service_in" style="margin: auto">
				<div class="mobile_service_in_img" style="margin: auto">
					<img src="img/thuonghieu.png" alt="" >
				</div>
				<p style="text-align: center">Thương hiệu đảm bảo</p>
			</div>
		</div>
		<div class="col-3">
			<div class="mobile_service_in" style="margin: auto">
				<div class="mobile_service_in_img" style="margin: auto">
					<img src="img/doitra.png" alt="" >
				</div>
				<p style="text-align: center">Đổi trả dễ dàng</p>
			</div>

		</div>
		<div class="col-3">
			<div class="mobile_service_in" style="margin: auto">
				<div class="mobile_service_in_img" style="margin: auto">
					<img src="img/giaohang.png" alt="" >
				</div>
				<p style="text-align: center">Giao hàng tận nơi</p>
			</div>
		</div>
		<div class="col-3">
			<div class="mobile_service_in" >
				<div class="mobile_service_in_img" style="margin: auto">
					<img src="img/sanpham.png" alt="" >
				</div>
				<p style="text-align: center">Sản phẩm chất lượng</p>
			</div>
		</div>
	</div>
</div>
</body>

</html>