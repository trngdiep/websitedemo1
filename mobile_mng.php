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
    <title>Quản lý</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css">
    <style>
        *{
            box-sizing: inherit;
        }

        html{

            line-height: 1.6rem;
            font-family: 'Roboto', sans-serif;
            box-sizing: border-box;
        }

        .nav-list{
            display: flex;
            justify-content: space-between;
            width: 100%;
            height: 80px;
            background: white;
        }
        .nav-list-left{
            display: flex;

        }
        .nav-list-left-logo{
            width: 250px;
            height: 200px;
            margin: 5px;
            margin-left: 80px;
        }
        .nav-list-left-logo a img{
            width: 100%;
        }
        .nav-list-left-partner{

            transition: all 0.3s;
        }
        .nav-list-left-partner a{

            padding: 10px 20px;
            border: 1px solid lightgrey;
            color: lightgrey   ;

            border-radius: 10px;
            transition: all 0.3s;
            font-weight: 500;
        }
        .nav-list-left-partner :hover{
            text-decoration: none;
            background-color: darkorange;
            color: white;

        }
        /*right*/
        .nav-list-right{
            display: flex;
            color: black;
            margin-right: 80px;
            font-size: 18px;
        }
        .nav-list-right-1{
            display: flex;
            padding: 30px 10px;
            list-style-type: none;

        }
        .nav-list-right-1 li {
            padding-right: 15px;
            color: black;

        }
        .nav-list-right-1 li a:hover{

            text-decoration: none;


        }
        .nav-list-right-1 select {
            border: none;

        }
        .nav-list-right-1-log-in{
            margin-top: -7px;


        }

        .nav-list-right-1-log-in a{

            border: 1px solid lightseagreen;
            color: white;
            border-radius: 10px;
            background-color: lightseagreen;
        }
        .nav-list-right-1-log-in a:hover{
            background-color: white;
            color: lightseagreen;
        }



        /*end*/
        .end{
            background-color: black;

        }
        .over{
            display: flex;
            justify-content: space-between;
            color: #dd8500;
            padding: 20px;
        }


        /*nearfirst*/


        .near_head{
            display: flex;
            justify-content: space-between;
            color: white;
            font-size: 15px;
            padding: 10px 5px 0px 0px;
        }
        .near_first{
            list-style: none;
            text-decoration: none
        }
        .near_first_item{
            margin: 5px 10px 0 10px;
            display: inline-block;

            text-decoration: none;
        }
        .near_first_item a {
            color: white;
            text-decoration: none;
        }
        .near_first_item a:hover{
            color: darkorange;
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php
if(isset($_POST["create"])){
    $id = $_POST["stt"];
    $name = $_POST["ten"];
    $quantity = $_POST["loai"];
    $price = $_POST["gia"];
    $img = $_POST["anh"];
    $note = $_POST["ghichu"];
    $cpu = $_POST["cpu"];
    $bonhotrong = $_POST["bonhotrong"];
    $xuatxu = $_POST["xuatxu"];
    $camera = $_POST["camera"];
    $hedieuhanh = $_POST["hedieuhanh"];
    $noibat = $_POST["noibat"];

    $sql = "INSERT INTO mobile (stt,ten,loai,gia,anh,ghichu,cpu,bonhotrong,xuatxu,camera,hedieuhanh,noibat) VALUES ('$id','$name','$quantity','$price','$img','$note','$cpu','$bonhotrong','$xuatxu','$camera','$hedieuhanh','$noibat')";
    $conn->query($sql);
//        header('location: tiembanh_mng.php');
}
?>

<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM mobile WHERE stt='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>
<?php
if (isset($_GET["id"])){
    if(isset($_POST["edit"])){
        $id = $_POST["stt"];
        $name = $_POST["ten"];
        $quantity = $_POST["loai"];
        $price = $_POST["gia"];
        $img = $_POST["anh"];
        $note = $_POST["ghichu"];

        $cpu = $_POST["cpu"];
        $bonhotrong = $_POST["bonhotrong"];
        $xuatxu = $_POST["xuatxu"];
        $camera = $_POST["camera"];
        $hedieuhanh = $_POST["hedieuhanh"];
        $noibat = $_POST["noibat"];
        $sql = "Update mobile SET  ten = '$name', loai = '$quantity', gia = '$price', anh = '$img', ghichu = '$note', bonhotrong = '$bonhotrong', cpu = '$cpu', camera = '$camera', xuatxu = '$xuatxu', hedieuhanh = '$hedieuhanh', noibat = '$noibat' where stt=".$_GET["id"] ;
        $result = $conn->query($sql);
//                header('location: tiembanh_mng.php');

    }
}

?>
<?php

if(isset($_GET["id"])){
    if(isset($_POST["delete"])){
        $sql = "DELETE FROM mobile where stt = ".$_GET["id"];
        $result =$conn->query($sql);
//            header('location: tiembanh_mng.php');
    }
}
?>


<div class="content"  style="background-color: whitesmoke;">
    <div class="container" >

        <form style="padding-top: 50px" action="" method="post">
            <fieldset class="form-group">
                <legend><h2 style="text-align: center;color: #151515" ></i> Quản lý bán hàng</h2></legend>
                <br>
                <div class="form-group col-md-6">
                    <input type="text" hidden class="form-control" id="inputEmail4" placeholder="Name" name="stt" value="<?php if(isset($row['stt'])){ echo $row['stt']; }else{ echo ""; } ?>" >
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" style="font-weight: 600">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="ten" value="<?php if(isset($row['ten'])){ echo $row['ten']; }else{ echo ""; } ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1" style="font-weight: 600">Loại</label>
                        <select name="loai" class="form-control" id="exampleFormControlSelect1" >
                            <?php if(isset($row['loai'])) : ?>
                                <option id="none" value="<?php echo $row['loai']; ?>"><?php echo $row['loai']; ?></option>
                            <?php endif; ?>


                            <?php if($row['loai'] == "Máy tính bảng") : ?>
                                <option value="Máy tính bảng" style="display:none;">Máy tính bảng</option>
                            <?php else: ?>
                                <option value="Máy tính bảng">Máy tính bảng</option>
                            <?php endif; ?>

                            <?php if($row['loai'] == "Điện thoại") : ?>
                                <option value="Điện thoại" style="display:none;"> Điện thoại</option>
                            <?php else: ?>
                                <option value="Điện thoại">Điện thoại</option>
                            <?php endif; ?>

                            <?php if($row['loai'] == "Đồng hồ") : ?>
                                <option value="Đồng hồ" style="display:none;"> Đồng hồ</option>
                            <?php else: ?>
                                <option value="Đồng hồ">Đồng hồ</option>
                            <?php endif; ?>



                        </select>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4" style="font-weight: 600">Xuất xứ</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Xuất xứ" name="xuatxu" value="<?php if(isset($row['xuatxu'])){ echo $row['xuatxu']; }else{ echo ""; } ?>" required>
                    </div>


                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4" style="font-weight: 600">CPU</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="A14 Bionic..." name="cpu" value="<?php if(isset($row['cpu'])){ echo $row['cpu']; }else{ echo ""; } ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1" style="font-weight: 600">Bộ nhớ trong</label>
                        <select name="bonhotrong" class="form-control" id="exampleFormControlSelect1" >
                            <?php if(isset($row['bonhotrong'])) : ?>
                                <option id="none" value="<?php echo $row['bonhotrong']; ?>"><?php echo $row['bonhotrong']; ?></option>
                            <?php endif; ?>


                            <?php if($row['bonhotrong'] == "32GB") : ?>
                                <option value="32GB" style="display:none;">32GB</option>
                            <?php else: ?>
                                <option value="32GB">32GB</option>
                            <?php endif; ?>

                            <?php if($row['bonhotrong'] == "64GB") : ?>
                                <option value="64GB" style="display:none;"> 64GB</option>
                            <?php else: ?>
                                <option value="64GB">64GB</option>
                            <?php endif; ?>

                            <?php if($row['bonhotrong'] == "128GB") : ?>
                                <option value="128GB" style="display:none;"> 128GB</option>
                            <?php else: ?>
                                <option value="128GB">128GB</option>
                            <?php endif; ?>
                            <?php if($row['bonhotrong'] == "256GB") : ?>
                                <option value="256GB" style="display:none;"> 256GB</option>
                            <?php else: ?>
                                <option value="256GB">256GB</option>
                            <?php endif; ?>



                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1" style="font-weight: 600">Nổi bật</label>
                        <select name="noibat" class="form-control" id="exampleFormControlSelect1" >
                            <?php if(isset($row['noibat'])) : ?>
                                <option id="none" value="<?php echo $row['noibat']; ?>"><?php echo $row['noibat']; ?></option>
                            <?php endif; ?>


                            <?php if($row['noibat'] == "Không nổi bật") : ?>
                                <option value="Không nổi bật" style="display:none;">Không nổi bật</option>
                            <?php else: ?>
                                <option value="Không nổi bật">Không nổi bật</option>
                            <?php endif; ?>

                            <?php if($row['noibat'] == "Nổi bật") : ?>
                                <option value="Nổi bật" style="display:none;"> Nổi bật</option>
                            <?php else: ?>
                                <option value="Nổi bật">Nổi bật</option>
                            <?php endif; ?>




                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1" style="font-weight: 600">Camera</label>
                        <select name="camera" class="form-control" id="exampleFormControlSelect1" >
                            <?php if(isset($row['camera'])) : ?>
                                <option id="none" value="<?php echo $row['camera']; ?>"><?php echo $row['camera']; ?></option>
                            <?php endif; ?>


                            <?php if($row['camera'] == "12.0 MP") : ?>
                                <option value="12.0 MP" style="display:none;">12.0 MP</option>
                            <?php else: ?>
                                <option value="12.0 MP">12.0 MP</option>
                            <?php endif; ?>

                            <?php if($row['camera'] == "13.0 MP") : ?>
                                <option value="13.0 MP" style="display:none;"> 13.0 MP</option>
                            <?php else: ?>
                                <option value="13.0 MP">13.0 MP</option>
                            <?php endif; ?>

                            <?php if($row['camera'] == "12.0 MP") : ?>
                                <option value="14.0 MP" style="display:none;"> 14.0 MP</option>
                            <?php else: ?>
                                <option value="14.0 MP">14.0 MP</option>
                            <?php endif; ?>
                            <?php if($row['camera'] == "15.0 MP") : ?>
                                <option value="15.0 MP" style="display:none;"> 15.0 MP</option>
                            <?php else: ?>
                                <option value="15.0 MP">15.0 MP</option>
                            <?php endif; ?>



                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1" style="font-weight: 600">Hệ diều hành</label>
                        <select name="hedieuhanh" class="form-control" id="exampleFormControlSelect1" >
                            <?php if(isset($row['hedieuhanh'])) : ?>
                                <option id="none" value="<?php echo $row['hedieuhanh']; ?>"><?php echo $row['hedieuhanh']; ?></option>
                            <?php endif; ?>


                            <?php if($row['hedieuhanh'] == "IOS") : ?>
                                <option value="IOS" style="display:none;">IOS</option>
                            <?php else: ?>
                                <option value="IOS">IOS</option>
                            <?php endif; ?>

                            <?php if($row['hedieuhanh'] == "Android") : ?>
                                <option value="Android" style="display:none;"> Android</option>
                            <?php else: ?>
                                <option value="Android">Android</option>
                            <?php endif; ?>



                        </select>
                    </div>

                </div>
                <div class="form-row">

                    <label for="inputPrice" style="font-weight: 600">Giá</label>
                    <input type="number" class="form-control" id="inputPrice" placeholder="Price" name="gia" value="<?php if(isset($row['gia'])){ echo $row['gia']; }else{ echo ""; } ?>">


                </div>

                <br>
                <div class="form-group">
                    <label for="customFile" style="font-weight: 600">Ảnh</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="anh">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress2" style="font-weight: 600">Ghi chú</label><br>
                    <textarea name="ghichu"  id="inputAddress2" placeholder="Something..." cols="155" rows="6" style="border: 1px solid lightgrey; padding: 10px"><?php if(isset($row['ghichu'])){ echo $row['ghichu']; }else{ echo ""; } ?></textarea>
                </div>


                <button type="submit" class="btn btn-primary" name="create" style="margin-right: 10px">Thêm </button>
                <button type="submit" class="btn btn-primary" name="edit"  style="margin-right: 10px">Sửa</button>
                <button type="submit" class="btn btn-primary" name="delete"  style="margin-right: 10px">Xoá</button>
            </fieldset>
        </form>
        <div>
            <form action="" method="GET">
                <form action="" method="GET">
                    <div class="form-group">
                        <div class="form-group" style="display: flex">
                            <label style="font-weight: 600;font-size: 30px; margin-top: 5px">Search</label>
                            <input type="text" class="form-control" id="myInput"  placeholder="Nhập tên sản phẩm..." name="search" style="height: 40px; margin: 5px 5px 0 10px">
                            <button type="submit" class="btn btn-primary" style=" height:50px" >Search</button>
                        </div>

                    </div>
                </form>
                <table class="table " id="myTable">
                    <thead class="thead-light">
                    <tr >
                        <th scope="col">STT</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Loại</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Ghi chú</th>

                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <?php
                    $query = "SELECT * FROM mobile";
                    if( isset($_GET['search']) ){
                        $name =$_GET['search'];
                        $query = "SELECT * FROM mobile WHERE ten like '%$name%'";
                    }

                    $result = mysqli_query($conn,$query);
                    if($result->num_rows >0){
                        while ($row = $result->fetch_assoc()){ 
                            $data[] = $row;
                        }
                    }
                    ?>
                    <?php foreach ($data as $post) : ?>
                    <tbody>
                    <tr>
                        <th scope="row"><?php echo $post["stt"] ?></th>
                        <td><?php echo $post["ten"] ?></td>
                        <td><?php echo $post["loai"] ?></td>
                        <td><?php echo number_format($post["gia"])  ?></td>
                        <td><img src="img/<?php echo $post["anh"] ?>" style="width: 80px; height: 100px" alt=""></td>
                        <td><?php echo $post["ghichu"] ?></td>


                        <td><a href="mobile_mng.php?id=<?php echo $post["stt"]?>" ><i class="fas fa-pen-square" style="font-size: 30px"></i></a></td>
                        <td><a href="hiep_delete.php?id=<?php echo $post["stt"]?>" onclick="return alert('Delete?')"><i class="fas fa-trash"  style="font-size: 30px;color:red"></i></a></td>

                    </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </form>
        </div>


    </div>
    <!--end-->

</div>
</div>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
</body>
</html>