<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mobile_hiep';
$conn = new mysqli($servername,$username,$password,$dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mobile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <!--    bootstrap-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mobile.css">

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
<div class="content" style="background-color: #f8f9fa">
    <div class="container" >

        <div class="mobile_banner swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" >
                    <img src="img/banner1.jpeg" alt="">
                </div>
                <div class="swiper-slide" >
                    <img src="img/banner2.jpeg" alt="">
                </div>
                <div class="swiper-slide" >
                    <img src="img/banner3.jpeg" alt="">
                </div>
                <div class="swiper-slide" >
                    <img src="img/banner4.jpeg" alt="">
                </div>



            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div>
            <?php
            if(isset($_GET["id"])){
                $id = $_GET["id"];
                $sql = "SELECT * FROM mobile WHERE stt='$id'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
            }
            ?>


            <div class="part2" >


                <div class="container">
                    <br>
                    <div class="mobile_detail_name">
                        <h1><?php if(isset($row['ten'])){ echo $row['ten']; }else{ echo ""; } ?></h1>
                    </div>
                    <hr>
                    <div style="display: flex;">
                        <div class="mobile_detail_out">
                            <div class="mobile_detail_in">
                                <img src="img/<?php if(isset($row['anh'])){ echo $row['anh']; }else{ echo ""; } ?>" style="" alt="">
                            </div>

                        </div>

                        <div class="mobile_detail_right" style="padding: 20px;flex-basis: 40%;">
                        
                            <h2><?php if(isset($row['gia'])){ echo number_format($row['gia']) ; }else{ echo ""; } ?> đ</h2>
                            <div class="mobile_detail_right_thongso">
                                <p> Thông số kỹ thuật</p>
                                <table class="table " id="myTable">
                                    <tbody>
                                    <tr style="background-color: #f3f4f7;">
                                        <th scope="row">Loại</th>
                                        <td><?php if(isset($row['loai'])){ echo $row['loai']; }else{ echo ""; } ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Bộ nhớ trong</th>
                                        <td><?php if(isset($row['bonhotrong'])){ echo $row['bonhotrong']; }else{ echo ""; } ?></td>
                                    </tr>
                                    <tr style="background-color: #f3f4f7;">
                                        <th scope="row">Camera</th>
                                        <td><?php if(isset($row['camera'])){ echo $row['camera']; }else{ echo ""; } ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CPU</th>
                                        <td><?php if(isset($row['cpu'])){ echo $row['cpu']; }else{ echo ""; } ?></td>
                                    </tr>
                                    <tr style="background-color: #f3f4f7;">
                                        <th scope="row">Hệ điều hành</th>
                                        <td><?php if(isset($row['hedieuhanh'])){ echo $row['hedieuhanh']; }else{ echo ""; } ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Xuất xứ</th>
                                        <td><?php if(isset($row['xuatxu'])){ echo $row['xuatxu']; }else{ echo ""; } ?></td>
                                    </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>




                </div>

            </div>
        </div>
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
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper-animation@1/build/SwiperAnimation.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/tumult/hype-runtime/HYPE-648.thin.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
<script src="mobile.js"></script>
</body>
</html>