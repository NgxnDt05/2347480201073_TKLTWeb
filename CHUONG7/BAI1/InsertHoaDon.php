<?php
// 1. Kết nối database
$conn = mysqli_connect("127.0.0.1", "root", "", "quanlybanhang");

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
} else echo "Kết nối thành công!";
mysqli_set_charset($conn, "utf8");

// 2. Kiểm tra nếu có dữ liệu gửi từ POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Thu thập dữ liệu từ form
    $mahd = $_POST['mahd'];
    $makh = $_POST['makh'];
    $mahang = $_POST['mahang'];
    $soluong = $_POST['soluong'];

    // 3. Thực hiện chèn dữ liệu
    // Lưu ý: Cột thanhtien để NULL theo cấu trúc mặc định của bạn
    $sql = "INSERT INTO hoadon (mahd, makh, mahang, soluong, thanhtien) 
            VALUES ('$mahd', '$makh', '$mahang', $soluong, NULL)";

    if (mysqli_query($conn, $sql)) {
        echo "<div style='text-align:center; margin-top:50px;'>";
        echo "<h2>Thành công!</h2>";
        echo "<p>Đã thêm hóa đơn $mahd cho khách hàng $makh.</p>";
        echo "<a href='InsertHangHoa.html'>Tiếp tục nhập</a>";
        echo "</div>";
    } else {
        echo "<div style='color:red;'>";
        echo "Lỗi: " . mysqli_error($conn);
        echo "<br>Vui lòng kiểm tra xem Mã KH và Mã Hàng có tồn tại trong hệ thống chưa?";
        echo "</div>";
    }
}

// 4. Đóng kết nối
mysqli_close($conn);
?>