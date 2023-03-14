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
						<li><a  href="">Sản phẩm</a>
						</li>
                        <li><a  href="">Giỏ hàng</a></li>
						<li><a class="a1" href="">Liên hệ</a></li>
                        <li><a class="a1" href="dangnhap.php">Đăng nhập</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header_search">
	   		<input type="text" name="" id="" class="header_search-input" placeholder="Nhập tên sản phẩm cần tìm kiếm">
	   		<input class="timkiem" type="submit" value="Tìm kiếm" name="" id="">
		</div>  
	</header>

<!-- máy tính bảng -->
<?php
$sql4 = "SELECT * FROM mobile where noibat like 'Nổi bật'";


$result = $conn->query($sql4);
if($result->num_rows >0){
    while ($row4 = $result->fetch_assoc()){ //fetch_assoc là lấy ra số hàng
        $data4[] = $row4;


    }
}

?>
<!-- máy tính bảng -->
<?php
    $sql1 = "SELECT * FROM mobile where loai like 'Máy tính bảng'";


    $result = $conn->query($sql1);
    if($result->num_rows >0){
        while ($row1 = $result->fetch_assoc()){ //fetch_assoc là lấy ra số hàng
            $data1[] = $row1;


        }
    }

?>
<!-- điện thoại -->
<?php
    $sql2 = "SELECT * FROM mobile where loai like 'Điện thoại'";


    $result = $conn->query($sql2);
    if($result->num_rows >0){
        while ($row2 = $result->fetch_assoc()){ //fetch_assoc là lấy ra số hàng
            $data2[] = $row2;


        }
    }

?>
<!-- đồng hồ -->
<?php
    $sql3 = "SELECT * FROM mobile where loai like 'Đồng hồ'";


    $result = $conn->query($sql3);
    if($result->num_rows >0){
        while ($row3 = $result->fetch_assoc()){ //fetch_assoc là lấy ra số hàng
            $data3[] = $row3;


        }
    }

?>

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
        <div class="mobile_category">
            <div class="mobile_category_title">
                Sản phẩm
            </div>
            <ul class="mobile_category_detail row nav" role="tablist">
                <li class="mobile_category_detail_in col-3  ">
                    <a class="active nav-item"  data-toggle="tab" href="#noibat" role="tab">
                        <div class="mobile_category_detail_in_icon ">
                            <i class="fas fa-award"></i>
                        </div>

                        <p>Sản phẩm nổi bật</p>
                    </a>

                </li>
                <li class="mobile_category_detail_in col-3 ">
                    <a class="nav-item" data-toggle="tab" href="#dienthoai" role="tab">
                        <div class="mobile_category_detail_in_icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>

                        <p>Điện thoại</p>
                    </a>

                </li>
                <li class="mobile_category_detail_in col-3 ">
                    <a class="nav-item" data-toggle="tab" href="#maytinhbang" role="tab">
                        <div class="mobile_category_detail_in_icon">
                            <i class="fas fa-tablet-alt"></i>
                        </div>

                        <p>Máy tính bảng</p>
                    </a>

                </li>
                <li class="mobile_category_detail_in col-3 ">
                    <a class="nav-item"  data-toggle="tab" href="#dongho" role="tab">
                        <div class="mobile_category_detail_in_icon">
                            <i class="fas fa-clock"></i>
                        </div>

                        <p>Đồng hồ</p>
                    </a>

                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="mobile_product  tab-pane  fade show active" id="noibat" role="tabpanel">
                <div class="mobile_product_detail row">
                    <?php foreach ($data4 as $post4) : ?>
                    <div class="mobile_product_detail_in mobile_product_detail_in_gen col-4" >
                        <a href="hiep_detail_mobile.php?id=<?php echo $post4["stt"]?>" style="margin: auto">
                            <div class="mobile_product_detail_in_content">
                                <div class="mobile_product_detail_in_img">
                                    <img src="img/<?php echo $post4["anh"] ?>" alt="">
                                </div>
                                <div class="mobile_product_detail_in1">

                                    <div class="mobile_product_detail_in_name">
                                        <?php echo $post4["ten"] ?>
                                    </div>
                                    <div class="mobile_product_detail_in_gb">
                                        <span><?php echo $post4["bonhotrong"] ?></span>

                                    </div>
                                    <div class="mobile_product_detail_in_price">
                                        <?php echo number_format($post4["gia"])  ?> ₫
                                    </div>
                                    <div class="mobile_product_detail_in_cate">
                                        <span> <i class="fas fa-server"></i> <?php echo $post4["cpu"] ?></span>
                                        <span> <i class="fas fa-mobile-alt"></i> <?php echo $post4["camera"] ?></span>
                                        <span> <i class="fas fa-microchip"></i><?php echo $post4["hedieuhanh"] ?></span>
                                        <span> <i class="fas fa-hdd"></i> <?php echo $post4["bonhotrong"] ?></span>


                                    </div>

                                    <div class="mobile_product_detail_in_buy">
                                        Mua ngay
                                    </div>

                                </div>
                            </div>

                        </a>


                    </div>
                    <?php endforeach; ?>


                </div>
                <div  class="seeMore seeMore1">
                    Xem thêm
                </div>

            </div>
            <div class="mobile_product  tab-pane  fade " id="dienthoai" role="tabpanel">
                <div class="mobile_product_detail row">
                    <?php foreach ($data2 as $post2) : ?>
                    <div class="mobile_product_detail_in mobile_product_detail_in_dienthoai col-4" >
                        <a href="hiep_detail_mobile.php?id=<?php echo $post2["stt"]?>" style="margin: auto">
                            <div class="mobile_product_detail_in_content">
                                <div class="mobile_product_detail_in_img">
                                    <img src="img/<?php echo $post2["anh"] ?>" alt="">
                                </div>
                                <div class="mobile_product_detail_in1">

                                    <div class="mobile_product_detail_in_name">
                                        <?php echo $post2["ten"] ?>
                                    </div>
                                    <div class="mobile_product_detail_in_gb">
                                        <span><?php echo $post2["bonhotrong"] ?></span>

                                    </div>
                                    <div class="mobile_product_detail_in_price">
                                        <?php echo number_format($post2["gia"]) ?> ₫
                                    </div>
                                    <div class="mobile_product_detail_in_cate">
                                        <span> <i class="fas fa-server"></i> <?php echo $post2["cpu"] ?></span>
                                        <span> <i class="fas fa-mobile-alt"></i> <?php echo $post2["camera"] ?></span>
                                        <span> <i class="fas fa-microchip"></i><?php echo $post2["hedieuhanh"] ?></span>
                                        <span> <i class="fas fa-hdd"></i> <?php echo $post2["bonhotrong"] ?></span>



                                    </div>

                                    <div class="mobile_product_detail_in_buy">
                                        Mua ngay
                                    </div>

                                </div>
                            </div>

                        </a>


                    </div>
                    <?php endforeach; ?>
                </div>
                <div  class="seeMore seeMore2">
                    Xem thêm
                </div>

            </div>
            <div class="mobile_product  tab-pane  fade " id="maytinhbang" role="tabpanel">
                <div class="mobile_product_detail row">
                    <?php foreach ($data1 as $post1) : ?>
                    <div class="mobile_product_detail_in mobile_product_detail_in_maytinhbang col-4" >
                        <a href="hiep_detail_mobile.php?id=<?php echo $post1["stt"]?>" style="margin: auto">
                            <div class="mobile_product_detail_in_content">
                                <div class="mobile_product_detail_in_img">
                                    <img src="img/<?php echo $post1["anh"] ?>" alt="">
                                </div>
                                <div class="mobile_product_detail_in1">

                                    <div class="mobile_product_detail_in_name">
                                        <?php echo $post1["ten"] ?>
                                    </div>
                                    <div class="mobile_product_detail_in_gb">
                                        <span><?php echo $post1["bonhotrong"] ?></span>
                                    </div>
                                    <div class="mobile_product_detail_in_price">
                                        <?php echo number_format($post1["gia"]) ?> ₫
                                    </div>
                                    <div class="mobile_product_detail_in_cate">
                                        <span> <i class="fas fa-server"></i> <?php echo $post1["cpu"] ?></span>
                                        <span> <i class="fas fa-mobile-alt"></i> <?php echo $post1["camera"] ?></span>
                                        <span> <i class="fas fa-microchip"></i><?php echo $post1["hedieuhanh"] ?></span>
                                        <span> <i class="fas fa-hdd"></i> <?php echo $post1["bonhotrong"] ?></span>


                                    </div>

                                    <div class="mobile_product_detail_in_buy">
                                        Mua ngay
                                    </div>

                                </div>
                            </div>

                        </a>


                    </div>
                    <?php endforeach; ?>

                </div>
                <div  class="seeMore seeMore3">
                    Xem thêm
                </div>

            </div>
            <div class="mobile_product  tab-pane  fade " id="dongho" role="tabpanel">
                <div class="mobile_product_detail  row">
                    <?php foreach ($data3 as $post3) : ?>
                    <div class="mobile_product_detail_in mobile_product_detail_in_dongho col-4" >
                        <a href="hiep_detail_mobile.php?id=<?php echo $post3["stt"]?>" style="margin: auto">
                            <div class="mobile_product_detail_in_content">
                                <div class="mobile_product_detail_in_img">
                                    <img src="img/<?php echo $post3["anh"] ?>" alt="">
                                </div>
                                <div class="mobile_product_detail_in1">

                                    <div class="mobile_product_detail_in_name">
                                        <?php echo $post3["ten"] ?>
                                    </div>
                                    <div class="mobile_product_detail_in_gb">
                                        <span>  <?php echo $post3["bonhotrong"] ?></span>

                                    </div>
                                    <div class="mobile_product_detail_in_price">
                                        <?php echo $post3["gia"] ?> ₫
                                    </div>
                                    <div class="mobile_product_detail_in_cate">
                                        <span> <i class="fas fa-server"></i> <?php echo $post3["cpu"] ?></span>
                                        <span> <i class="fas fa-mobile-alt"></i> <?php echo $post3["camera"] ?></span>
                                        <span> <i class="fas fa-microchip"></i><?php echo $post3["hedieuhanh"] ?></span>
                                        <span> <i class="fas fa-hdd"></i> <?php echo $post3["bonhotrong"] ?></span>


                                    </div>

                                    <div class="mobile_product_detail_in_buy">
                                        Mua ngay
                                    </div>

                                </div>
                            </div>

                        </a>


                    </div>

                    <?php endforeach; ?>



                </div>
                <div  class="seeMore seeMore4">
                    Xem thêm
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