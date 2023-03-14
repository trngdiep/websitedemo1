<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mobile_hiep';
$conn = new mysqli($servername,$username,$password,$dbname);
$sql = "DELETE FROM mobile where stt = ".$_GET["id"];
if (mysqli_query($conn, $sql)) {
    header("Location: mobile_mng.php");
} else {
    echo "Lỗi kêt nối đến: " . mysqli_error($conn);
}
?>