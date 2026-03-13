<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Sinh Viên</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
        input[type="text"], input[type="date"], input[type="number"] { width: 100%; padding: 8px; margin: 8px 0; box-sizing: border-box; }
        input[type="submit"] { background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
        input[type="submit"]:hover { background-color: #45a049; }
        .result { margin-top: 20px; padding: 15px; background-color: #f9f9f9; border-left: 4px solid #4CAF50; }
    </style>
</head>
<body>

<div class="container">
    <h2>Nhập Thông Tin Sinh Viên</h2>
    
    <form method="POST" action="">
        <label for="hoten">Họ tên:</label>
        <input type="text" id="hoten" name="hoten" required>
        
        <label for="lop">Lớp:</label>
        <input type="text" id="lop" name="lop" required>
        
        <label for="ngaysinh">Ngày sinh:</label>
        <input type="date" id="ngaysinh" name="ngaysinh" required>
        
        <label for="diem">Điểm:</label>
        <input type="number" id="diem" name="diem" step="0.1" min="0" max="10" required>
        
        <input type="submit" name="submit" value="Xuất thông tin">
    </form>

    <?php
    // Kiểm tra xem người dùng đã bấm nút submit chưa
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        // Lấy dữ liệu từ form và xử lý cơ bản để chống lỗi hiển thị (XSS)
        $hoten = htmlspecialchars($_POST['hoten']);
        $lop = htmlspecialchars($_POST['lop']);
        // Định dạng lại ngày sinh từ YYYY-MM-DD sang DD-MM-YYYY cho quen thuộc
        $ngaysinh = date("d-m-Y", strtotime($_POST['ngaysinh'])); 
        $diem = htmlspecialchars($_POST['diem']);

        // Xuất thông tin
        echo "<div class='result'>";
        echo "<h3>Thông tin vừa nhập:</h3>";
        echo "<b>Họ tên:</b> " . $hoten . "<br><br>";
        echo "<b>Lớp:</b> " . $lop . "<br><br>";
        echo "<b>Ngày sinh:</b> " . $ngaysinh . "<br><br>";
        echo "<b>Điểm:</b> " . $diem . "<br>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
